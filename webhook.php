<?php
/* -------------------------------------------------
   GitHub‑/Cron‑Webhook – verbessertes Logging
   ------------------------------------------------- */
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/* ---------- 1. Log‑Datei (absoluter Pfad) ---------- */
$logFile = '/www/htdocs/w01f8336/failxontour.de/deploy.log';

/* ---------- 2. Hilfsfunktion ---------- */
function log_msg(string $msg) : void {
    global $logFile;
    $line = '[' . date('Y-m-d H:i:s') . '] ' . $msg . PHP_EOL;
    // Fallback in Apache‑Error‑Log, falls das Schreiben fehlschlägt
    if (@file_put_contents($logFile, $line, FILE_APPEND) === false) {
        error_log('DEPLOY LOG FALLBACK: ' . $msg);
    }
}

/* ---------- 3. Eingehende HTTP‑Methode protokollieren ---------- */
$method = $_SERVER['REQUEST_METHOD'] ?? 'UNKNOWN';
log_msg("Incoming request: METHOD=$method FROM=" . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));

/* ---------- 4. Nur POST zulassen ---------- */
if ($method !== 'POST') {
    http_response_code(405);               // Method Not Allowed
    log_msg("Rejected non‑POST request (METHOD=$method)");
    exit('Only POST allowed');
}

/* ---------- 5. (Optional) GitHub‑Signature prüfen ----------
   Setze im All‑Inkl‑Panel eine Umgebungsvariable WEBHOOK_SECRET */
$secret = getenv('WEBHOOK_SECRET');
$payload = file_get_contents('php://input');
$signature = $_SERVER['HTTP_X_HUB_SIGNATURE_256'] ?? '';

if ($secret && $signature) {
    $expected = 'sha256=' . hash_hmac('sha256', $payload, $secret);
    if (!hash_equals($expected, $signature)) {
        http_response_code(403);
        log_msg('Invalid signature from ' . ($_SERVER['REMOTE_ADDR'] ?? 'unknown'));
        exit('Invalid signature');
    }
}

/* ---------- 6. Deploy‑Skript starten ---------- */
$script = __DIR__ . '/deploy.sh';
if (!is_executable($script)) {
    http_response_code(500);
    log_msg('Deploy script not executable: ' . $script);
    exit('Deploy script not executable');
}

/* ----- DEBUG‑BLOCK – nur temporär einsetzen ----- */
$debugLog = __DIR__ . '/debug_webhook.log';
function dlog($msg) {
    global $debugLog;
    @file_put_contents($debugLog,
        '[' . date('Y-m-d H:i:s') . '] ' . $msg . PHP_EOL,
        FILE_APPEND);
}

/* Log‑Datei und Request‑Infos */
dlog('=== START ===');
dlog('Method=' . ($_SERVER['REQUEST_METHOD'] ?? '??'));
dlog('RemoteIP=' . ($_SERVER['REMOTE_ADDR'] ?? '??'));
dlog('Script=' . __DIR__ . '/deploy.sh');

/* Prüfen, ob das Skript existiert und ausführbar ist */
if (!file_exists(__DIR__.'/deploy.sh')) {
    dlog('ERROR: deploy.sh does NOT exist');
    http_response_code(500);
    exit('deploy.sh missing');
}
if (!is_executable(__DIR__.'/deploy.sh')) {
    dlog('ERROR: deploy.sh NOT executable');
    http_response_code(500);
    exit('deploy.sh not executable');
}

/* Ausführliche Umgebung ausgeben (PATH, USER, HOME…) */
dlog('PATH=' . getenv('PATH'));
dlog('USER=' . getenv('USER'));
dlog('HOME=' . getenv('HOME'));

/* Exec‑Aufruf mit voller Ausgabe */
$cmd = escapeshellcmd(__DIR__.'/deploy.sh') . ' 2>&1';
dlog('Running command: '.$cmd);
exec($cmd, $out, $ret);
dlog('Exec return code: '.$ret);
dlog('Exec output: '.implode("\n",$out));
dlog('=== END ===');

http_response_code(200);
echo 'OK';

/* ---------- 7. Alles OK ---------- */
http_response_code(200);
log_msg('Deploy succeeded – OK response sent');
echo 'OK';
?>