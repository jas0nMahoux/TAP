<?php $title= 'Exemple Commmande Basic PHP: Commande'; ?>

<?php ob_start(); ?>
    <h1>Commande <?php echo $post ['id_commande']; ?> </h1>
    <div class="log"> <?php echo $post ['details']; ?> </div>
<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>

