<?php $title= 'Exemple Annonces Basic PHP: Connexion'; ?>
<?php ob_start(); ?>
<div class="log">
    <form method="post" action="/TAPproject/index.php/annonces.php">
        <label for="login"> Votre identifiant </label> :
        <input type="text" name="login" id="login" placeholder="defaut" maxlength="12" required />
        <br />
        <label for="password"> Votre mot de passe </label> :
        <input type="password" name="password" id="password" maxlength="12" required />
        <input type="submit" value="Envoyer">
    </form>
    <a href="/TAPproject/index.php/register.php" class="acount"></a>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>