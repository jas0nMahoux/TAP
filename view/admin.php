<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
<p>C'est le menu ADMIN</p>
<div class="log">
    <h1> Liste d'employé</h1>
    <a href="/TAP/index.php/register"><button>Ajouter un employé</button></a></div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
