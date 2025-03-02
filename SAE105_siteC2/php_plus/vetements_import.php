<?php
// Fonction pour créer un produit
function AfficherProduit($name, $lvl2,$lvl3,$lvl4, $img, $prix, $link)
    {        
        echo '<div class="'.$lvl2.' '.$lvl3.' '.$lvl4.'">
            <a href="./php_plus/Produits/'.$link.'" ><img src="./img/produits/'.$img.'" alt="image"><p>'.$name.' <span class="prix">'.$prix.'</span></p></a></div>';
    }




// Vetements
$tshirtH = AfficherProduit("Lycra", "vetement", "homme", "T-shirt","lycraH.webp", "30€", "tshirtH.php");
$tshirtF = AfficherProduit("Lycra", "vetement", "femme", "T-shirt","lycraF.webp", "30€", "tshirtF.php");
$tshirtE = AfficherProduit("Lycra", "vetement", "enfant", "T-shirt","lycraE.webp", "15€", "tshirtE.php");

$combiH = AfficherProduit("Combisaison néoprène", "vetement", "homme", "combi", "combiH.webp", "45€","combiH.php");
$combiF = AfficherProduit("Combisaison néoprène", "vetement", "femme", "combi", "combiF.webp", "45€","combiF.php");
$combiE = AfficherProduit("Combisaison néoprène", "vetement", "enfant", "combi", "combiE.webp", "40€","combiE.php");

$gants = AfficherProduit("Gants", "vetement", "homme femme", "gants", "gants.webp", "15€","gants.php");
$gantsE = AfficherProduit("Gants", "vetement", "enfant", "gants", "gantsE.webp", "10€","gantsE.php");

$chaussonsH = AfficherProduit("Chaussons", "vetement", "homme", "chaussons", "chaussonsH.webp", "15€","chaussonsH.php");
$chaussonsF = AfficherProduit("Chaussons", "vetement", "femme", "chaussons", "chaussonsF.webp", "15€","chaussonsF.php");
$chaussonsE = AfficherProduit("Chaussons", "vetement", "enfant", "chaussons", "chaussonsE.webp", "10€","chaussonsE.php");

$ponchoH = AfficherProduit("Poncho", "vetement", "homme", "poncho", "ponchoH.webp", "25€","ponchoH.php");
$ponchoF = AfficherProduit("Poncho", "vetement", "femme", "poncho", "ponchoF.webp", "25€","ponchoF.php");
$ponchoE = AfficherProduit("Poncho", "vetement", "enfant", "poncho", "ponchoE.webp", "25€","ponchoE.php");










?>
