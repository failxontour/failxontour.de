<!-- Thanks for viewing the source code. I don't minify for readability. © 2025 - FailXontour -->
<!DOCTYPE html>
<html class="theme-auto" lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>✍ Blog</title>
   <link rel="icon" type="image/png" href="../images/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/svg+xml" href="../images/favicon.svg">
    <link rel="shortcut icon" href="..images/favicon.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon.png">
    <meta name="apple-mobile-web-app-title" content="failxontour">
    <link rel="manifest" href="../images/site.webmanifest">
    <meta name="description" content="find all my hot links to socials, blog'n' stuff here">
    <meta name="keywords" content="failxontour, failx">
    <link rel="canonical" href="https://failxontour.de/blog">
    <meta name="author" content="failxontour">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/brands.css">
    <link rel="alternate" type="application/rss+xml" title="FailXontour RSS Feed" href="rss.xml">
    <link rel="alternate" type="application/atom+xml" title="FailXontour Atom Feed" href="atom.xml">
</head>
<body>
  </article>
<h1>welcome on my blog</h1>
<h2><strong><a href="/blog/2025/08/not_dead_yet">latest article</a></strong></h2>
<br>
<!-- Vibe coded with duck.ai and GPT-4o mini -->
    <?php
    // Funktion zum Extrahieren des <h1>-Textes
    function extractH1Text($filename)
    {
        $filePath = $filename;
        if (!file_exists($filePath)) {
            $filePath .= '.html'; // Füge die Erweiterung hinzu, wenn die Datei nicht gefunden wird
        }
    
        $dom = new DOMDocument();
        @$dom->loadHTMLFile($filePath); // Das '@' unterdrückt Warnungen bei ungültigem HTML
        $h1 = $dom->getElementsByTagName("h1");
        return $h1->length > 0
            ? $h1->item(0)->nodeValue
            : "Kein Titel gefunden";
    }
    // Array mit Dateinamen ohne .html
    $files = [
        "2025/07/hey",
        "2025/07/mein-setup",
        "2025/07/was-sind-cookies",
        "2025/07/pressure-to-be-better",
        "2025/07/the-pain-struggle-of-accessing-ilo4-linux",
        "2025/07/data-recovery_emulators",
        "2025/07/no_headliner_today_nothing_new_in_the_west",
        "2025/08/not_dead_yet",
    ];
    // Der Rest deines Skripts bleibt unverändert
    // Array zur Speicherung der Links
    $links = [];

    // Durchlaufe die Dateien und erstelle Links
    foreach ($files as $file) {
        $h1Text = extractH1Text($file);
        $link =
            '<p><a href="' .
            $file .
            '">' .
            htmlspecialchars($h1Text) .
            "</a></p>";
        $links[] = $link; // Füge den Link zum Array hinzu
    }
    // Ausgabe der Links
    echo "<div class='links-container'>" . implode("\n", $links) . "</div>";
    ?>
<br>
<div class="column">
  <strong><small>click for RSS/Atom feed</small></strong>
<a href="../rss.xml" style="display:inline-block"><img alt="RSS Feed" src="../images/icons/square-rss-solid.svg"></a>
<a href="../atom.xml" style="display:inline-block"><img alt="Atom Feed" src="../images/icons/atom-solid.svg"></a>
</div>
<a href="/">go back to link space</a>
    <p>made with <a rel="noopener" href="https://obsidian.md/">Obsidian</a> and the plugin Copy document as HTML from <a href="https://github.com/mvdkwast/obsidian-copy-as-html">mvdkwast</a></p><br>
<p>© 2025 - FailXontour</p>
<br>
last time updated<p id="lastupdated"></p>
page size<br>
<?php
$filename = "index.php";
echo $filename . ": " . filesize($filename) . " bytes";
?>
</div>
    <script>    
      const date = new Date(document.lastModified);
      document.getElementById("lastupdated").innerHTML = date;        
        </script>
</div>
</body>
</html>