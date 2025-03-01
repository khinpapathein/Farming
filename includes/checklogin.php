<?php 
    if(strlen($_SESSION['userId'])==0){
        header("Location: login.php");
    }
?>