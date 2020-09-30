<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Exemple Blog Basic PHP </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<div class="log">
    <form method="POST" action="/TAP/index.php/users">
        <h1>
            Créer votre compte:
        </h1>
        <label for="nom"> Nom </label> :
        <input type="text" name="nom" id="nom" />
        <br />

        <label for="prenom"> Prénom </label> :
        <input type="text" name="prenom" id="prenom" />
        <br />

        <label for="Mail"> Mail </label> :
        <input type="text" name="Mail" id="Mail" placeholder="defaut" />
        <br />

        <label for="Ville" id="Ville"> Ville </label> :
        <select name="Ville" id="Ville">
            <?php $villesNC = cityNC('');
            echo '<ul>';
            foreach( $villesNC as $nom => $cp ){
                echo '<option>'.$nom.'</li>';
            }
            echo '</ul>';?></option>
        </select>
        <label for="Tel" id="Tel"> Tel </label> :
        <input type="text" name="Tel" id="Tel" />
        <br />
        <br />

        <label for="login"> Votre identifiant </label> :
        <input type="text" name="login" id="login" placeholder="defaut" />
        <br />
        <label for="password"> Votre mot de passe :</label>
        <input type="password" name="password" id="password" />

        <input type="submit" value="Envoyer"/>
    </form>
    <a href="/TAP/index.php/users"><button>Annuler</button></a>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>

