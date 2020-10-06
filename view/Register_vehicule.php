<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Ajout véhicule </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<div class="centrage">
    <form method="POST" action="/TAP/index.php/users">

        <h1>Ajouter un véhicule:</h1>

        <label for="immatriculation"> Immatriculation </label> :
        <input type="text" name="immatriculation" id="immatriculation" />
        <br />
        <label for="modele"> Marque / Model </label> :
        <input type="text" name="modele" id="modele" />
        <br />
        <label for="age"> Age </label> :
        <input type="text" name="age" id="age" />
        <br />
        <input type="submit" value="Envoyer">
        <br />

    </form>
    <a href="/TAP/index.php/users"><button>Annuler</button></a>
</div>
</body>
</html>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>