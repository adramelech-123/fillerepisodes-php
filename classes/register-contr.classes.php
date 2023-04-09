<?php

require_once 'register.classes.php';

// Class to create a new user (We instatiate a new user in the register.inc.php)
class RegisterController extends Register
{
    private $fullname;
    private $email;
    private $username;
    private $password;
    private $r_password;
    

    public function __construct($fullname, $email, $username, $password, $r_password)
    {
        $this->fullname = $fullname;
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
        $this->r_password = $r_password;
    }

    //Error Handling Methods for the Registration

    private function emptyInput() {
        $result = '';

        if(empty($this->fullname) || empty($this->email) || empty($this->username) || empty($this->password) || empty($this->r_password) ) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function invalidUser() {
        $result = '';

        if(!preg_match("/^[a-zA-Z0-9]*$/", $this->username)) {
            $result = false;
        }
        else {
            $result = true;
        }

        return $result;
    }

    private function invalidEmail() {
        $result = '';

        if(!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $result = false;
        }

        else {
            $result = true;
        }

        return $result;
    }

    private function passwordMatch() {
        $result = '';

        if($this->password !== $this->r_password) {
            $result = false;
        }
        else {
            $result = true;
        }
    
        return $result;
    }

    private function userTaken() {
        
        $result = '';

        if(!$this->checkUser($this->email, $this->username)) {
            $result = false;
        }
        else {
            $result = true;
        }
    
        return $result;
    }


    public function registerUser() {

        if($this->emptyInput() == false) {
            header('location: ../register.php?error=emptyInput');
            exit();
        }

        if($this->invalidUser() == false) {
            header('location: ../register.php?error=invalidUser');
            exit();
        }

        if($this->invalidEmail() == false) {
            header('location: ../register.php?error=invalidEmail');
            exit();
        }

        if($this->passwordMatch() == false) {
            header('location: ../register.php?error=nopassmatch');
            exit();
        }

        if($this->userTaken() == false) {
            header('location: ../register.php?error=userTaken');
            exit();
        }

        $this->setUser($this->fullname, $this->email, $this->username, $this->password);
    }


}