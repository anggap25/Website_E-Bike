<?php
session_start();

require_once "../models/User.php";

$user = new User();

$action = $_GET['action'];

if($action == "login"){

$email = $_POST['email'];
$password = $_POST['password'];

$data = $user->login($email,$password);

if($data){

$_SESSION['user'] = $data;

if($data['role']=="admin"){
header("location:../admin/dashboard.php");
}else{
header("location:../user/home.php");
}

}else{

echo "Login gagal";

}

}

if($action == "register"){

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$user->register($name,$email,$password);

header("location:../login.php");

}