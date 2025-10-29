<!-- Thanks for viewing the source code. I don't minify for readability. © 2025 - FailXontour -->
<!DOCTYPE html>
<html class="theme-auto" lang="en">
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>FailXontour - Blog</title>
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
    <style>
    .gravatar-box{
        display:inline-block;
    }
    .gravatar-hovercard {
        display: inline-block;
        line-height: 1.5;
        z-index: 10000000
    }
    .gravatar-hovercard,.gravatar-hovercard:after,.gravatar-hovercard:before {
        box-sizing: border-box
    }
    .gravatar-hovercard * {
        appearance: none;
        -webkit-appearance: none;
        -moz-appearance: none;
        background: transparent;
        border: 0;
        box-sizing: inherit;
        line-height: inherit;
        list-style: none;
        margin: 0;
        padding: 0;
        vertical-align: baseline
    }
    .gravatar-hovercard a {
        cursor: pointer;
        text-decoration: none
    }
    .gravatar-hovercard button {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0
    }
    .gravatar-hovercard img,.gravatar-hovercard svg {
        display: block;
        height: auto;
        max-width: 100%
    }
    .gravatar-hovercard a:focus-visible,.gravatar-hovercard button:focus-visible {
        outline: 2px solid revert
    }
    .gravatar-hovercard .gravatar-hovercard__inner {
        border-radius: 1em;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        min-height: 273px;
        overflow: hidden;
        padding: 24px 24px 16px;
        position: relative;
        width: 100%
    }
    .gravatar-hovercard .gravatar-hovercard__header-image {
        height: 75px;
        left: 50%;
        overflow-y: hidden;
        position: absolute;
        top: 0;
        transform: translateX(-50%);
        width: 100%
    }
    .gravatar-hovercard .gravatar-hovercard__header-image-img {
        filter: blur(40px);
        -o-object-fit: cover;
        object-fit: cover;
        transform: translateY(-30%);
        width: 100%
    }
    .gravatar-hovercard .gravatar-hovercard__header {
        display: flex;
        flex-direction: column;
        gap: 8px;
        z-index: 1
    }
    .gravatar-hovercard .gravatar-hovercard__avatar-link {
        width: -moz-fit-content;
        width: fit-content
    }
    .gravatar-hovercard .gravatar-hovercard__avatar {
        background-color: #eee;
        border-radius: 50%
    }
    .gravatar-hovercard .gravatar-hovercard__name {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        font-size: var(--scale-5);
        font-weight: 700;
        line-height: 38px;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-word
    }
    .gravatar-hovercard .gravatar-hovercard__job,.gravatar-hovercard .gravatar-hovercard__location {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        color: #707070;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-word
    }
    .gravatar-hovercard .gravatar-hovercard__body {
        margin-top: 8px
    }
    .gravatar-hovercard .gravatar-hovercard__description {
        color: #000;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-word
    }
    .gravatar-hovercard .gravatar-hovercard__social-links {
        align-items: center;
        display: flex;
        gap: 4px;
        margin-top: 16px
    }
    .gravatar-hovercard .gravatar-hovercard__buttons {
        display: flex;
        gap: 16px;
        margin-top: 16px
    }
    .gravatar-hovercard .gravatar-hovercard__button {
        border: 1px solid rgba(29,79,196,.3);
        border-radius: 4px;
        color: #1d4fc4;
        font-size: 15px;
        font-weight: 600;
        line-height: 21px;
        min-height: 42px;
        padding: 8px;
        width: 100%
    }
    .gravatar-hovercard .gravatar-hovercard__button:hover {
        border: 1px solid rgba(29,79,196,.6)
    }
    .gravatar-hovercard .gravatar-hovercard__footer {
        align-items: center;
        display: flex;
        gap: 12px;
        justify-content: space-between;
        margin-top: 12px
    }
    .gravatar-hovercard .gravatar-hovercard__profile-url {
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        color: #707070;
        overflow: hidden;
        text-overflow: ellipsis;
        word-break: break-word;
        word-break: break-all
    }
    .gravatar-hovercard .gravatar-hovercard__profile-link {
        color: #707070;
        flex-shrink: 0;
        margin-right: 2em;
    }
    .gravatar-hovercard--skeleton .gravatar-hovercard__avatar-link,.gravatar-hovercard--skeleton .gravatar-hovercard__personal-info-link,.gravatar-hovercard--skeleton .gravatar-hovercard__profile-link,.gravatar-hovercard--skeleton .gravatar-hovercard__profile-url,.gravatar-hovercard--skeleton .gravatar-hovercard__social-link {
        background-color: #eee
    }
    .gravatar-hovercard--skeleton .gravatar-hovercard__avatar-link {
        border-radius: 50%;
        height: 104px;
        width: 104px
    }
    .gravatar-hovercard--skeleton .gravatar-hovercard__personal-info-link {
        height: 38px;
        width: 70%
    }
    .gravatar-hovercard--skeleton .gravatar-hovercard__social-link {
        border-radius: 50%;
        height: 32px;
        width: 32px
    }
    .gravatar-hovercard--skeleton .gravatar-hovercard__profile-url {
        height: 21px;
        width: 50%
    }
    .gravatar-hovercard--skeleton .gravatar-hovercard__profile-link {
        height: 21px;
        width: 96px;
    }
    .gravatar-hovercard--error .gravatar-hovercard__inner {
        align-items: center;
        gap: 34px;
        justify-content: center
    }
    .gravatar-hovercard--error .gravatar-hovercard__error-message-wrapper {
        align-items: center;
        display: flex;
        flex-direction: column
    }
    .gravatar-hovercard--error .gravatar-hovercard__error-message {
        color: #707070
    }
    .gravatar-hovercard--error .gravatar-hovercard__error-message.gravatar-hovercard__error-message--claim-gravatar a {
        text-decoration: underline
    }
    .gravatar-hovercard__drawer {
        bottom: 0;
        left: 0;
        overflow: hidden;
        position: absolute;
        right: 0;
        top: 0;
        visibility: hidden;
        z-index: 1
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-backdrop {
        background-color: rgba(0,0,0,.4);
        bottom: 0;
        left: 0;
        opacity: 0;
        position: absolute;
        right: 0;
        top: 0;
        transition: opacity .3s ease-in-out
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-card {
        background-color: #fff;
        border-top-left-radius: 4px;
        border-top-right-radius: 4px;
        bottom: 0;
        display: flex;
        flex-direction: column;
        left: 0;
        max-height: 100%;
        padding: 20px 0;
        position: absolute;
        transform: translate3d(0,100%,0);
        transition: transform .3s ease-in-out;
        width: 100%
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-header {
        align-items: center;
        display: flex;
        justify-content: space-between;
        margin-bottom: 16px;
        padding: 0 20px
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-title {
        font-size: 18px;
        font-weight: 700;
        line-height: 27px
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-close {
        align-items: center;
        display: flex;
        justify-content: center
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-items {
        display: flex;
        flex-direction: column;
        gap: 12px;
        overflow-y: auto;
        padding: 0 20px
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-item {
        align-items: start;
        display: flex;
        gap: 8px
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-item-info {
        display: flex;
        flex-direction: column
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-item-label {
        font-weight: 600;
        line-height: 24px;
        text-transform: capitalize
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-item-link {
        color: #1d4fc4
    }
    .gravatar-hovercard__drawer .gravatar-hovercard__drawer-item-link:hover {
        text-decoration: underline
    }
    .gravatar-hovercard__drawer.gravatar-hovercard__drawer--open {
        visibility: visible
    }
    .gravatar-hovercard__drawer.gravatar-hovercard__drawer--open .gravatar-hovercard__drawer-backdrop {
        opacity: 1
    }
    .gravatar-hovercard__drawer.gravatar-hovercard__drawer--open .gravatar-hovercard__drawer-card {
        transform: translateZ(0)
    }
    .gravatar-hovercard__drawer.gravatar-hovercard__drawer--closing {
        visibility: visible
    }
    .gravatar-hovercard__drawer.gravatar-hovercard__drawer--closing .gravatar-hovercard__drawer-backdrop {
        opacity: 0
    }
    .gravatar-hovercard__drawer.gravatar-hovercard__drawer--closing .gravatar-hovercard__drawer-card {
        transform: translate3d(0,100%,0)
    }
    .share-drawer__qr-code-wrapper {
    align-items: center;
    background-image: url("https://0.gravatar.com/bg/222401715/4d699bfa7cd3330f67045646b520c224");
    background-size: 30%;
    border-radius: 8px;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    margin-bottom: 24px;
    overflow: hidden;
    perspective: 800px;
    position: relative;
    width: 100%;
    z-index: 0
}

.share-drawer__qr-code-wrapper:hover .share-drawer__qr-code-content {
    transform: rotateX(var(--x-rotation)) rotateY(var(--y-rotation))
}

.share-drawer__qr-code-content,.share-drawer__qr-download-btn {
    align-items: center;
    display: flex;
    flex-direction: column
}

.share-drawer__qr-code-content {
    padding: 32px 32px 24px;
    position: relative;
    transform-style: preserve-3d;
    transition: transform .1s;
    z-index: 1
}

.share-drawer__qr-download-btn {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 10px 0 rgba(0,0,0,.08);
    overflow: hidden
}

.share-drawer__qr-download-btn:hover {
    text-decoration-line: none
}

.share-drawer__download-label {
    background: #f0f0f0;
    box-sizing: border-box;
    color: #101517;
    font-size: 14px;
    letter-spacing: -.32px;
    line-height: 20px;
    padding: 8px 12px;
    text-align: center;
    width: 200px
}

.share-drawer .g-drawer__content-wrapper {
    align-items: center;
    display: flex;
    flex-direction: column;
    overflow: hidden;
    padding-top: 24px
}
    </style>
</head>
<body>

<div class="container-justify">
  <article class="gravatar-box">
  <div class="gravatar-hovercard">
                        <div class="gravatar-hovercard__inner">
                                <div class="gravatar-hovercard__header-image" style="background: url(&quot;https://0.gravatar.com/userimage/222401715/a8acdecfdcc16021cd3fc709c5d0cc4f?size=1024&quot;) 50% 50% / 100% no-repeat; width: 560px; left: 279px;"></div>
                                <div class="gravatar-hovercard__header">
                                        <a class="gravatar-hovercard__avatar-link" href="https://gravatar.com/failxontour?utm_source=hovercard" target="_blank">
                                                <img class="u-photo gravatar-hovercard__avatar" src="https://0.gravatar.com/avatar/a2dc60be9a7180a6813575ccb4acd671785a7de3aa064eaf8bb65d9a323b1959?s=256&amp;d=initials" width="104" height="104" alt="failxontour">
                                        </a>
                                        <a class="gravatar-hovercard__personal-info-link" href="https://gravatar.com/failxontour?utm_source=hovercard" target="_blank">
                                                <a href="https://failxontour.de/blog" class="h-card" rel="me"><h4 class="gravatar-hovercard__name">failxontour</h4></a>

                                                <p class="gravatar-hovercard__location">Hannover</p>
                                        </a>
                                </div>
                                <div class="gravatar-hovercard__body">
                                                                <p class="gravatar-hovercard__description"></p>
                                                        </div>
                                <div class="gravatar-hovercard__social-links">
                                        <a class="gravatar-hovercard__social-link" href="https://gravatar.com/failxontour?utm_source=hovercard" target="_blank" data-service-name="gravatar">
                                                <img class="gravatar-hovercard__social-icon" src="https://s.gravatar.com/icons/gravatar.svg" width="32" height="32" style="filter: invert(94%) sepia(0%) saturate(24%) hue-rotate(87deg) brightness(105%) contrast(108%);" alt="Gravatar">
                                        </a>

                                </div>

                                <div class="gravatar-hovercard__footer">
                                        <a class="gravatar-hovercard__profile-url" title="https://gravatar.com/failxontour" href="https://gravatar.com/failxontour?utm_source=profile-card" target="_blank">
                                                gravatar.com/failxontour
                                        </a>
                                        <a class="gravatar-hovercard__profile-link" href="https://gravatar.com/failxontour?utm_source=profile-card" target="_blank">
                                                View profile →
                                        </a>
                                </div>
                        </div>
  </article>
<h1>welcome on my blog</h1>
<h2><strong><a href="https://failxontour.de/blog/2025-08-27.html">latest article</a></strong></h2>
<br>
<!-- Vibe coded with duck.ai and GPT-4o mini -->
    <?php
    // Funktion zum Extrahieren des <h1>-Textes
    function extractH1Text($filename)
    {
        $dom = new DOMDocument();
        @$dom->loadHTMLFile($filename); // Das '@' unterdrückt Warnungen bei ungültigem HTML
        $h1 = $dom->getElementsByTagName("h1");
        return $h1->length > 0
            ? $h1->item(0)->nodeValue
            : "Kein Titel gefunden";
    }

    // Array mit Dateinamen
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
<a href="/">go back to link space</a><br><br>
<div class="share-drawer__qr-code-wrapper" style="--x-rotation: 2.91095890410959deg; --y-rotation: 1.707317073170731deg;">
<div class="share-drawer__qr-code-content">
                        <a class="share-drawer__qr-download-btn" href="https://gravatar.com/failxontour.qr?type=user&amp;version=3" download="failxontour.png" data-drawer-close="">
                                <img class="share-drawer__qr-code" src="https://gravatar.com/failxontour.qr?type=user&amp;version=3" width="200" height="200" alt="QR Code" data-qr-code-url="https://gravatar.com/failxontour.qr?type=user&amp;version=3">
                                <span class="share-drawer__download-label">
                                        Download QR                             </span>
                        </a>
                </div>
</div>
        <p>made with <a href="https://obsidian.md/">Obsidian</a> and the plugin Copy document as HTML from <a href="https://github.com/mvdkwast/obsidian-copy-as-html">mvdkwast</a></p><br>
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
  <script>
                const hovercardInner = document.querySelector('.gravatar-hovercard__inner');

                function openDrawer( target, container ) {
                        const selector = '.gravatar-hovercard__drawer[data-drawer-name="' + target.dataset.targetDrawer + '"]';
                        const drawer = container.querySelector( selector );
                        drawer?.classList.add( 'gravatar-hovercard__drawer--open' );
                }

                function closeDrawer( target, container ) {
                        const selector = '.gravatar-hovercard__drawer[data-drawer-name="' + target.dataset.targetDrawer + '"]';
                        const drawer = container.querySelector( selector );
                        drawer?.classList.add( 'gravatar-hovercard__drawer--closing' );
                        drawer?.classList.remove( 'gravatar-hovercard__drawer--open' );

                        setTimeout( () => {
                                drawer?.classList.remove( 'gravatar-hovercard__drawer--closing' );
                        }, 300 );
                }

                hovercardInner.querySelectorAll( '.gravatar-hovercard__button' ).forEach( ( el ) => {
                        el.addEventListener( 'click', () => openDrawer( el, hovercardInner ) );
                } );
                hovercardInner.querySelectorAll( '.gravatar-hovercard__drawer-close' ).forEach( ( el ) => {
                        el.addEventListener( 'click', () => closeDrawer( el, hovercardInner ) );
                } );
                hovercardInner.querySelectorAll( '.gravatar-hovercard__drawer-backdrop' ).forEach( ( el ) => {
                        el.addEventListener( 'click', () => closeDrawer( el, hovercardInner ) );
                } );
        </script></div>
</body>
</html>