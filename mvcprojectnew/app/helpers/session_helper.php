<?php
ob_start();
// sent a request to php
session_start();

function isLoggedIn(){
    if (isset($_SESSION['email'])){
        return true;
    }else {
        return false;
    }
}


function notLoggedIn(){

    if (empty($_SESSION['email'])){
        header('location:' . URLROOT . '/users/login');
    }
}


?>