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
function is_admin( $login, $password )
{
    $isadmin = False ;
    $link = open_database_connection();
    $query= 'SELECT login FROM is_admin WHERE login="'.$login.'" and password="'.$password.'"';
    $result = mysqli_query($link, $query );
    if( mysqli_num_rows( $result) )
        $isadmin = True;
    mysqli_free_result( $result );
    close_database_connection($link);
    return $isadmin;
}

function get_all_commande()
{
    $link = open_database_connection();
    $resultall = mysqli_query($link,'SELECT id_commande, details FROM commande');
    $posts = array();
    while ($row = mysqli_fetch_assoc($resultall)) {
        $posts[] = $row;
    }
    mysqli_free_result( $resultall);
    close_database_connection($link);
    return $posts;
}

function get_all_vehicule()
{
    $link = open_database_connection();
    $resultall = mysqli_query($link,'SELECT immatriculation, modele FROM vehicule');
    $posts = array();
    while ($row = mysqli_fetch_assoc($resultall)) {
        $posts[] = $row;
    }
    mysqli_free_result( $resultall);
    close_database_connection($link);
    return $posts;
}

function get_vehicul_en_cours()
{
    $link = open_database_connection();
    $resultall = mysqli_query($link,'SELECT vehicule.immatriculation, modele, moteur FROM vehicule,capteur WHERE vehicule.immatriculation= capteur.immatriculation AND moteur =1');
    $posts = array();
    while ($row = mysqli_fetch_assoc($resultall)) {
        $posts[] = $row;
    }
    mysqli_free_result( $resultall);
    close_database_connection($link);
    return $posts;
}

function get_commande_en_cours( )
{
    $link = open_database_connection();
    $resultall = mysqli_query($link,'SELECT id_commande,En_cours FROM commande WHERE En_cours = 1');
    $com = array();
    while ($row = mysqli_fetch_assoc($resultall)) {
        $com[] = $row;
    }
    mysqli_free_result( $resultall);
    close_database_connection($link);
    return $com;
}

function get_data()
{
    $link = open_database_connection();
    $resultall = mysqli_query($link,'SELECT longitude,latitude,immatriculation FROM capteur');
    $posts2 = array();
    while ($row = mysqli_fetch_row($resultall)) {
        $post = array("latitude" => $row[1],
                        "longitude" => $row[0],
                        "immatriculation" => $row[2]);
        $posts2[] = $post;
    }
    mysqli_free_result( $resultall);
    close_database_connection($link);
    return $posts2;
}

function get_all_personnel()
{
    $link = open_database_connection();
    $resultall = mysqli_query($link,'SELECT nom, prenom,id_perso FROM personnel');
    $posts2 = array();
    while ($row = mysqli_fetch_assoc($resultall)) {
        $posts2[] = $row;
    }
    mysqli_free_result( $resultall);
    close_database_connection($link);
    return $posts2;
}

function supp_vehicule($id_supp){
    $link = open_database_connection();
    $query = 'delete from vehicule where immatriculation="'.$id_supp.'"';
    mysqli_query($link, $query);
    close_database_connection($link);
}

function supp_personnel($id_supp2){
    $link = open_database_connection();
    $query = 'delete from personnel where id_perso="'.$id_supp2.'"';
    mysqli_query($link, $query);
    close_database_connection($link);
}

function get_post( $id )
{
    $link = open_database_connection();
    $id = intval($id);
    $query = 'SELECT * FROM commande WHERE id_commande="'.$id.'"';
    $result = mysqli_query($link, $query);
    $post = mysqli_fetch_assoc($result);
    mysqli_free_result( $result);
    close_database_connection($link);
    return $post;
}

function ajout_commande($detail, $adresse,$nb_client ){
    $link = open_database_connection();
    $query = 'INSERT INTO commande (details, adresse_livraison, num_client) 
    VALUES ("'.$detail.'", "'.$adresse.'", "'.$nb_client.'")';
    mysqli_query($link, $query);
    close_database_connection($link);
}

function supp_commande($id_supp){
    $link = open_database_connection();
    $query = 'DELETE FROM commande where id_commande= "'.$id_supp.'"';
    mysqli_query($link, $query);
    close_database_connection($link);
}

function create_car($immatriculation,$modele,$age){
    $link = open_database_connection();
    mysqli_query($link,'INSERT INTO vehicule (immatriculation,modele,age) VALUES ("'.$immatriculation.'","'.$modele.'","'.$age.'")');
    close_database_connection($link);
}

function create_account()
{
    $link = open_database_connection();
    $query = 'INSERT INTO personnel ( nom, prenom, login, password, Ville, Tel, Mail) 
        VALUES ("'.$_POST['nom'].'", "'.$_POST['prenom'].'", "'.$_POST['login'].'", "'.$_POST['password'].'","'.$_POST['Ville'].'","'.$_POST['Tel'].'","'.$_POST['Mail'].'")';
    mysqli_query($link, $query);
    close_database_connection($link);

}

function cityNC($name)
{
    $url = 'https://data.gouv.nc/api/records/1.0/search/';
    $request_url = $url .'?dataset=communes-nc&q='. urlencode($name).'&rows=50';
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
}

?>

