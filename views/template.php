<!DOCTYPE html>
<html lang='fr'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Yannick Biheul</title>
    <!-- DESCRIPTION -->
    <meta name='description' content='Yannick Biheul, développement web sur Quimper. HTML, CSS/SCSS, JavaScript, PHP, MySQL, Symfony, Java, Bootstap...'>
    <meta property="og:image" content="/assets/images/quimper.jpg">
    <meta property="og:type" content="website" />
    <!-- FAVICON -->
    <link rel="icon" href="assets/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/apple-touch-icon-120x120-precomposed.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="assets/images/apple-touch-icon-152x152-precomposed.png" />
    <!-- CSS -->
    <link rel='stylesheet' href='assets/css/main.css'>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- GOOGLE FONTS -->
    <!-- Roboto -->
    <link href='https://fonts.googleapis.com/css2?family=Roboto&display=swap' rel='stylesheet'>
    <!-- Quicksand -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Quicksand&display=swap' rel='stylesheet'>
    <!-- Bangers -->
    <link rel='preconnect' href='https://fonts.gstatic.com'>
    <link href='https://fonts.googleapis.com/css2?family=Bangers&display=swap' rel='stylesheet'>
    <!-- FONTAWESOME -->
    <script src='https://kit.fontawesome.com/29ef46100e.js' crossorigin='anonymous'></script>
    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
</head>

<body>

    <!-- <nav>
        <a href="#presentation">Présentation</a>
        <a href="#diplomes">Diplômes</a>
        <a href="#experiences">Expériences</a>
        <a href="#reseaux">Réseaux</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#video-games">Jeux Vidéo</a>
        <a href="#contact">Contact</a>
    </nav> -->

    <main>
        <?= $content ?>
    </main>

    <footer>
        <a href="#">©2021 - Yannick Biheul</a>
    </footer>

    <!-- JAVASCRIPT -->
    <script src='assets/js/main.js'></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>