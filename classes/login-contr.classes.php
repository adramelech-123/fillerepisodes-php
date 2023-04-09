<?php

require_once 'login.classes.php';

class LoginController extends Login
{
    
    private $username;
    private $password;
    
    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }


    //Error Handling Methods for the Login

    private function emptyInput() {
        $result = '';

        if(empty($this->username) || empty($this->password) ) {
            $result = false;
            
        }
        else {
            $result = true;
        }

        // echo 'Result is: ' . $result . '<br>';
        return $result;
    }



    public function loginUser() {

        if($this->emptyInput() == false) {
            header('location: ../contributors.php?error=emptyInput');
            exit();
        }

        $this->getUser($this->username, $this->password);
        
        
    }


}




