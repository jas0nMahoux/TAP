<?php
function open_database_connection()
{
    $link = mysqli_connect('localhost', 'root', '', 'tap');
return $link;
}
function close_database_connection($link)
{
mysqli_close($link);
}
function is_user( $login, $password )
{
$isuser = False ;
$link = open_database_connection();
$query= 'SELECT login FROM personnel WHERE login="'.$login.'" and password="'.$password.'"';
$result = mysqli_query($link, $query );
if( mysqli_num_rows( $result) )
$isuser = True;
mysqli_free_result( $result );
close_database_connection($link);
return $isuser;
}
//function qui dit si un utilisateur est admin ou non
function is_admin($login, $password)
{
    $isadmin=false;

    $link = open_database_connection();
    $query = 'SELECT login FROM patron WHERE login="' . $login . '" and password="' . $password . '"';
    //echo $query;
    $result = mysqli_query($link, $query);


    //echo '\n nbligne:'.mysqli_num_rows($result);

    if (mysqli_num_rows($result))
        $isadmin=true;

    mysqli_free_result($result);
    close_database_connection($link);

    return $isadmin;
}

function get_all_posts()
{
    $link = open_database_connection();
    $resultall = mysqli_query($link,'SELECT id, title FROM Post');
    $posts = array();
    while ($row = mysqli_fetch_assoc($resultall)) {
        $posts[] = $row;
    }
    mysqli_free_result( $resultall);
    close_database_connection($link);
    return $posts;
}
function get_post( $id )
{
    $link = open_database_connection();
    $id = intval($id);
    $result = mysqli_query($link, 'SELECT * FROM Post WHERE id='.$id );
    $post = mysqli_fetch_assoc($result);
    mysqli_free_result( $result);
    close_database_connection($link);
    return $post;
}

function create_account()
{
        $link = open_database_connection();
        $query = 'INSERT INTO users (login, password, nom, prenom, mail, pays, ville)
        VALUES ("'.$_POST['login'].'", "'.$_POST['password'].'", "'.$_POST['nom'].'", "'.$_POST['prenom'].'", "'.$_POST['mail'].'", "'.$_POST['pays'].'", "'.$_POST['ville'].'")';
        mysqli_query($link, $query);
        close_database_connection($link);

}

function create_annonce($login)
{
    $link = open_database_connection();
    $query = 'INSERT INTO post (title, body, login)
        VALUES ("'.$_POST['titre'].'", "'.$_POST['Texte'].'", "'.$login.'")';
    mysqli_query($link, $query);
    close_database_connection($link);
}

function my_annonce($login){
    $link = open_database_connection();
    $resultat = mysqli_query($link,'select * from Post where login="'.$login.'"');
    $myposts = array();
    while ($row = mysqli_fetch_assoc($resultat)) {
        $myposts[] = $row;
    }
    mysqli_free_result( $resultat);
    close_database_connection($link);
    return $myposts;
}

function supp_annonce($id_supp){
    echo $id_supp;
    $link = open_database_connection();
    $query = 'delete from Post where id="'.$id_supp.'"';
    mysqli_query($link, $query);
    close_database_connection($link);
}

/*function cityNC($name)
{
    $url = 'https://data.gouv.nc/api/records/1.0/search/';
    $request_url = $url .'?dataset=offres-demploi&q='. urlencode($name).'&rows=50';
// initialisation d'une session
    $curl = curl_init($request_url);
// spécification des paramètres de connexion
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
// envoie de la requête et récupération du résultat sous forme d'objet JSON
    $response = json_decode(curl_exec($curl));
// fermeture de la session
    curl_close($curl);
// stockage des villes et des codes postaux dans un tableau associatif
    foreach( $response->records as $infoville ){
        $villes[$infoville->fields->nom_minus]=$infoville->fields->code_post;
    }
    return $villes;
}*/
//fonction création véhicule
function create_car($immatriculation,$modele,$age){
    $link = open_database_connection();
    mysqli_query($link,'INSERT INTO vehicule (immatriculation,modele,age) VALUES ("'.$immatriculation.'","'.$modele.'","'.$age.'")');
    close_database_connection($link);
}
?>

