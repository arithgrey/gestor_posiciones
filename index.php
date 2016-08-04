<?php   
    session_start();     
    if ($_SESSION["in_session"] ==  1  ){
        include "panel.php";     
    }else{
        include "user_login.php";
    } 
?>