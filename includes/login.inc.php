<?php

if(isset($_POST['submit'])) {

  
    $username = $_POST['userID'];
    $password = $_POST['password'];
    

   // Include dbh, register and register controller classes
    include '../classes/dbh.classes.php';
    include '../classes/login.classes.php';
    include '../classes/login-contr.classes.php';

    //Instaniate Registration Controller Class
    $login = new LoginController($username, $password);


    //Run Error Handlers
    $login->loginUser();


    //Re-route to front Page
    header('location: ../index.php?error=none');

}