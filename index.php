<!DOCTYPE HTML>
<html lang="en">

<?php

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

include 'portfolio.php';

$social_icons = array(
    array(
        'padded' => true,
        'link' => 'http://twitter.com/friggog',
        'path' => '<path d="M679 239s-21 34-55 57c7 156-107 329-314 329-103 0-169-50-169-50s81 17 163-45c-83-5-103-77-103-77s23 6 50-2c-93-23-89-110-89-110s23 14 50 14c-84-65-34-148-34-148s76 107 228 116c-22-121 117-177 188-101 37-6 71-27 71-27s-12 41-49 61c30-2 63-17 63-17z"/>',
    ),
    array(
        'padded' => true,
        'link' => 'https://uk.linkedin.com/in/charlie-hewitt-48a175110',
        'path' => '<path d="M268 629h-97V319h97zm157 0h-97V319h93v42h1q31-50 93-50 114 0 114 133v185h-96V466q0-70-49-70-59 0-59 69z"/><circle cx="219" cy="220" r="56"/>',
    ),
    array(
        'link' => 'http://github.com/friggog',
        'path' => '<path d="M400 139c144 0 260 116 260 260 0 115-75 213-178 247-9 3-17-2-17-13v-71c0-35-18-48-18-48 57-6 119-28 119-128 0-44-27-70-27-70s14-29-2-69c0 0-22-7-72 27-42-12-88-12-130 0-50-34-72-27-72-27-16 40-2 69-2 69s-27 26-27 70c0 100 62 122 119 128 0 0-14 10-17 35-15 7-53 18-76-22 0 0-13-25-39-27 0 0-26 0-2 16 0 0 17 8 29 38 0 0 16 51 88 35v44c0 11-9 16-18 13-103-34-178-132-178-247 0-144 116-260 260-260z"/>',
    ),
);

?>

<head>
    <title>Charlie Hewitt</title>
    <meta name="description" content="Charlie Hewitt's personal site."></meta>
    <meta name="keywords" content="charlie hewitt"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/normalize.css" type="text/css">
    <link rel="stylesheet" href="Styles/style.css" type="text/css">
    <script src="Scripts/main.js" type="text/javascript"></script>
</head>

<body>
    <div id="top">
        <div style="height:2rem"></div>
        <div class="header-bg"></div>
        <div class="header">
            <div class="content">
                <h1>Charlie Hewitt</h1>
            </div>
        </div>
        <div class="padder"></div>
        <nav class="menu">
            <div class="content">
                <div class="hamburger" onclick="showMenu()">&#9776;</div>
                <ul class="menu-ul">
                    <a href="#portfolio" onclick="goToPortfolio();return false;">
                        <li>Portfolio</li>
                    </a>
                    <a href="#other" onclick="goToAbout();return false;">
                        <li>About</li>
                    </a>
                    <a href="mailto:contact@chewitt.me">
                        <li class="contact">Contact</li>
                    </a>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <section id="portfolio">
            <div class="content">
                <?php
                    foreach ($portfolio_items as $item) {
                        echo $twig->render('portfolio_item.html', $item);
                    }
                ?>
            </div>
        </section>
        <section id="other">
            <img src="pic.jpg" class="pic" />
            <ul class="social-icons">
                <?php
                    foreach ($social_icons as $item) {
                        echo $twig->render('social_icon.html', $item);
                    }
                ?>
            </ul>
            <p>I'm a <?php
                    $bd = new DateTime('1995-09-13');
                    $diff = $bd->diff(new DateTime());
                    echo $diff->y;
                ?> year old student living near London in the UK.</p>
            <p>I'm studying for an MEng in computer science at the University of Cambridge.</p>
            <p>I like to design and code things - apps, websites, iOS tweaks, icons &amp; interfaces.</p>
            <p>I also love to play and write music, take photos &amp; row.</p>
            <p>A full CV is available <a href="cv.html" target="_blank">here</a>.</p>
            <a class="btn white" href="mailto:contact@chewitt.me" target="_blank">
                Get in touch
            </a>
        </section>
        <div class="copy">&copy; 2017</div>
    </div>
</body>

</html>
