<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMI Sports de glisse</title>
    <link rel="stylesheet" href="../css/produit.css">
    <link href="../img/logo.svg" rel="icon" type="image/svg">
</head>
<body>
<section id="navbar">
    <!-- Logo -->
    <a href="./">
        <img class="logo" src="../img/logo.svg" alt="">
    </a>       
    <!-- Menu -->
    <ul class="menu">
        <li>
            <a href="./..">PRODUITS</a>
        </li>
        <li>
            <a href="tuto.php">TUTORIELS</a>
        </li>
        <li>
            <a href="contact.php">CONTACT</a>
        </li>
    </ul>
    <!-- Panier -->
    <div id="icone_panier">
        <a href="../panier.php">
            <img src="../img/icon_panier.svg" alt="panier">
            <?php include_once 'panier.php'?>
        </a>
    </div>
</section>

<header>
<h1>
<?php
$D4 = fopen('../bdd.txt','w');
fwrite($D4,"");
fclose($D4);
echo 'Votre panier est vide, vous pouvez revenir a l\'accueil !';
?>
</h1>

</header>
</body>
</html>