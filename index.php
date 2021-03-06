<link rel="stylesheet" href="/TAP/layout.css"/>
<link rel="stylesheet" href="/TAP/normalize.css"/>

<?php
// charge et initialise les bibliothèques globales
require_once 'model.php';
require_once 'controllers.php';

//demarrage de la session
session_start();

// route la requête en interne
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// vérification utilisateur authentifié


if ( '/TAP/index.php/information' == $uri) {
    information_action();
    exit;
}
elseif ('/TAP/index.php/login' == $uri) {
    $error = '';
    $login = '';
    login_action($login, $error);
    exit;
}

if( !isset($_SESSION['login']) ) {
    if( !isset($_POST['login']) || !isset($_POST['password']) ) {
        $error='not connected';
        $uri='/TAP/index.php';
        $login='';
    }
    elseif( is_admin($_POST['login'],$_POST['password']) ) {
        $_SESSION['login'] = $_POST['login'] ;
        $_SESSION['admin'] = True ;
        $login = $_SESSION['login'];
        $error='';
        admin_action($login,$error);
        exit;

    }
    elseif( !is_user($_POST['login'],$_POST['password']) ){
        $error='bad login/pwd';
        $uri='/TAP/index.php';
        $login='';

    }
    else {
        $_SESSION['login'] = $_POST['login'] ;
        $_SESSION['admin'] = False ;
        $login = $_SESSION['login'];
        $error='';
    }
}
else {
    $login = $_SESSION['login'];
    $error = '';
    $id = '';
}
//routage
if ( '/TAP/index.php' == $uri || '/TAP/' == $uri) {
    accueil_action($login,$error);
    exit;
}
elseif ( '/TAP/index.php/admin' == $uri ){
    admin_action($login,$error);
}
elseif ( '/TAP/index.php/users' == $uri ){
    users_action($login,$error);
}
elseif('/TAP/index.php/logout' == $uri ) {
// fermeture de la session
    session_destroy();
// affichage de la page de connexion
    login_action('','');
}
elseif('/TAP/index.php/Register_vehicule' == $uri ) {
    vehicule($login, $error);
}
elseif ('/TAP/index.php/ajout_commande' == $uri ){
    ajout_commande_action($login, $error);
}
elseif ('/TAP/index.php/Liste_commande' == $uri ){
    liste_commande ($login,$error);
}
elseif (isset($_POST['nb_client'])){
    commande_action();
}
elseif ('/TAP/index.php/detail_commande' == $uri && isset($_GET['id_commande'])) {
    detail_commande($_GET['id_commande'],$login,$error);
}

elseif (('/TAP/index.php/register' == $uri)){
    register_action($login,$error);
}

else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>My Page NotFound</h1></body></html>';
}



/*
//bouton supprimer commande
elseif (isset($_POST['supp'])) {
    $id = $_POST['supp'];
    echo $id;

if(isset($_POST['age'])){
    create_car($_POST['immatriculation'],$_POST['modele'],$_POST['age']);
}
*/

?>




