<?php $title= 'Exemple Liste commande'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title> Liste commande </title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
<div class="log">
    <form method="POST" action="/TAP/index.php/Liste_commande">
        <h1> Liste des commandes </h1>
        <ul>
            <?php foreach( $posts as $post ) : ?>
                <li>
                    <a href="detail_commande.php?id=<?php echo $post['id_commande']; ?>">
                        <p> Commande <?php echo $post ['id_commande']; ?> </p>
                    </a>
                    <button type="submit" name="supp">Supprimer</button>
                </li>
            <?php endforeach ?>
        </ul>
    </form>
    <button href="/TAP/index.php/users">Retour</button>
</div>
</body>
</html>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
