<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/paginas/vergeten.css"> 
    <title>Rocambolesque ® - Herstellen</title>
</head>
<body>

    <div class="ga-terug-container">
        <a href="../login/index">← Terug naar inloggen</a>
    </div>

    <?php if ($data['error']) : ?>
        <p style="color: red;"><?php echo $data['error']; ?></p>
    <?php endif; ?>




    <div class="login-container">
        <h2>Wachtwoord herstellen</h2>
        <form id="resetForm" action="../vergeten/processRequest" method="post">
            <p>Vul hieronder je e-mailadres in. Het kan tot 5 minuten duren voordat je de resetinstructies ontvangt.</p>
            <input type="email" name="email" placeholder="Email" required="required" />
            <button type="submit">Verzend</button>
        </form>

        <script>
            document.addEventListener("DOMContentLoaded", function () {
                document.getElementById("resetForm").addEventListener("submit", function (event) {
                    // Voorkom standaardgedrag van het formulier (verzenden en herladen van de pagina)
                    event.preventDefault();
                    
                    // Voer hier de logica uit om het formulier te verzenden (bijvoorbeeld met AJAX)
                    
                    // Wacht 5 seconden voordat je doorverwijst naar '../reset/index'
                    setTimeout(function () {
                        window.location.href = '../reset/index';
                    }, 3000);
                });
            });
        </script>
    </div>
</body>
</html>
