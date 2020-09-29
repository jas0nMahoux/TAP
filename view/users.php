<?php $title= 'Fichier users'; ?>
<?php ob_start(); ?>
    <h1>Tableau de bord</h1>
    <div>
        <form method="post" action="/TAP/index.php/Ajout_commande.php">
        <h2>Commande</h2>
            <input type="submit" value="Ajouter une commande">
        </form>
    </div>
    <div>
        <form method="post" action="/TAP/index.php/Liste_commande.php">
            <input type="submit" value="Liste des commande">
        </form>
    </div>
    <div>Map Google</div>
    <div>
        <h2>Véhicule</h2>
    </div>
    <div>
        Information véhivule
        <button type="button"> Fermer </button>
    </div>
    <div>
        Information commande
        <button type="button"> Fermer </button>
    </div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>