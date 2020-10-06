<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Ajout commande </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<div class="centrage">
    <form method="POST" action="/TAP/index.php/ajout_commande">
        <h1>Ajouter une commande : </h1>

        <label for="detail"> Détail de la commande </label> :
        <input type="text" name="detail" id="detail" />
        <br />

        <label for="adresse"> Adresse de livraison </label> :
        <input type="text" name="adresse" id="adresse" />
        <br />

        <label for="nb_client"> Numéro du client </label> :
        <input type="text" name="nb_client" id="nb_client" />
        <br />
        <input type="submit" value="Envoyer"/>
    </form>
        <a href="/TAP/index.php/users">Retour</a>
</div>
</body>
</html>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>

