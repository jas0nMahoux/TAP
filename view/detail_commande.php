<?php $title= 'Exemple Detail_commande' ; ?>

<?php ob_start(); ?>

        <h1> Commande <?php echo $id ; ?> </h1>

        <div class="log"> Details: <?php echo $post['details'] ; ?> </div>

<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>