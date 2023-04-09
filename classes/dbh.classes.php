<?php

class DBH {
    protected function connect() {

        try {

            $host = 'localhost';
            $user = 'root';
            $password = "";
            $dbname = 'mockfiller';

            $dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;
            $conn = new PDO($dsn, $user, $password);
        
            return $conn;
        }

        catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage() . "<br>";
            exit();
        }
    }
}