<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
    <div class="header_droite">
        <p class="link2"><a href="/TAP/index.php/login">login</a></p>
    </div>
    <div class="log">
        <p>quelques informations</p>
    </div>
    <footer>
        <p>contactez nous en cas de probléme sur l'adrresse adminTAP@gmail.com</p>
        <a href="/TAP/index.php/information">Qui sommes nous ?</a>
    </footer>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>


