<?php $title= "Exemple Liste commande"; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Liste commande </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<div class="log">
    <h1> Liste des commandes </h1>

        <ul>
            <?php foreach( $posts as $post ) : ?>
                <li>
                    <a href="/TAP/index.php/detail_commande?id_commande=<?php echo $post['id_commande']; ?>">
                        <p> Commande <?php echo $post ['id_commande']; ?> </p>
                    </a>
                    <form method="POST" action="/TAP/index.php/Liste_commande?id_supp=<?php echo $post['id_commande'];?>">
                    <input type="submit" name="supp" value="Supprimer">
                    </form>
                </li>
            <?php endforeach ?>
        </ul>

    <a href="/TAP/index.php/users">Retour</a>
</div>
</body>
</html>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
