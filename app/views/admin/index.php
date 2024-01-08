<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/public/css/admin.css">
    <title>Document</title>
</head>

<body>
    <h1>Admin</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Aantal personen</th>
                <th>Datum</th>
                <th>Tijd</th>
                <th>Tafel</th>
                <th>Klant Id</th>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>E-mail</th>
                <th>Telefoonnummer</th>
                <th>Aanpassen</th>
                <th>Verwijderen</th>
                <!-- <th>Klant Gegevens</th> -->

            </tr>
        </thead>
        <tbody>
            <?= $data['test'];
            ?>

        </tbody>
    </table>


</body>

</html>