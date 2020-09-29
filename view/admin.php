<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
<p>C'est le menu ADMIN</p>
<div>
    <h1> Liste employé</h1>
    <a href="/TAP/index.php/register.php">Ajouter Employé</a>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
