<?php


$userLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
if ($userLang == '' || $userLang != 'tr' || $userLang != 'fr' || $userLang != 'es'){
    $json_url = "./assets/en.json";
    $json = file_get_contents($json_url, true);
    $data = json_decode($json);
}
if ($userLang == 'tr'){
    $json_url = "./assets/tr.json";
    $json = file_get_contents($json_url, true);
    $data = json_decode($json);
}
if ($userLang == 'fr') {
    $json_url = "./assets/fr.json";
    $json = file_get_contents($json_url, true);
    $data = json_decode($json);
}
if ($userLang == 'es') {
    $json_url = "./assets/es.json";
    $json = file_get_contents($json_url, true);
    $data = json_decode($json);
}
?>
<!--
* Bugra SIKEL tarafindan eglence amacli hazirlanmistir.
* author: @bugraskl
* https://www.bugra.work
* https://rgsteknoloji.com.tr
* bugraskl@gmail.com
-->
<!DOCTYPE html>
<html lang="<?= $data->lang ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data->title ?></title>
    <meta name="author" content="bugraskl@gmail.com">
    <meta http-equiv="content-language" content="<?= $data->lang ?>">
    <meta name="robots" content="index,follow">
    <meta name="description" content="<?= $data->desc ?>">
    <link rel="stylesheet" href="./assets/app.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/d97b87339f.js" crossorigin="anonymous"></script>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="./assets/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="./assets/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="./assets/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="./assets/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="./assets/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="./assets/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="./assets/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="./assets/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="./assets/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicons/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<header>
    <ul>
        <li><a class="links" href="#user">
                <button class="signbutton" type="button"><?= $data->login ?></button>
            </a>
        </li>
        <li><a href="#grid"><img class="grid"
                                 src="./assets/img/Material_icons-01-11-512.webp"
                                 title="Google apps"></a></li>
        <li><a href="#images"><?= $data->images ?></a></li>
        <li><a href="#gmail">Gmail</a></li>
    </ul>
</header>
<div class="centered">
    <div class="logo">
        <img alt="Google" src="./assets/img/googleLogo.png">
        <h2 class="title"><?= $data->h1 ?></h2>
    </div>
    <div class="bar">
        <input class="searchbar" id="searchinput" type="text" title="Search">
        <a class="voice-area" href="#"> <img class="voice"
                                             src="./assets/img/Google_mic.svg.webp"
                                             title="Search by Voice"></a>
    </div>
    <div class="buttons">
        <button class="button" id="google_search" type="button"><?= $data->searchbtn ?></button>
        <button class="button" type="button"><?= $data->lucky ?></button>
    </div>
    <div class="messages"></div>
    <div class="clipboard">
        <input class="copy-input copyurl" value="" id="copyClipboard" readonly>
        <button class="copy-btn copyurl" id="copyButton" title="Kopyala" onclick="copyURL()"><i class="far fa-copy"></i>
        </button>
        <button class="copy-btn" id="goButton" title="Linke Git"><i class="fas fa-arrow-right"></i>
        </button>
        <div class="share-buttons">
            <a class="share-btn tw" href="#"><i class="fa fa-twitter"></i></a>
            <a class="share-btn ln" href="#"><i class="fa fa-linkedin"></i></a>
            <a class="share-btn wp" href="#" data-action="share/whatsapp/share"><i class="fa fa-whatsapp"></i></a>
            <a class="share-btn tg" href="https%3A%2F%2Fsharethis.com%2Fsocial-media-buttons%2Ffacebook-share-button%2F&text=Facebook%20Share%20Button%3A%20How%20to%20Add%20to%20Your%20Website%20-%20ShareThis&to="><i class="fa fa-telegram"></i></a>
        </div>
    </div>

    <div id="copied-success" class="copied">
        <span><?= $data->copied ?></span>
    </div>
</div>
<img id='mouseCursor' src='./assets/img/mouse_arrow.png'/>
<script src="./assets/app.js"></script>
</body>
</html>