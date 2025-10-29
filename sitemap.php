<!DOCTYPE html>
<html class="theme-auto" lang="en">
    <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>FailXontour | Sitemap</title>
    <link
      rel="icon"
      type="image/png"
      href="../../../images/favicon-96x96.png"
      sizes="96x96"
    />
    <link rel="icon" type="image/svg+xml" href="../../../images/favicon.svg" />
    <link rel="shortcut icon" href="../../../images/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="../../../images/apple-touch-icon.png"
    />
    <meta name="apple-mobile-web-app-title" content="failxontour" />
    <link rel="manifest" href="../../../images/site.webmanifest" />
    <meta
      name="description"
      content="every link on a single site easily machine readable"
    />
    <meta name="keywords" content="failxontour, failx, sitemap" />
    <link rel="canonical" href="https://failxontour.de/sitemap" />
    <meta name="author" content="failxontour" />
</head>
<body>
<?php
function recurse($dir, &$links) {
  $files = array_diff(scandir($dir), ['.', '..']);
  
  // Verzeichnisse, die ausgeschlossen werden sollen
  $excludedDirs = ['.vscode', '.github', '.git', 'js', 'css', 'downloads', 'images', 'hashover', 'svgs', 'audio', 'videos', 'blog'];

  foreach ($files as $file) {
    // Überprüfen, ob das Verzeichnis ausgeschlossen werden soll
    if (in_array($file, $excludedDirs)) {
      continue; // Überspringe dieses Verzeichnis
    }

    if (is_dir($dir.'/'.$file)) {
      $links[] = '<li><a href="'.htmlspecialchars($dir.'/'.$file).'"><b>'.htmlspecialchars($file).'</b></a><ul>';
      recurse($dir.'/'.$file, $links);
      $links[] = '</ul></li>';
    } elseif (pathinfo($dir.'/'.$file, PATHINFO_EXTENSION) == 'html') {
      preg_match("'<h1>(.*?)</h1>'si", file_get_contents($dir.'/'.$file), $heading);
      $links[] = '<ul><a href="'.htmlspecialchars($dir.'/'.$file).'">'.strip_tags($heading[1]).'</a></ul>';
    }
  }
}

// Array für externe Links
$externalLinks = [
  '<li><a rel="noopener noreferrer" href="https://mastodon.social/@failxontour">Mastodon ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://matrix.to/#/#nebulon:matrix.org">Matrix ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://steamcommunity.com/id/failxontour/">Steam ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="mailto:friends@failxontour.de">friends@failxontour.de 📧</a></li>',
  '<li><a rel="noopener noreferrer" href="https://keys.openpgp.org/search?q=friends@failxontour.de">PGP-Key ⚠️🔑📧</a></li>',
  '<li><a rel="noopener noreferrer" href="mailto:failx@tutanota.de">Tuta 📧</a></li>',
  '<li><a rel="noopener noreferrer" href="mailto:failxontour@duck.com">Duck 📧</a></li>',
  '<li><a rel="noopener noreferrer" href="https://share.failxontour.de/">Stickers</a></li>',
  '<li><a rel="noopener noreferrer" href="https://felix.bauerschaefer.com/">Portfolio</a></li>',
  '<li><a rel="noopener noreferrer" href="https://thesa-fest.com/">JAUP</a></li>',
  '<li><a rel="noopener noreferrer" href="https://pronomen.net/@failxontour">Pronouns</a></li>',
  '<li><a rel="noopener noreferrer" href="https://guenther.bauerschaefer.com/">Dog</a></li>',
  '<li><a rel="noopener noreferrer" href="https://leitstelle511.net/">CCC | Leitstelle 511 ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://rockini-nienburg.com/">Rockini ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="http://burnoutfestival.com/">Burnout Festival ⛔</a></li>',
  '<li><a rel="noopener noreferrer" href="https://weserbeatz.de/">Weserbeatz ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://freibad-am-dobben.de/">Freibad am Dobben ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://das-sprotte.de/ihre-spende-ist-bei-uns-in-guten-haenden/">Das Sprotte ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://www.socialcarcrew.de/">Social Car Crew ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://www.instagram.com/bmw_crew_lk_nienburg/">BMW Crew Nienburg ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://www.rallye-sulingen.de/">Rallye Sulingen ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://www.dielinke-ni.de/start/">Die Linke ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://lnob.net/geforderte-projekte/sos-balkanroute/">SOS Balkanroute ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://spenden.dlrg.de/">DLRG ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://www.uno-fluechtlingshilfe.de/">UNO Flüchtlingshilfe ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://www.johanniter.de/">Johanniter ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://www.seenotretter.de/">Seenotretter ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://www.drk.de/">DRK ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://hanseatic-help.org/">Hanseatic ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://felix.bauerschaefer.com/datenschutz">Datenschutzerklärung (German)</a></li>',
  '<li><a rel="noopener noreferrer" href="https://felix.bauerschaefer.com/impressum">Impressum (German)</a></li>',
  '<li><a rel="noopener noreferrer" href="https://github.com/failxontour/failxontour.de">Github ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://codeberg.org/failxontour/failxontour.de">Codeberg ⚠️</a></li>',
  '<li><a rel="noopener noreferrer" href="https://littlelink.io/">LittleLink which is what my website is forked from ⚠️</a></li>',
  '<li><a rel="license" href="/cc-by-nc-sa-4.0.LICENSE">License for my content | CC-BY-NC-SA 4.0</a></li>'

];

$links = [
      '<li><a rel="license" href="/videos">Videos</a></li>'
]; // Array für interne Links

// Aufrufen mit dem aktuellen Verzeichnis ('.'),
// ggf. anpassen, wenn sitemap.php nicht im Root-Verzeichnis der Website liegt
recurse('.', $links);

// Füge die externen Links zum Haupt-Array hinzu
$links = array_merge($links);

// Sortiere die Links alphabetisch
sort($links);

// HTML-Ausgabe
echo '<ul>' . PHP_EOL;
echo implode(PHP_EOL, $links);
echo '</ul>' . PHP_EOL;
echo '<ul>' . PHP_EOL;
echo implode(PHP_EOL,$externalLinks);
echo '</ul>' . PHP_EOL;
?>
</body>
</html>