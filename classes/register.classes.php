<?php

require_once 'dbh.classes.php';

class Register extends DBH
{
   
    //Set a new user
    protected function setUser($fullname, $email, $username, $password) {
        $sql = 'INSERT INTO users (full_name, email, user_name, user_pass) VALUES (?,?,?,?);';
        $stmt = $this->connect()->prepare($sql);

        $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

        if(!$stmt->execute([$fullname,$email, $username, $hashedPwd])) {
            
            $stmt = null;
            header('location: ../register.php?error=stmtFailed');
            exit();
        }

        $stmt = null;
    }

    // Check if user already exists
    protected function checkUser($email, $username) {
        $sql = 'SELECT user_id FROM users WHERE email = ? OR user_id = ?;';
        $stmt = $this->connect()->prepare($sql);

        if(!$stmt->execute([$email, $username])) {
            //If the statement fails to execute the statement closes/terminates and we are redirected to the homepage
            $stmt = null;
            header('location: ../register.php?error=stmtFailed');
            exit();
        }

        else {

            //Check if the statement returns anything
            $resultCheck = '';
    
            if($stmt->rowCount() > 0) {
                $resultCheck = false;
            }
    
            else {
                $resultCheck = true;
            }
    
            return $resultCheck;
            
        }

       
    }


}