<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/paginas/register.css">
    <title>Rocambolesque ® - Registreren</title>
</head>

<body>

    <div class="ga-terug-container">
        <a href="../login/index">← Ga terug</a>
    </div>


    <div class="login-container">
        <h2>Registeren</h2>

        <?php if ($data['error']) : ?>
            <div><?= $data['error']; ?></div>
        <?php endif ?>
        
        <form action="/Register/register" method="post">
            <input type="email" name="email" placeholder="Email" required="required" />
            <input type="text" name="name" placeholder="Naam" required="required" />
            <input type="tel" id="number" name="number" pattern="^0[1-9][0-9]{8}$" placeholder="0623456789" required>
            <input type="password" name="password" id="password" placeholder="Wachtwoord" required="required" />

            <span id="error_message" style="color: red;"></span><br>

            <button type="submit" class="btn btn-primary btn-block btn-large">Registeren</button>

        </form>
    </div>

</body>

</html>