<?php $title= 'Exemple Detail_commande' ; ?>

<?php ob_start(); ?>

        <h1> Commande <?php echo $post['id_commande']  ; ?> </h1>

        <div class="log"> Detail de la commande: <br/> <?php echo $post['details'] ; ?> </div>

        <a href="/TAP/index.php/Liste_commande">Retour</a>

<?php $content = ob_get_clean(); ?>

<?php include 'layout.php'; ?>