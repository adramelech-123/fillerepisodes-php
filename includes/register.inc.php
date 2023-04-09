<?php

if(isset($_POST['submit'])) {

    //Grab Registration Form Data
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $r_password = $_POST['r_password'];

   // Include dbh, register and register controller classes
    include '../classes/dbh.classes.php';
    include '../classes/register.classes.php';
    include '../classes/register-contr.classes.php';

    //Instaniate Registration Controller Class
    $register = new RegisterController($fullname, $email, $username, $password, $r_password);


    //Run Error Handlers
    $register->registerUser();


    //Re-route to front Page
    header('location: ../contributors.php?error=none');

}