<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Geniet van Momenten van Gastronomisch Genot bij Rocambolesque | Ontdek Heerlijke Gerechten, Bekroonde Wijnen en Onvergetelijk Dineren.">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/public/css/paginas/reserveren.css">
    <link rel="stylesheet" href="/public/css/reserveren.css.map">

    <title>Rocambolesque ® - Reserveren</title>
</head>

<body>
    <?php
    $tags = [
        '<link rel="stylesheet" href="/public/css/index.css">',
    ];
    $header = [
        'tags' => $tags,
        'nav' => true
    ];


    $this->utils('header', $header);
    ?>
    <div class="reserveren-banner">
        <img src="/public/Images/backgrounds//reserveren.png" alt="Reserveren"><br>
    </div>
    <br><br>



    <h1 class="Reserveren-titel">Reserveren</h1>

    </div>


    <!--de navbar-->

    <h2 class="Reserveren-openingstijd">Het restaurant is iedere dag van 17:00 - 22:00 geopened. De bar is van 22:00 - 00:00 open.</h2>

    <div class="container">
        <h2>Reserveren</h2>
        <?php if (isset($_SESSION['message'])) : ?>
            <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
            ?>
        <?php endif; ?>
        <form action="<?= URLROOT ?>reserveren/store/" method="post">
            <!-- <?= $data->Id  ?>" -->
            <div class="form-group">
                <label for="aantal_personen">Aantal personen:</label>
                <input type="number" id="aantal_personen" name="aantal_personen" min="1" max="50" required>
            </div>
            <div class="form-group">
                <label for="datum">Datum:</label>
                <input type="date" id="datum" name="datum" required>
            </div>
            <div class="form-group">
                <label for="tijd">Tijd:</label>
                <input type="time" id="tijd" name="tijd" required>
            </div>
            <div class="form-group">
                <label for="tafel">Tafel:</label>
                <select id="tafel" name="tafel" required>
                    <option value="Tafel 1" selected>Tafel 1</option>
                    <option value="Tafel 2" selected>Tafel 2</option>
                    <option value="Tafel 3" selected>Tafel 3</option>
                    <option value="Tafel 4" selected>Tafel 4</option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" id="id" name="id" min="1" max="50" hidden>
            </div>
            <div class="form-group">
                <label for="voornaam">Voornaam:</label>
                <input type="text" id="voornaam" name="voornaam" min="1" max="50" required>
            </div>
            <div class="form-group">
                <label for="achternaam">Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" min="1" max="50" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" min="1" max="50" required>
            </div>
            <div class="form-group">
                <label for="tel">Telefoonnummer:</label>
                <input type="number" id="tel" name="tel" required>
            </div>
            <button type="submit" name="submit">Reserveren</button>
        </form>
    </div>
    <?php $this->utils('footer', []); ?>

</body>