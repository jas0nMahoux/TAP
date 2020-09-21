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
if ( '/TAP/index.php/information.php' == $uri || '/TAP/' == $uri) {
    information_action();
    exit;
}
elseif ('/TAP/index.php/login.php' == $uri) {
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
    elseif( !is_user($_POST['login'],$_POST['password']) ){
        $error='bad login/pwd';
        $uri='/TAP/index.php';
        $login='';

    }
    else {
        $_SESSION['login'] = $_POST['login'] ;
        $login = $_SESSION['login'];
        $error='';
    }
}
else {
    $login = $_SESSION['login'];
    $error = '';
}
//routage

if ( '/TAP/index.php' == $uri || '/TAP/' == $uri) {
    accueil_action($login,$error);
    exit;
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
else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>My Page NotFound</h1></body></html>';
}

?>




