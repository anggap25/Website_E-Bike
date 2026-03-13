<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html>

<head>

<title>Logout</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#ff7e5f,#feb47b);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
margin:0;
}

.box{
background:white;
padding:40px;
border-radius:12px;
text-align:center;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
width:320px;
}

h2{
color:#2c3e50;
margin-bottom:10px;
}

p{
color:#555;
}

.btn{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:#3498db;
color:white;
text-decoration:none;
border-radius:6px;
}

.btn:hover{
background:#2980b9;
}

</style>

</head>

<body>

<div class="box">

<h2>Logout Berhasil</h2>

<p>Anda telah keluar dari sistem.</p>

<a class="btn" href="index.php">Kembali ke Login</a>

</div>

</body>

</html>