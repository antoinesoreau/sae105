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
        <img class="logo" src="./img/logo.svg" alt="">
    </a>       
    <!-- Menu -->
    <ul class="menu">
        <li class="lien">
            <input type="radio" name="produit" id="menuVetement">
            <label for="menuVetement">
                VETEMENTS
            </label>
            <ul class="sousMenu">
                <li>
                    <input type="radio" name="sexe" value="homme" id="homme">
                    <label for="homme">Homme</label>
                </li>
                <li>
                    <input type="radio" name="sexe" value="femme" id="femme">
                    <label for="femme">Femme</label>
                </li>
                <li>
                    <input type="radio" name="sexe" value="enfant" id="enfant">
                    <label for="enfant">Enfant</label>
                </li>
            </ul>
        </li>
        <li>
            <input type="radio" name="produit" id="menuAccessoire" >
            <label for="menuAccessoire">
                ACCESSOIRES
            </label>
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
    <h1>MMI Sports de glisse</h1>
</header>

<h2 id="vetement" class="V">Vetements</h2>
<div class="produits V">  
    <div class="trie">
        <p>Type</p>
        <input type="checkbox" id="tous" checked><label for="tous">Tous</label><br>
        <input type="checkbox" id="tshirt"><label for="tshirt">T-shirt</label><br>
        <input type="checkbox" id="combi"><label for="combi">Combisaison néoprène</label><br>
        <input type="checkbox" id="gants"><label for="gants">Gants</label><br>
        <input type="checkbox" id="chaussons"><label for="chaussons">Chaussons</label><br>
        <input type="checkbox" id="poncho"><label for="poncho">Poncho</label>
    </div>
    <div class="listeProduit">
    <!--Section produit-->
    <?php include_once 'php_plus\vetements_import.php' ?>
    </div>
</div>

<h2 id="accessoire" class="A">Accessoires</h2>
<div class="produits A"> 
    <div class="trie">
        <p></p>
        <input type="checkbox" id="tous" checked><label for="tous">Tous</label><br>
        <input type="checkbox" id="planche_voile"><label for="planche_voile">Planche à voile</label><br>
        <input type="checkbox" id="SKI"><label for="SKI">Ski nautique</label><br>
        <input type="checkbox" id="SUP"><label for="SUP">SUP(Stand-up paddle)</label><br>
        <input type="checkbox" id="canoe"><label for="canoe">Canoë kayak</label>
    </div>
    <div class="listeProduit">
    <!--Section produit-->
    <?php include_once 'php_plus\accessoires_import.php' ?>
    </div>
</div>

<?php include_once 'php_plus\footer.php' ?>
</body>