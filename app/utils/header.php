<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Geniet van Momenten van Gastronomisch Genot bij Rocambolesque | Ontdek Heerlijke Gerechten, Bekroonde Wijnen en Onvergetelijk Dineren.">
    <link rel="stylesheet" href="/public/css/header.css">
    <!-- <link rel="stylesheet" href="/css/menukaart.css"> -->
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/public/css/paginas/index.css">

    <!-- <link rel="stylesheet" href="/public/css/index.css"> -->
    <title>Rocambolesque</title>
    <script src="/public/JS/app.js" defer></script>
    <?php
    foreach ($data['tags'] as $tag) {
        echo $tag;
    }

    ?>
</head>

<body>
    <header class="main-head">
        <nav>
            <div class="img">
                <p>ٌ</p>
                <img src="/public/Images/logo/Rocambolesque-logo-DEF.png" alt="logo" id="logo">
            </div>
            <ul class="" id="mainmenu">
                <li><a href="Homepage">Home</a></li>
                <li><a href="Menu">Menu</a></li>
                <li><a href="geschiedenis">Geschiedenis</a></li>
                <li><a href="contact">Contact</a></li>
                <li><a href="login">Login</a></li>
            </ul>

            <div class="btn">
                <a href="login">LOGIN</a>
            </div>
            <img src="/public/Images/Icons/burger-menu.svg" alt="menu" id="burger-menu" onclick="toggleMenu()">

            <!-- <a class="nav-title" href="Homepage">Rocambolesque</a> -->
            <img src="/public/Images/logo/Rocambolesque-logo-DEF.png" alt="logo" id="logo-res">

        </nav>
    </header>
</body>

</html>