<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Exemple Blog Basic PHP </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<div class="centrage">
<form method="POST" action="/TAP/index.php/annonces?$_POST['mail']">
    <h1>
        créer votre compte:
    </h1>
    <label for="nom"> Nom </label> :
    <input type="text" name="nom" id="nom" />
    <br />

    <label for="prenom"> Prénom </label> :
    <input type="text" name="prenom" id="prenom" />
    <br />

    <label for="mail"> Mail </label> :
    <input type="text" name="mail" id="mail" placeholder="defaut" />
    <br />
    <br />

    <label for="Tél">Téléphone</label>
    <input type="text" name="tél" id="tél" placeholder="defaut" />

    <br />

    <label for="villes">Villes</label>
    <select name="ville" id="ville">
        <option>Nouméa</option>
        <option>Koumac</option>
        <option>Koné</option>
        <option>Pouembout</option>
        <option>Tokyo</option>
    </select>
    <br />
    <br />

    <label for="login"> Votre identifiant </label> :
    <input type="text" name="login" id="login" placeholder="defaut" />
    <br />
    <label for="password"> Votre mot de passe :</label>
    <input type="password" name="password" id="password" />

    <input type="submit" value="Envoyer"/>
</form>
<a href="/TAP/"><button>Annuler</button></a>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>

