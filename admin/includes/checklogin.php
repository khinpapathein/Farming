<?php 
    if(strlen($_SESSION['adminid']==0)) {
        header('Location: login.php');
    }
?>