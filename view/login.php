<?php $title= 'Exemple Annonces Basic PHP: Connexion'; ?>
<?php ob_start(); ?>
<div class="log">
    <form method="post" action="/TAP/index.php/users">
        <label for="login"> Votre identifiant </label> :
        <input type="text" name="login" id="login" placeholder="defaut" maxlength="12" required />
        <br />
        <label for="password"> Votre mot de passe </label> :
        <input type="password" name="password" id="password" maxlength="12" required />
        <input type="submit" value="Envoyer">
    </form>
    <form action="/TAP/index.php">
        <input type="submit" value="Annuler" />
    </form>
</div>
<footer>
    <p>contactez nous en cas de probléme sur l'adrresse adminTAP@gmail.com</p>
    <a href="/TAP/index.php/information.php">Qui sommes nous ?</a>
</footer>
<?php $content = ob_get_clean(); ?>
<?php include 'layout.php'; ?>