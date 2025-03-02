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
    <h1>tutoriels</h1>
</header>
<div id="tuto">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/s2AIZX9B0jE?si=DjAaXxIvZdhoJCjL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/BSypZt8aAK0?si=sZLdI8u9lKbFZwuS" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/MFbxY_ytXp4?si=Bkwp6bYHrpjKw1kL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/IGx38HziMzA?si=qcPE8a7WTZa5gyyc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
</div>

<?php include_once 'php_plus\footer.php' ?>
</body>
</html>