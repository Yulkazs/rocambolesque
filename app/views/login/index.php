<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/paginas/login.css">
    <title>Rocambolesque ® - Inloggen</title>
</head>

<div class="ga-terug-container">
    <a href="../">← Ga terug</a>
</div>

<div class="login-container">
    <h2>Inloggen</h2>

    <?php if (isset($data['error']) && !empty($data['error'])): ?>
    <div class="alert alert-danger" role="alert">
        <?php echo htmlspecialchars($data['error']); ?>
    </div>
<?php endif; ?>
    
    <form action="/Login/login" method="post">
    <label for="email">E-mail:</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Wachtwoord:</label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Inloggen">
</form>
    <h5>Nog geen account?</h5>
    <div class="login-help">
        <a href="../register/index.php">Registeren</a> • <a href="../vergeten/index.php">Wachtwoord vergeten</a>
    </div>
</div>