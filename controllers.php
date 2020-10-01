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
        echo $_GET['id_supp'];
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
    require 'view/Ajout_commande.php';
}
function users_action($login,$error){
    $posts = get_all_vehicule();
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
    echo 'test2';
    create_account();
}
function register_action($login,$error)
{
    require 'view/register.php';
}
