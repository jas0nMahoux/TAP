<?php $title= 'Fichier users'; ?>
<?php ob_start(); ?>
    <h1 class="log">Tableau de bord</h1>
    </br>
    <div class="log">
        <form method="post" action="/TAP/index.php/Ajout_commande.php">
        <h2>Commande</h2>
            <input type="submit" value="Ajouter une commande">
        </form>
        <form method="post" action="/TAP/index.php/Liste_commande.php">
            <input type="submit" value="Liste des commande">
        </form>
    </div>
    </br>
    <div class="log">Map Google</div>
    </br>
    <div class="log">
            <h1>List of vehicule</h1>
            <ul>
                <?php foreach( $posts as $post ): ?>
                    <li>
                        <?php echo $post['immatriculation']; echo '-->'; echo $post['modele'] ?>
                        <form method="post" action="/TAP/index.php/users?id_supp=<?php echo $post['immatriculation'];?>"></form>
                    </li>
                <?php endforeach ?>
            </ul>
    </div>

<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>