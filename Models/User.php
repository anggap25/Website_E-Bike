<?php
require_once "../config/database.php";

class User extends Database {

    public function login($email,$password){

        $conn = $this->connect();

        $query = $conn->query("
        SELECT * FROM users
        WHERE email='$email'
        AND password='$password'
        ");

        return $query->fetch_assoc();
    }

    public function register($name,$email,$password){

        $conn = $this->connect();

        $conn->query("
        INSERT INTO users(name,email,password,role)
        VALUES('$name','$email','$password','user')
        ");
    }
}