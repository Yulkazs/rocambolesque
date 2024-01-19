<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocambolesque ®</title>
    <link rel="stylesheet" href="public/css/global.css">
</head>

<body>
    <?php
    $tags = [
        '<link rel="stylesheet" href="/public/css/index.css">',
    ];
    $data = [
        'tags' => $tags,
        'nav' => true
    ];


    $this->utils('header', $data);

    ?>
    <section class="banner">
        <img src="/public/Images/backgrounds/bg-home.png" alt="backgroundIMG">
        <h1>Verken Wereldse Smaken</h1>
        <div class="buttons">
            <div class="menu">
                <a href="menu">MENU</a>
            </div>
            <div class="reserveren">
                <a href="reserveren">RESERVEREN</a>
            </div>
            <!-- <a href="adminOverzicht">admin</a> -->
        </div>
    </section>
</body>

</html>