<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Ajout commande </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<div class="log">
    <form method="POST" action="/TAP/index.php/Ajout_commande.php">
        <h1>Ajouter une commande : </h1>

        <label for="détail"> Détail de la commande </label> :
        <input type="text" name="détail" id="détail" />
        <br />

        <label for="adresse"> Adresse de livraison </label> :
        <input type="text" name="adresse" id="adresse" />
        <br />

        <label for="nb_client"> Numéro du client </label> :
        <input type="text" name="nb_client" id="nb_client" />
        <br />
        <button type="button"> Envoyer</button>
    </form>
    <a href="/TAP/index.php/users.php"> Retour </a>
</div>
</body>
</html>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>

