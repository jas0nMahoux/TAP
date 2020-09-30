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
<div class="log">
    <h1> Liste d'employé</h1>
    <ul>
        <?php foreach( $posts2 as $post2 ): ?>
            <li>
                <?php echo $post2['nom']; echo ' '; echo $post2['prenom'] ?>
                <form method="post" action="/TAP/index.php/admin.php?id_supp2=<?php echo $post2['id_perso'];?>"><input type="submit" value="supprimer"></form>
            </li>
        <?php endforeach ?>
    </ul>
    <a href="/TAP/index.php/register"><button>Ajouter un employé</button></a>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
