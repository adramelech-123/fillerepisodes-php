<?php

require_once 'dbh.classes.php';

class Login extends DBH
{
   
    
    protected function getUser($username, $password) {

        $sql = 'SELECT user_pass FROM users WHERE user_name = ? OR email = ?';
        $stmt = $this->connect()->prepare($sql);

        
        //Check Execution
        if(!$stmt->execute([$username, $password])) {
            
            $stmt = null;
            header('location: ../contributors.php?error=stmtFailed');
            exit();
        }

    
        $stmt->execute([$username, $password]);

        //Check if we return any data
        if($stmt->rowCount() == 0) {
            $stmt = null;
            header('location: ../contributors.php?error=usernotfound');
            exit();
        }

        
        //Check password entered by user vs hashed password

        $pwdHashed = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $pwdHashed[0]['user_pass']);

        if($checkPwd == false) {
            $stmt = null;
            header('location: ../contributors.php?error=wrongpassword');
            exit();
        }

        elseif ($checkPwd == true) {

            $sql = 'SELECT * FROM users WHERE user_name = ? OR email = ? AND user_pass = ?';
            $stmt = $this->connect()->prepare($sql);

            if(!$stmt->execute([$username, $username, $password])) {
            
                $stmt = null;
                header('location: ../contributors.php?error=stmtFailed');
                exit();
            }

            

            if($stmt->rowCount() == 0) {
                $stmt = null;
                header('location: ../contributors.php?error=usernotfound');
                exit();
            }


            $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
            session_start();

            $_SESSION['userid'] = $user[0]['user_id'];
            $_SESSION['userID'] = $user[0]['user_name'];


            $stmt = null;

            
        }

        
    }

}
