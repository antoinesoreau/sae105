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
    <h1>Contact</h1>
</header>
<div class="formulaire">
        <form id="contact" method="get" action="contact.php">
            <div class="border">
                <label for="civilite">Civilité:</label>
                <select id="civilite" name="civilite" required>
                    <option value="">Sélectionnez</option>
                    <option value="Monsieur">Monsieur</option>
                    <option value="Madame">Madame</option>
                </select>
            </div>
            <div class="border">
                <label for="nom">Nom :</label>
                        <input type="text" id="nom" name="nom" required>
            </div>
            <div class="border">
                <label for="prenom">Prénom :</label>
                        <input type="text" id="prenom" name="prenom" required>
            </div>
            <div class="border">
                <label for="adresse">Adresse :</label>
                        <input type="text" id="adresse" name="adresse" required>
            </div>
            <div class="border">
                <label for="dateNaissance">Date de Naissance :</label>
                        <input type="date" id="dateNaissance" name="dateNaissance" required>
            </div>
            <div class="border">
                <label for="email">Adresse Mail :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="border">
                <label for="sport">Sport Pratiqué :</label>
                <select id="sport" name="sport" required>
                    <option value="">Sélectionnez</option>
                    <option value="Planche à voile">Planche à voile</option>
                    <option value="ski">Ski nautique</option>
                    <option value="SUP">SUP</option>
                    <option value="canoe">Canoë kayak</option>
                </select>
            </div>
            <div class="border">
                <label for="lieuPratique">Lieu de Pratique Envisagé :</label>
                <input type="text" id="lieuPratique" name="lieuPratique" readonly required>
            </div>
            <img src="img/france.webp" usemap="#image-map">
            <map name="image-map" id="map">
                <area onclick="document.getElementById('lieuPratique').value='PACA';" alt="PACA" title="PACA" href="javascript:void(0);" coords="547,438,556,422,553,416,541,416,523,401,528,386,522,376,503,365,468,401,475,410,471,416,450,404,439,408,427,448,489,478,513,473" shape="poly">
                <area onclick="document.getElementById('lieuPratique').value='Occitanie';" alt="Occitanie" title="Occitanie" href="javascript:void(0);" coords="427,452,435,411,419,408,403,382,387,371,371,386,362,375,351,388,339,387,335,374,315,369,282,421,247,431,244,449,253,455,242,491,281,501" shape="poly">
                <area onclick="document.getElementById('lieuPratique').value='Corse';" alt="Corse" title="Corse" href="javascript:void(0);" coords="637,580,586,485" shape="rect">
                <area onclick="document.getElementById('lieuPratique').value='Guyane';" alt="Guyane" title="Guyane" href="javascript:void(0);" coords="1,320,177,534" shape="rect">
                <area onclick="document.getElementById('lieuPratique').value='Reunion';" alt="Reunion" title="Reunion" href="javascript:void(0);" coords="493,521,547,570" shape="rect">
                <area onclick="document.getElementById('lieuPratique').value='Mayotte';" alt="Mayotte" title="Mayotte" href="javascript:void(0);" coords="435,533,461,563" shape="rect">
                <area onclick="document.getElementById('lieuPratique').value='Martinique';" alt="Martinique" title="Martinique" href="javascript:void(0);" coords="6,191,53,241" shape="rect">
                <area onclick="document.getElementById('lieuPratique').value='Guadeloupe';" alt="Guadeloupe" title="Guadeloupe" href="javascript:void(0);" coords="5,132,53,174" shape="rect">
                <area onclick="document.getElementById('lieuPratique').value='Aquitaine';" alt="Aquitaine" title="Aquitaine" href="javascript:void(0);" coords="237,491,252,458,243,449,245,431,283,419,311,367,334,369,341,289,301,290,279,255,266,259,255,247,219,255,230,289,208,295,181,460,199,479" shape="poly">
                <area onclick="document.getElementById('lieuPratique').value='Pays de la Loire';" alt="PaysDeLaLoire" title="PaysDeLaLoire" href="javascript:void(0);" coords="203,295,227,287,216,256,253,243,259,220,285,190,213,172,214,198,204,211,156,233,177,275" shape="poly">
                <area onclick="document.getElementById('lieuPratique').value='Bretagne';" alt="Bretagne" title="Bretagne" href="javascript:void(0);" coords="156,229,201,207,209,170,193,162,85,135,64,172,71,213" shape="poly">
                <area onclick="document.getElementById('lieuPratique').value='Normandie';" alt="Normandie" title="Normandie" href="javascript:void(0);" coords="195,160,282,185,310,142,321,127,309,81,167,95" shape="poly">
                <area onclick="document.getElementById('lieuPratique').value='Haut de France';" alt="HautDeFrance" title="HautDeFrance" href="javascript:void(0);" coords="311,80,324,127,388,147,419,88,417,66,354,24,317,32" shape="poly">
            </map><br>
            <button type="submit">Valider</button>
        </form>
    </div>
    
<?php
if(!empty($_GET)){
    $civilite = $_GET['civilite'];
    $nom = $_GET['nom'];
    $prenom = $_GET['prenom'];
    $adresse = $_GET['adresse'];
    $dateNaissance = $_GET['dateNaissance'];
    $email = $_GET['email'];
    $sport = $_GET['sport'];
    $lieuPratique = $_GET['lieuPratique'];
    echo '<hr><div id="recapInfos"><p>Vous etes '.$civilite.' '.$nom.' '.$prenom.', nés le '.$dateNaissance.', votre addresse mail est '.$email.', vous pratiquez : '.$sport.' et vous le pratiquez dans la région : '.$lieuPratique.'</p>';
    switch($lieuPratique){
        case'PACA':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/130550##61A4ED" title="Prévisions Marseille par Météo-France"> </iframe>';
            break;
        case 'Occitanie':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/340030##61A4ED" title="Prévisions Agde par Météo-France"> </iframe>';
            break;
        case 'Reunion':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/O9741801##61A4ED" title="Prévisions Saint-Denis par Météo-France"> </iframe>';
            break;
        case 'Corse':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/200040##61A4ED" title="Prévisions Ajaccio par Météo-France"> </iframe>';
            break;
        case 'Guyane':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/97304##61A4ED" title="Prévisions Kourou par Météo-France"> </iframe>';
            break;
        case 'Mayotte':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/976100##61A4ED" title="Prévisions Koungou par Météo-France"> </iframe>';
            break;
        case 'Martinique':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/O9722501##61A4ED" title="Prévisions Saint-Pierre par Météo-France"> </iframe>';
            break;
        case 'Guadeloupe':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/97121##61A4ED" title="Prévisions Pointe-Noire par Météo-France"> </iframe>';
            break;
        case 'Aquitaine':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/641220##61A4ED" title="Prévisions Biarritz par Météo-France"> </iframe>';
            break;
        case 'Pays de la Loire':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/661860##61A4ED" title="Prévisions Saint-Nazaire par Météo-France"> </iframe>';
            break;
        case 'Bretagne':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/290190##61A4ED" title="Prévisions Brest par Météo-France"> </iframe>';
            break;
        case 'Normandie':
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/763510##61A4ED" title="Prévisions Le Havre par Météo-France"> </iframe>';
            break;
        default:
            echo '<iframe id="widget_autocomplete_preview"  width="150" height="300" frameborder="0" src="https://meteofrance.com/widget/prevision/621930##61A4ED" title="Prévisions Calais par Météo-France"> </iframe>';
            break;
                                                                                            
    }
}

?>
</div>
<?php include_once 'php_plus\footer.php' ?>
</body>
</html>