<?php 

function isLogged(){
    if(session_status() != PHP_SESSION_ACTIVE) {
        session_start();
    }
    if(!isset($_SESSION["user"])){
        header("Location: ". WWW . "?page=login");
        $_SESSION["message"] = [
            "alert" => "danger",
            "info"  => ["veuillez vous identifier pour accéder à cette page"]
        ];
        exit ; 
    }
}
// cette fonction nous permet d'eviter d'utiliser les meme mot de passe (dans le cas ou plusieurs profil on le meme mot de passe)