<?php $title= 'Fichier users'; ?>
<?php ob_start(); ?>
    <h1>Tableau de bord</h1>
    <div>
            <h2>Commande</h2>
            <a href="/TAP/index.php/Ajout_commande"> Ajouter une commande </a>
            <br>
            <a href="/TAP/index.php/Liste_commande"> Afficher toutes les commandes </a>
    </div>
    <div>Map Google</div>
    <div>
        <h2>Véhicule</h2>
    </div>
    <div>
        Information véhicule
        <button type="button"> Fermer </button>
    </div>
    <div>
        Information commande
        <button type="button"> Fermer </button>
    </div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>