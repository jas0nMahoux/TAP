<?php $title= 'Exemple ajout commande'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Ajout Commande</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
    <div class="log">
    <form method="post" action="/TAP/index.php/menu_user.php">
        <h1> Ajout commande </h1>
        <label for="titre"> Titre: </label>
        <input type="text" name="titre" id="titre" placeholder="" />
        <br />
        <label for="details"> Détails:</label>
        <textarea name="details" id="details" >  </textarea>
        <br />
        <input type="submit" value="Ajouter">
    </form>
    <a href="/TAP/liste_commande.php"><button>Annuler</button></a>
    </div>
</body>
</html>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>