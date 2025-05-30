<!DOCTYPE HTML>
<html lang="en">

<?php
error_reporting(E_ALL ^ E_DEPRECATED);

require_once 'vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

include 'portfolio.php';

$social_icons = array(
    array(
        'link' => 'http://github.com/friggog',
        'path' => '<path d="M400 139c144 0 260 116 260 260 0 115-75 213-178 247-9 3-17-2-17-13v-71c0-35-18-48-18-48 57-6 119-28 119-128 0-44-27-70-27-70s14-29-2-69c0 0-22-7-72 27-42-12-88-12-130 0-50-34-72-27-72-27-16 40-2 69-2 69s-27 26-27 70c0 100 62 122 119 128 0 0-14 10-17 35-15 7-53 18-76-22 0 0-13-25-39-27 0 0-26 0-2 16 0 0 17 8 29 38 0 0 16 51 88 35v44c0 11-9 16-18 13-103-34-178-132-178-247 0-144 116-260 260-260z"/>',
    ),
    array(
        'padded' => true,
        'link' => 'https://uk.linkedin.com/in/charlie-hewitt-48a175110',
        'path' => '<path d="M268 629h-97V319h97zm157 0h-97V319h93v42h1q31-50 93-50 114 0 114 133v185h-96V466q0-70-49-70-59 0-59 69z"/><circle cx="219" cy="220" r="56"/>',
    ),
    array(
        'padded' => true,
        'link' => 'https://scholar.google.co.uk/citations?user=MkqRg64AAAAJ&hl=en',
        'path' => '<path d="M663.8,168.8v214.5c0,9.9-8.2,18.1-18.1,18.1h-6.6c-9.9,0-18.1-8.2-18.1-18.1V168.8c0-8.8-1.3-16.2,11-17.8v-28.5
    l-94.9,77.8c1.1,2,2.2,3.4,3.1,5c8.3,14.7,12.6,33.1,12.6,55.5c0,17.2-2.9,32.6-8.6,46.2c-5.8,13.6-12.8,24.8-21,33.4
    c-8.2,8.6-16.4,16.5-24.6,23.5c-8.2,7.1-15.3,14.5-21,22.2c-5.8,7.7-8.7,15.6-8.7,23.8c0,8.2,3.8,16.6,11.2,25
    c7.4,8.4,16.6,16.6,27.4,24.7c10.9,8,21.7,17,32.6,26.6c10.9,9.7,20,22.2,27.4,37.3c7.5,15.2,11.3,31.8,11.3,50.2
    c0,24.2-6.2,46.1-18.5,65.6c-12.3,19.4-28.4,34.9-48.2,46.2c-19.8,11.4-41,20-63.6,25.8c-22.6,5.8-45.1,8.6-67.6,8.6
    c-14.2,0-28.5-1.1-42.9-3.4s-28.9-6.2-43.4-11.8c-14.6-5.6-27.5-12.5-38.7-20.8c-11.2-8.2-20.2-18.8-27.2-31.7
    c-7-12.9-10.4-27.4-10.4-43.4c0-19,5.3-36.8,16-53.3c10.6-16.4,24.8-30.1,42.3-40.9c30.6-19,78.6-30.8,144.1-35.3
    c-15-18.7-22.5-36.2-22.5-52.7c0-9.4,2.5-19.4,7.3-30.2c-7.8,1.1-15.8,1.7-24.1,1.7c-35.1,0-64.8-11.4-88.9-34.4
    c-24.1-23-36.2-51.7-36.2-86.4c0-3.6,0.1-6.8,0.4-10.4H114.2L329.4,80h356.5l-33,25.7V151C665.2,152.6,663.8,160,663.8,168.8z
     M474,521.9c-1.8-1.3-6.7-4.9-14.6-10.6c-7.8-5.8-12.2-8.9-12.9-9.3c-4.1-0.7-9.9-1.2-17.4-1.2c-16.1,0-31.8,1.4-47.4,4.2
    c-15.5,2.7-30.8,7.4-45.9,14s-27.4,16.2-36.7,28.9c-9.4,12.7-14,27.7-14,44.9c0,16.4,4.1,31,12.3,43.8c8.2,12.6,19,22.6,32.5,29.7
    s27.6,12.5,42.3,16c14.8,3.5,29.8,5.4,45.1,5.4c30.3,0,56.3-6.8,78.2-20.5c21.8-13.6,32.8-34.7,32.8-63.1c0-6-0.8-11.8-2.5-17.6
    c-1.7-5.8-3.4-10.8-5-14.9c-1.7-4.1-4.9-9-9.5-14.6c-4.6-5.6-8.2-9.8-10.6-12.6c-2.5-2.9-7-7-13.8-12.3
    C480.2,526.6,475.9,523.2,474,521.9L474,521.9z M468.4,354.3c12.3-14.7,18.5-33.4,18.5-55.8c0-19.1-3.3-39-9.8-60
    s-17.4-39.8-32.6-56.6c-15.1-16.9-32.6-25.3-52.4-25.3c-22.4,0-39.6,8.1-51.6,24.2s-18,35.4-18,58.3c0,19.4,3.3,39.2,9.8,59.4
    c6.6,20.2,17.3,38.2,32.2,54.1c15,15.9,32.3,23.8,52.1,23.8C438.9,376.4,456.1,369,468.4,354.3L468.4,354.3z"/>',
    ),
    //array(
    //    'padded' => true,
    //    'link' => 'http://twitter.com/friggog',
    //    'path' => '<path d="M679 239s-21 34-55 57c7 156-107 329-314 329-103 0-169-50-169-50s81 17 163-45c-83-5-103-77-103-77s23 6 50-2c-93-23-89-110-89-110s23 14 50 14c-84-65-34-148-34-148s76 107 228 116c-22-121 117-177 188-101 37-6 71-27 71-27s-12 41-49 61c30-2 63-17 63-17z"/>',
    //),
);

?>

<head>
    <title>Charlie Hewitt</title>
    <meta name="description" content="Charlie Hewitt's personal website."></meta>
    <meta name="keywords" content="charlie,hewitt,computer,science,graphics,machine,learning,vision,blender,maya,microsoft,cambridge,olm digital,holography,HCI,research,researcher,jailbreak,developer,software,CMIC,AVAM,tweaks,cydia"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://indestructibletype-fonthosting.github.io/jost.css" type="text/css" charset="utf-8" />
    <link rel="stylesheet" href="Styles/normalize.css?<?php echo rand(); ?>" type="text/css">
    <link rel="stylesheet" href="Styles/style.css?<?php echo rand(); ?>" type="text/css">
    <script src="Scripts/main.js" type="text/javascript"></script>
</head>

<body>
    <header>
        <div class="content">
            <div class="title">
                <h1>Charlie Hewitt</h1>
            </div>
            <div class="hamburger" onclick="showMenu()">&#9776;</div>
            <nav>
                <ul id="navul">
                    <a href="index.html">
                        <li>Portfolio</li>
                    </a>
                    <a href="about.html">
                        <li>About</li>
                    </a>
                    <a href="mailto:contact@chewitt.me">
                        <li>Contact</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>

    <div class="padder"></div>

    <div class="container">
        <?php if ($argc < 2) { ?>
        <main id="portfolio">
            <div class="content">
                <?php
                    foreach ($portfolio_items as $item) {
                        echo $twig->render('portfolio_item.html', $item);
                    }
                ?>
            </div>
        </main>
        <?php } else { ?>
        <main id="other">
            <img src="pic.jpg" class="pic" />
            <ul class="links">
                <?php
                    foreach ($social_icons as $item) {
                        echo $twig->render('social_icon.html', $item);
                    }
                ?>
            </ul>
            <p>I'm a
                <script type="text/javascript">
                    var currentTime = new Date();
                    var month = currentTime.getMonth() + 1;
                    var day = currentTime.getDate();
                    var year = currentTime.getFullYear();
                    var age = currentTime.getFullYear() - 1995;
                    if (month < 9 || (day < 13 && month == 9))
                        age -= 1;
                    document.write(age);
                </script>
                <noscript>
                    29
                </noscript>
                year old computer scientist living in Cambridge, UK.</p>
            <p>I'm interested in graphics, computer vision and machine learning, particularly for mixed reality. Recently I've been working on digital humans and virtual presence.</p>
            <p>A full CV is available <a href="cv.html" target="_blank">here</a>.</p>
            <a class="btn white" href="mailto:contact@chewitt.me" target="_blank">
                Get in touch
            </a>
        </main>
        <?php } ?>
        <div class="copy">Copyright &copy; <?php echo date("Y"); ?> Charlie Hewitt</div>
    </div>
</body>

</html>
