 <?php
    if(isset($_SERVER['HTTPS'])&&$_SERVER['HTTPS'] === 'on')
        $url = "https://";
    
    else
        $url = "http://";
    
        $url .= $_SERVER['HTTP_HOST'];

        $url .= $_SERVER['REQUEST_URI'];
        
?>

<?php
    $r_url = '';
    if($_GET['token']){
        $token = $_GET["token"];
        $r_url = URLROOT . "/users/new_password.php?token=". $_GET['token'];
    
        
    }

    if($url == $r_url){
        require 'new_password.php';
    }
?>

