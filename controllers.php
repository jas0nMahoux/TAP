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
function users_action($login,$error){
    require 'view/users.php';
}
//Mvc de la page register vehicule
function vehicule(){
    require 'view/Register_vehicule.php';
}
function ajout_commande_action (){
    require 'view/Ajout_commande.php';
}
function commande_action (){
    ajout_commande();
}
function liste_commande (){
    $posts = get_all_posts();
    supp_commande();
    require 'view/Liste_commande.php';
}
//affiche le détail d'une commande sélectionnée
function detail_commande ($id,$login,$error)
{
    $post = get_post($id);
    require 'view/detail_commande.php';
}
