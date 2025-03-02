<!-- Traitement et sauvegarde des produits -->
<?php
if(!empty($_POST)){
    $nombre = $_POST['nombre'];
    $prix = $_POST['prix'];
    $nom = $_POST['titre'];
    $image = $_POST['image'];
    // $total = $nombre * $prix;
    // ---------------------------------------------- //
    // Ecriture de la commande dans un fichier texte  //
    // ---------------------------------------------- //
    $D4 = fopen('bdd.txt','a'); // Ouverture du fichier panier2.txt en ajout
    fwrite($D4,"$image|$nom|$prix|$nombre|@|"); //ligne permettant d'écrire dans le fichier parnier2.txt'
    fclose($D4); // Fermeture du fichier panier2.txt
}




function AfficherPanier($jerome){ //jerome sert a faire le choix entre afficher les produits dans le panier ou connaitre le nombre de produit du panier
    if (file_exists('bdd.txt') && filesize('bdd.txt') > 0){ // Si le fichier bdd.txt
        // ---------------------------------------------- //
        // Lecture du contenu d'un fichier texte          //
        // et affichage de ce contenu à l'écran           //
        // ---------------------------------------------- //
        $nmb_produit = 0;
        $AleConteur = 0;
        $AlePrix = 0;
        $AlaQuantite = 0;
        $Aleprixtotal = 0;
        $D5 = fopen('bdd.txt','r'); // Ouverture du fichier panier2.txt en lecture
        $donnees = fread($D5,filesize('bdd.txt')); // lecture du fichier panier2.txt jusqu'à la fin du fichier 
        $lecture = explode("|",$donnees); //les éléments de la variable donnees sont mis dans le tableau lecture en prenant comme séparateur le caractère "|"
        // Nombre total de produit
        foreach($lecture as $y){
            if($y==='@'){
                $nmb_produit ++;
            }
        }
        // Total a payer
        foreach ($lecture as $y) {
            if ($y === '@') {
                $AleConteur = 0;
                $AlaQuantite = 0;
                $AlePrix = 0;
                continue; // Passer à l'itération suivante
            }
            $AleConteur++; 
            if ($AleConteur === 3) {
                $AlePrix = (int)$y; 
            }
            if ($AleConteur === 4) {
                $AlaQuantite = (int)$y; 
                $Aleprixtotal += $AlePrix * $AlaQuantite;
            }
        }

        // Systeme jerome pour differencier plusieurs choix
        if($jerome === 0){
            echo $nmb_produit;
        }
        elseif($jerome === 1){
           $produitIndex = 0; // Index pour parcourir le tableau
            for ($i = 0; $i < $nmb_produit; $i++) {
                echo '<div class="panierProduit">';
                echo '<img src="img/produits/' . $lecture[$produitIndex]; // image du produit
                $produitIndex++;
                echo '" alt="img"><p>' . $lecture[$produitIndex]; // Nom du produit
                $produitIndex++;
                echo ' ' . $lecture[$produitIndex].' €'; // prix du produit
                $produitIndex++;
                echo '</p><p class="quantite"> ' . $lecture[$produitIndex] . '</p></div>'; // Quantité
                $produitIndex +=2; // Sauter le @
            } 
        }
        elseif($jerome === 2){
            echo $Aleprixtotal;
        }
        else{
            if($nmb_produit > 0){
                echo '<span id="nmb_articles">'.$nmb_produit.'</span>';
            }
        }
        
        fclose($D5); // Fermeture du fichier bdd.txt
    }
    
}


?>
