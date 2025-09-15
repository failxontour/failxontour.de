#!/bin/bash
# -------------------------------------------------
# Deploy‑Skript für failxontour.de
# -------------------------------------------------

# ---------- 1. Umgebung festlegen ----------
export PATH="/usr/local/bin:/usr/bin:/bin"
export HOME="/tmp"               # verhindert git‑config‑Probleme
set -e                          # sofort abbrechen bei Fehler
set -x                          # jede Zeile + Ausgabe (wird an PHP zurückgeloggt)

# ---------- 2. Arbeitsverzeichnis ----------
SCRIPT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")" && pwd)"
cd "$SCRIPT_DIR"

# ---------- 3. Branch festlegen ----------
# Nutze den Branch, den du wirklich hast.
# In deinem Repo heißt er offenbar "public".  Wenn du später zu "main"
# wechselst, einfach den Namen hier anpassen.
BRANCH="public"

# ---------- 4. Repository aktualisieren ----------
git fetch origin

# Zeige kurz, was sich geändert hat (optional, nur zu Debug‑Zwecken)
git log --oneline --decorate --graph -n 5 "origin/$BRANCH"

# Setze die Arbeitskopie exakt auf den Remote‑Stand
git reset --hard "origin/$BRANCH"

# ---------- 5. (Optional) Build‑Schritte ----------
# composer install --no-dev --optimize-autoloader
# npm ci && npm run build

# ---------- 6. Ende ----------
# Durch `set -x` bekommst du die komplette Ausgabe im Log.

LOGFILE="/www/htdocs/w01f8336/failxontour.de/deploy.log"
mv "$LOGFILE" "${LOGFILE}.$(date +%Y%m%d%H%M%S)"
touch "$LOGFILE"

if [ $? -ne 0 ]; then
    echo "Deploy failed at $(date)" | mail -s "Deploy error" webmaster@failxontour.de
fi