<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rocambolesque ® - Dashboard</title>
    <link href="public/css/paginas/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<?php if(isset($_SESSION['authLevel'])): ?>
    <?php $authLevel = $_SESSION['authLevel']; ?>

    <!-- User Dashboard -->
    <?php if($authLevel == 1): ?>
        <a href="/home" class="trgButton"><i class="fa-solid fa-arrow-left"></i>Ga Terug</a>
        <div class="glass">
            <!-- Welcome the user -->
            <?php if (isset($_SESSTION['name'])): ?>
                <?php $name = $_SESSION['name']; ?>
                    <h1 id="welcome">Welkom <?php echo $name; ?></h1>
                <?php endif; ?>
            <h1 id="welcome">Welkom E</h1>

            <!-- Creation Date -->
            <?php if(isset($_SESSION['creation_date'])): ?>
                <?php $date = $_SESSION['creation_date']; ?>
                    <p id="creationDate">Uw account is aangemaakt op: <?php echo $date; ?></p>
                <?php endif; ?>
                <p id="creationDate">Uw account is aangemaakt op: 2023-12-04 11:38:52</p>
            
                <section id="pages">
                    <a href="/menu" id="linkMenu"><img src="public/Images/Icons/more.png">Menu</a>
                    <a href="/reserveren" id="linkReserveren"><img src="public/Images/Icons/reservation.png">Reserveren</a>
                    <a href="/contact" id="linkContact"><img src="public/Images/Icons/altChat.png">Contact</a>
                </section>
                <section id="inbox">
                    <h2>Inbox</h2>
                    <hr>
                </section>
        </div>

    <!-- Admin Dashboard -->
    <?php elseif($authLevel == 5): ?>
        <a href="/home" class="trgButton"><i class="fa-solid fa-arrow-left"></i>Ga Terug</a>
        <div class="glass">
            <!-- Welcome the user -->
            <?php if (isset($_SESSTION['name'])): ?>
                <?php $name = $_SESSION['name']; ?>
                    <h1 id="welcome">Welkom <?php echo $name; ?></h1>
                <?php endif; ?>
            <h1 id="welcome">Welkom E</h1>

            <!-- Creation Date -->
            <?php if(isset($_SESSION['creation_date'])): ?>
                <?php $date = $_SESSION['creation_date']; ?>
                    <p id="creationDate">Uw account is aangemaakt op: <?php echo $date; ?></p>
                <?php endif; ?>
                <p id="creationDate">Uw account is aangemaakt op: 2023-12-04 11:38:52</p>

            <!-- Menu Kaaart Wijzigen -->
            <section id="edit">
                <h2>Beheerders Centrum</h2>
                <hr>
                <div class="buttons">
                    <a href="/menukaart"><button>Menu Kaart Aaanpassen</button></a>
                    <a href="/reservaties"><button>Reservaties Aanpassen</button></a>
                </div>
            </section>
        </div>
    <?php endif; ?>
<?php endif; ?>

</body>
</html>