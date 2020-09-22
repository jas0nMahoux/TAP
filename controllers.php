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
function users_action($login,$error){
    require 'view/users.php';
}
//Mvc de la page register vehicule
function vehicule(){
    require 'view/Register_vehicule.php';
}
