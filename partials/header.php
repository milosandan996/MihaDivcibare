<!DOCTYPE html>
<?php
$curent = $_SERVER['REQUEST_URI'];
$canonicalURL = "https://apartman-divcibare.rs" . $curent;
?>
<html lang="sr">
    <head>

        <title>
            <?php
            if ($curent == '/index.php' || $curent == '/') {
                echo 'LUX APARTMAN MIHA DIVČIBARE';
            }
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan| www.hp-web-art.rs">
        <meta name="description" content="Mi smo vaša destinacija za savršen odmor u srcu prirode. Smešten
                na predivnim Divčibarama, Apartman MIHA pruža nezaboravno iskustvo
                u planinskom okruženju, bez kompromisa po pitanju udobnosti i luksuza.">
        <meta name="keywords" content="divcibare odmor, divcibare, divčibare, apartman, apartman divčibare, Miha Divčibare, apartman Miha Divcibare">

        <?php
        if ($curent == '/index.php' || $curent == 'http://apartman-divcibare.rs/index.php' || $curent == 'https://apartman-divcibare.rs/index.php' || $curent == 'http://www.apartman-divcibare.rs/' || $curent == 'https://www.apartman-divcibare.rs/') {
            echo '<link rel="canonical" href="https://apartman-divcibare.rs">';
        } else {
            echo '<link rel="canonical" href="' . $canonicalURL . '">';
        }
        ?>


        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="Apartman Miha Divčibare">
        <link rel="apple-touch-icon" href="iosLogo.png">

        <!--Android compatibility-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="Apartman Miha Divčibare">
        <link rel="icon" href="androidLogo.png">

        <!--CSS FILES-->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css">
        <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css">
        <link href="css/theme.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <header>
            <div id="top" class="container">
                <nav id="nav-1" class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand"  href="https://apartman-divcibare.rs">
                        <img class="logoHeader" src="logobgdark2.png" alt="HP Web Art | LOGO">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#main-nav" aria-controls="main-nav" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="main-nav">
                        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                            <li class="nav-item mb-3 mb-md-0 animation" data-animation="slideDown5">
                                <a class="nav-link" href="#onama">O NAMA</a>
                            </li>
                            <li class="nav-item mb-3 mb-md-0 animation" data-animation="slideDown4">
                                <a class="nav-link" href="#smestaj">SMEŠTAJ</a>
                            </li>
                            <li class="nav-item mb-3 mb-md-0 animation" data-animation="slideDown4">
                                <a class="nav-link" href="#galerija">GALERIJA</a>
                            </li>
                            <li class="nav-item mb-3 mb-md-0 animation" data-animation="slideDown4">
                                <a class="nav-link" href="#kontakt">KONTAKT</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>