<?php
function recurse($dir) {
  $files = array_diff(scandir($dir), ['.', '..']);
  
  // Verzeichnisse, die ausgeschlossen werden sollen
  $excludedDirs = ['.vscode', '.github', '.git'];
  
  foreach ($files as $file) {
    // Überprüfen, ob das Verzeichnis ausgeschlossen werden soll
    if (in_array($file, $excludedDirs)) {
      continue; // Überspringe dieses Verzeichnis
    }

    if (is_dir($dir.'/'.$file)) {
      echo '<li><a href="'.htmlspecialchars($dir.'/'.$file).'"><b>'.htmlspecialchars($file).'</b></a><ul>'.PHP_EOL;
      recurse($dir.'/'.$file);
      echo '</ul></li>'.PHP_EOL;
    } elseif (pathinfo($dir.'/'.$file, PATHINFO_EXTENSION) == 'html') {
      preg_match("'<h1>(.*?)</h1>'si", file_get_contents($dir.'/'.$file), $heading);
      echo '<li><a href="'.htmlspecialchars($dir.'/'.$file).'">'.strip_tags($heading[1]).'</a></li>'.PHP_EOL;
    }
  }
}
?>
<!-- html --->
<ul>
<?php
// Aufrufen mit dem aktuellen Verzeichnis ('.'),
// ggf. anpassen, wenn sitemap.php nicht im Root-Verzeichnis der Website liegt
recurse('.');
?>
</ul>