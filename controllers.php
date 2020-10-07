<?php

function accueil_action($login,$error){
    require 'view/accueil.php';
}
function login_action($login,$error)
{
    $login='';
    $error='';
    require 'view/login.php';
}

function information_action()
{
    $login='';
    $error='';
    require 'view/information.php';
}
function admin_action($login,$error)
{
    if(isset($_GET['id_supp'])){
        supp_vehicule($_GET['id_supp']);
    }
    if(isset($_POST['Mail'])){
        echo 'test';
        compte_action();
    }
    if(isset($_GET['id_supp2'])){
        echo $_GET['id_supp2'];
        supp_personnel($_GET['id_supp2']);
    }
    if(isset($_POST['age'])){
        create_car($_POST['immatriculation'],$_POST['modele'],$_POST['age']);
    }
    $posts = get_all_vehicule();
    $posts2 = get_all_personnel();
    require 'view/admin.php';
}
function liste_commande_action($login,$error)
{
    require 'view/Liste_commande.php';
}
function ajout_commande_action($login,$error)
{
    if(isset($_POST['detail'])){
        ajout_commande($_POST['detail'],$_POST['adresse'], $_POST['nb_client'] );
    }
    require 'view/ajout_commande.php';
}
function users_action($login,$error){
    $posts = get_vehicul_en_cours();
    $com = get_commande_en_cours();
    $data = get_data();
    if($_SESSION['admin'] == True){
        $login="admin";
        admin_action($login,$error);
    }
    else {
        require 'view/users.php';
    }
}
//Mvc de la page register vehicule
function vehicule($login,$error){
    require 'view/Register_vehicule.php';
}

function compte_action(){
    create_account();
}

function liste_commande ($login,$error){
    if(isset($_GET['id_supp'])){
        supp_commande($_GET['id_supp']);
    }
    $posts = get_all_commande();
    require 'view/Liste_commande.php';
}

//affiche le détail d'une commande sélectionnée
function detail_commande($id,$login,$error)
{
    $post = get_post($id);
    require 'view/detail_commande.php';
}
function register_action($login,$error)
{
    require 'view/register.php';
}
?>

