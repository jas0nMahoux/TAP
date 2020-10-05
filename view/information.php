<?php $title= 'Exemple Annonces Basic PHP: Information'; ?>
<?php ob_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $title; ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
</head>
<body>
    <div class="header_droite">
        <p class="link2"><a href="/TAP/index.php/login">login</a></p>
    </div>
    <div class="log">
        <h1> Qui sommes nous ?</h1>
        <p> Nous sommes des étudiants en deuxième année de licence informatique. Nous avons créer ce site web pour vous aider
        dans la vie active. De plus nous sommes à votre disposition pour tout contact (voir si dessous).</p>
        <p>Tel : +687 00.00.00</p>
    <form method="POST" action="/TAP/index.php/acceuil">
        <input type="submit" value="retour" />
    </form>
    </div>
</body>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>
