<?php
session_start();

if($_SESSION['user']['role'] != "admin"){
    header("location:../login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard Admin</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
margin:0;
padding:0;
}

.header{
background:#2c3e50;
color:white;
padding:15px;
text-align:center;
}

.container{
width:400px;
margin:60px auto;
background:white;
padding:30px;
border-radius:8px;
box-shadow:0 4px 10px rgba(0,0,0,0.2);
text-align:center;
}

a{
display:block;
padding:12px;
margin:10px 0;
text-decoration:none;
background:#3498db;
color:white;
border-radius:5px;
}

a:hover{
background:#2980b9;
}

.logout{
background:#e74c3c;
}

.logout:hover{
background:#c0392b;
}

</style>

</head>

<body>

<div class="header">
<h2>Dashboard Admin</h2>
</div>

<div class="container">

<a href="tambah_sepeda.php">Tambah Sepeda</a>

<a href="data_sepeda.php">Data Sepeda</a>

<a class="logout" href="../logout.php">Logout</a>

</div>

</body>
</html>