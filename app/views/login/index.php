<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/paginas/login.css">
    <title>Rocambolesque ® - Inloggen</title>
</head>

<body>
    <div class="login-container">
    <a href="../">Terug naar home</a>
        <h2>Inloggen</h2>
        

        <?php if (isset($data['error']) && !empty($data['error'])): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo htmlspecialchars($data['error']); ?>
            </div>
        <?php endif; ?>
        <form action="/Login/login" method="post">
            <div class="form-group">
                <label for="email">E-mailadres</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="E-mailadres" >
            </div>
            <div class="form-group">
                <label for="password">Wachtwoord</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Wachtwoord" >
                <a id="vergeten" href="../vergeten/index.php">Wachtwoord vergeten?</a>
            </div>
            <button type="submit" class="btn btn-primary">Inloggen</button>
            <br>
            <br>
            <a href="../register/index.php">Account aanmaken</a>
    
        </form>
    </div>
</body>

</html>