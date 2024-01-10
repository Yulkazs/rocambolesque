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
    // var_dump($data);
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



    <h1 class="Reserveren-titel">Wijzig Reservering</h1>

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
        <form action="<?= URLROOT ?>/AdminOverzicht/updateSave/<?= $data->Id  ?>" method="post">
            <div class="form-group">
                <label for="aantal_personen">Aantal personen:</label>
                <input type="number" id="aantal_personen" name="aantal_personen" min="1" max="50" required value="<?= $data->aantal_personen ?>">
            </div>
            <div class="form-group">
                <label for="datum">Datum:</label>
                <input type="date" id="datum" name="datum" required value="<?= $data->datum ?>">
            </div>
            <div class="form-group">
                <label for="tijd">Tijd:</label>
                <input type="time" id="tijd" name="tijd" required value="<?= $data->tijd ?>">
            </div>
            <div class="form-group">
                <label for="tafel">Tafel:</label>
                <select id="tafel" name="tafel" required value="<?= $data->tafel ?>">
                    <option value="Tafel 1" selected>Tafel 1</option>
                    <option value="Tafel 2" selected>Tafel 2</option>
                    <option value="Tafel 3" selected>Tafel 3</option>
                    <option value="Tafel 4" selected>Tafel 4</option>
                </select>
            </div>
            <div class="form-group">
                <input type="number" id="id" name="id" min="1" max="50" hidden value="<?= $data->Id ?>">
            </div>
            <div class="form-group">
                <label for="voornaam">Voornaam:</label>
                <input type="text" id="voornaam" name="voornaam" min="1" max="50" required value="<?= $data->voornaam ?>" disabled>
            </div>
            <div class="form-group">
                <label for="achternaam">Achternaam:</label>
                <input type="text" id="achternaam" name="achternaam" min="1" max="50" required value="<?= $data->achternaam ?>" disabled>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" min="1" max="50" required value="<?= $data->email ?>" disabled>
            </div>
            <div class="form-group">
                <label for="tel">Telefoonnummer:</label>
                <input type="number" id="tel" name="tel" required value="<?= $data->telefoon_nummer ?>" disabled>
            </div>
            <button type="submit" name="submit">Opslaan</button>

        </form>
    </div>
    <?php $this->utils('footer', []); ?>

</body>