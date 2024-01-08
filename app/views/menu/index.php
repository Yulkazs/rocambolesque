<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/paginas/menu.css">
    <link rel="stylesheet" href="../public/paginas/css/header.css">
    <link rel="stylesheet" href="public/css/global.css">

    <title>Rocambolesque ®</title>
</head>
<body>

    <div class="item-1-background">
        <img src="../Images/backgrounds/bg-menu.png" alt="Background Image">
    </div>

    <div class="Item2-wite-container">
        <div class="item3-titel-text">MENUKAART VOOR LUNCH EN DINER</div>
        <div class="item7-animation-container">
            <div class="item8-black-notch"></div>
            <div class="item9-animation-title"> CHEFS HAPJES</div>
            <div class="item10-animation-text">Geniet van chefs borrel bites onder het genot van een heerlijk drankje.</div>
            <div class="item11-green-line"></div>
            <div class="item12-orange-button"><a href="menukaart" >OPEN</a></div>
            <div class="slideshow-container">
                <img src="../Images/backgrounds/dish-1.png" class="slideshow-image" >
            </div>
        </div>
    </div>

    <div class="Item3-orange-spacer"></div>
    <div><img class="item4-second-background" src="../Images/backgrounds/bg-menu-2.png" alt="Background Image">
    <div class="item5-second-white-container"></div>
    <img class="item6-logo" src="../Images/backgrounds/PROJECT_LOGO.png" alt="Background Image">
    <div class="item13-menu-container">
        <img class="item14-bg-dinerkaart" src="../Images/backgrounds/bg-dinerkaart.png" alt="">
        <h1 class="item18-dinerkaart-h1">DINERKAART</h1>
        <div class="item16-menukaart-text">Dineren met dierbaren is een avondje uit in Bakboord. Eerst heerlijk genieten van je aperitief en diverse amuses en dan wordt de eerste gang geserveerd samen met een passend glas wijn. Tot de laatste gang en de koffie met friandises wordt je top verzorgt.</div>
        <a href="menukaart" class="item19-menu-link">Menu  →</a>
        <img class="item15-bg-wijnkaart" src="../Images/backgrounds/bg-wijnkaart.png" alt="">
        <div class="item19-wijnkaart-h1">WIJNKAART</div>
        <div class="item17-wijnkaart-text">Wijn en spijs in de juiste balans zorgt voor een optimale beleving. Met zorg zijn er mooie wijnen geselecteerd die de verfijnde gerechten aanvullen.  Onze wijnkaart heeft de klassiekers uit de befaamde wijnstreken tot vernieuwende wijnen van onbekende wijnproducenten.</div>
        <a href="menukaart" class="item20-wijn-link">Wijnkaart  →</a>
    </div>

</div>
    <script src="../../public/JS/animation.js"></script>
    <?php
    $tags = [
        '<link rel="stylesheet" href="/public/css/index.css">',
    ];
    $data = [
        'tags' => $tags,
        'nav' => true
    ];


    $this->utils('header', $data);

    ?>
        <?php $this->utils('footer', []); ?>

</body>
</html>
