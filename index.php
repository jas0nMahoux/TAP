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

if ('/TAPproject/index.php/login.php' == $uri) {
    $error = '';
    $login = '';
    login_action($login, $error);
    exit;
}

if( !isset($_SESSION['login']) ) {
    if( !isset($_POST['login']) || !isset($_POST['password']) ) {
        $error='not connected';
        $uri='/TAPproject/index.php';
        $login='';
    }
    elseif( !is_user($_POST['login'],$_POST['password']) ){
        $error='bad login/pwd';
        $uri='/TAPproject/index.php';
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

if ( '/TAPproject/index.php' == $uri || '/TAPproject/' == $uri) {
    accueil_action();
    exit;
}

else {
    header('Status: 404 Not Found');
    echo '<html><body><h1>My Page NotFound</h1></body></html>';
}

?>



