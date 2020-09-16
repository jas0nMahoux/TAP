<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
    <div class="header_droite">
        <p class="link2"><a href="/TAPproject/index.php/login.php">login</a></p>
    </div>
    <div class="log">
        <p>quelques informations</p>
    </div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
