<?php

    function validaAcesso(){
        session_start();
        if(!isset($_SESSION["loggedin"]) || !$_SESSION["loggedin"]){
            header("location: index.php");
            exit;
        }
    }
?>