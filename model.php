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

function get_all_posts()
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

function ajout_commande(){
    $link = open_database_connection();
    $query = 'INSERT INTO commande (details, adresse_livraison, num_client) 
    VALUES ("'.$_POST['détail'].'", "'.$_POST['adresse'].'", "'.$_POST['nb_client'].'")';
    mysqli_query($link, $query);
    close_database_connection($link);
}

function supp_commande(){
    $link = open_database_connection();
    $query = 'DELETE FROM commande where id_commande= "'.$_POST['supp'].'"';
    mysqli_query($link, $query);
    close_database_connection($link);
}

?>

