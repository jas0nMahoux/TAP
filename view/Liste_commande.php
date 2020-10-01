<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
<p>C'est la liste des commandes</p>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
