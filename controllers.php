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
    require 'view/information.php';
}
function admin_action($login,$error)
{
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

    require 'view/users.php';
}
//Mvc de la page register vehicule
function vehicule(){
    require 'view/Register_vehicule.php';
}
function liste_commande (){
    if(isset($_GET['id_supp'])){
        supp_commande($_GET['id_supp']);
    }
    $posts = get_all_commande();
    require 'view/Liste_commande.php';
}

//affiche le détail d'une commande sélectionnée
function detail_commande ($id,$login,$error)
{
    $post = get_post($id);
    require 'view/detail_commande.php';
}

