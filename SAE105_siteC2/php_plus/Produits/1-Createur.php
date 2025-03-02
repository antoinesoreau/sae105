<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MMI Sports de glisse</title>
    <link rel="stylesheet" href="../../css/produit.css">
    <link href="../../img/logo.svg" rel="icon" type="image/svg">
</head>
<?php
function PageProduit($titre, $imgProduit, $prixProduit, $description){
    echo'
<body>
<section id="navbar">
    <!-- Logo -->
    <a href="../../">
        <img class="logo" src="../../img/logo.svg" alt="logo">
    </a>       
    <!-- Menu -->
    <ul class="menu">
        <li>
            <a href="../../">PRODUITS</a>
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
        <a href="../../panier.php">
            <img src="../../img/icon_panier.svg" alt="panier">';
            include_once '..\panier.php';
        echo '</a>
    </div>
</section>
<div class="section">
<div id="gauche">
<img src="../../img/produits/'.$imgProduit.'" alt="Nous somme désolé mais votre image ne veut pas charger.">
</div>
<div id="droite">
<h1>'.$titre.'</h1>
<p>Prix : '.$prixProduit.' €</p>
<form action="../../panier.php" method="post">
    <input type="text" value="'.$prixProduit.'" class="invisible" name="prix">
    <input type="text" value="'.$titre.'" class="invisible" name="titre">
    <input type="text" value="'.$imgProduit.'" class="invisible" name="image">
    <div id="Quantite">
        <label for="quantite">Quantité : </label>
    <input type="number" value="1" min="1" max="99" id="quantite" name="nombre">
    </div>
    <button type="submit">Ajouter au panier</button>
</form>
<p><u>Description</u> : '.$description.'</p>
</div>
</div>
</body>
</html>
';

}
?>
