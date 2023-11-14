<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/paginas/reset.css">
    <title><?php echo $data['title']; ?></title>
</head>
<body>

    <div class="ga-terug-container">
        <a href="../login/index">← Ga terug</a>
   
    <h1><?php echo $data['title']; ?></h1>

    <?php if ($data['error']) : ?>
        <p style="color: red;"><?php echo $data['error']; ?></p>
    <?php endif; ?>

    <form action="/reset/resetpassword" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" ><br>

        <label for="password">Password:</label>
        <input type="password" name="password" ><br>

        <label for="password2">Confirm Password:</label>
        <input type="password" name="password2" ><br>

        <input type="submit" value="Reset Password">
    </form>
    </div>

</body>
</html>
