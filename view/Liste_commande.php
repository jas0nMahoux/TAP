<?php $title= 'Exemple Liste commande'; ?>
<?php ob_start(); ?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <title>Ajout Commande</title>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    </head>
    <body>
    <form method="post" action="/TAP/index.php/menu_user.php">
        <h1>Liste des commandes</h1>
        <ul>
            <?php foreach( $ as $ ) : ?>
                <li>
                    <?php echo $post['titre']; ?>
                    <button type="button" value="Supprimer"
                </li>
            <?php endforeach ?>
        </ul>
        <input type="submit" value="Retour">


<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>