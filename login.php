<!DOCTYPE html>
<html>

<head>

<title>Login - E Bike Store</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#1abc9c,#3498db);
height:100vh;
display:flex;
justify-content:center;
align-items:center;
margin:0;
}

.login-box{
background:white;
padding:40px;
width:350px;
border-radius:10px;
box-shadow:0 8px 20px rgba(0,0,0,0.3);
text-align:center;
}

.login-box h2{
margin-bottom:20px;
color:#2c3e50;
}

input{
width:100%;
padding:10px;
margin:10px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:10px;
background:#27ae60;
border:none;
color:white;
font-size:16px;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#1e8449;
}

.register{
margin-top:15px;
}

.register a{
text-decoration:none;
color:#3498db;
}

</style>

</head>

<body>

<div class="login-box">

<h2>Login E-Bike Store</h2>

<form action="controllers/AuthController.php?action=login" method="POST">

Email
<input type="email" name="email" required>

Password
<input type="password" name="password" required>

<br><br>

<button type="submit">Login</button>

</form>

<div class="register">
Belum punya akun? <a href="register.php">Register</a>
</div>

</div>

</body>

</html>