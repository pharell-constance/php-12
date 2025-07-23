<?php
$title = "Accueil";
$css = "accueil.css"; // facultatif, chargé en plus de common.css
require_once 'includes/header.php';
?>

<div class="containertittle">
    <p class=tittle>Bienvenue !</p>
</div>
<div class="containerquestion">
    <h1 class=question>Qu'est ce que PHP ?</h1>
    <p class=def>PHP (PHP: Hypertext Preprocessor) est un langage de programmation libre, principalement utilisé pour
        produire des
        pages Web dynamiques via un serveur HTTP mais pouvant également fonctionner comme n'importe quel langage
        interprété
        de façon locale. PHP est un langage impératif orienté objet.</p>
    <img src="./assets/css/img/icons8-logo-php-500.png" alt="phplogo">
</div>

<?php include 'includes/footer.php'; ?>