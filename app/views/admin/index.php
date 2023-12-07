<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <title>Document</title>
</head>

<body>
    <h1>Admin</h1>
    <!-- <table class="table">
        <thead>
            <tr>
                <th>Klant Id</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>E-mail</th>
                <th>Telefoonnummer</th>

            </tr>
        </thead>
        <tbody>
            <?= $data['result'];
            ?>
        </tbody>
    </table> -->

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Aantal personen</th>
                <th>Datum</th>
                <th>Tijd</th>
                <th>Tafel</th>
                <th>Klant Gegevens</th>

            </tr>
        </thead>
        <tbody>
            <?= $data['result'];
            ?>
        </tbody>
    </table>


</body>

</html>