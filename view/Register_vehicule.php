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
    <form method="POST" action="/TAP/index.php/Register_vehicule.php">

        <h1>Ajouter un véhicule:</h1>

        <label for="marque"> Marque / Model </label> :
        <input type="text" name="marque" id="marque" />
        <br />

        <label for="immatriculation"> Immatriculation </label> :
        <input type="text" name="immatriculation" id="immatriculation" />
        <br />

        <label for="age"> Age </label> :
        <input type="text" name="age" id="age" />
        <br />

    </form>
</div>
</body>
</html>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>