<!DOCTYPE html>
<html lang="en">
<head>
<?php
include_once 'php_plus\head.php'
?> 
</head>
<body>
<section id="navbar">
    <!-- Logo -->
    <a href="./">
        <img class="logo" src="./img/logo.svg" alt="logo">
    </a>       
    <!-- Menu -->
    <ul class="menu">
        <li>
            <a href="./">PRODUITS</a>
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
        <a href="panier.php">
            <img src="./img/icon_panier.svg" alt="panier">
            <?php include_once 'php_plus\panier.php'?>
        </a>
    </div>
</section>
<header>
    <h1>Panier</h1>
</header>

<div class="section">
    <div class="gauche">
<?php 
include_once 'php_plus\bdd.php';
$produitDuPanier = AfficherPanier(1);
?>
    </div>
    <div class="droite">
        <p>Nombre d'article : <?php $nmbDeProduit = AfficherPanier(0); ?> </p>
        <p>Total à payer : <?php $produitDuPanier = AfficherPanier(2);?></p>
        <form action="php_plus/acheter.php" method="post">
            <button type="submit" class="vider" >Acheter</button>
        </form>
        <form action="php_plus/vider.php" method="post">
            <button type="submit" class="vider" >Vider le panier</button>
        </form>

    </div>
</div>
<?php include_once 'php_plus\footer.php' ?>
</body>
</html>