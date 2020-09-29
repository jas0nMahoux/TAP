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
    require 'view/Ajout_commande.php';
}
function users_action($login,$error){
    require 'view/users.php';
}
//Mvc de la page register vehicule
function vehicule(){
    require 'view/Register_vehicule.php';
}
function compte_action(){
    create_account();
}
function register_action($login,$error)
{
    require 'view/register.php';
}
