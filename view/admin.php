<?php $title= 'Exemple creation compte PHP: Connexion'; ?>
<?php ob_start(); ?>
<div class="log">
    <h1>List of vehicule</h1>
    <ul>
        <?php foreach( $posts as $post ): ?>
            <li>
                    <?php echo $post['immatriculation']; echo '-->'; echo $post['modele'] ?>
                <form method="post" action="/TAP/index.php/admin.php?id_supp=<?php echo $post['immatriculation'];?>"><input type="submit" value="supprimer"></form>
            </li>
        <?php endforeach ?>
    </ul>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
