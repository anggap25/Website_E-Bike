<?php

require_once "../models/Sepeda.php";

$sepeda = new Sepeda();

$id = $_GET['id'];

$data = $sepeda->getById($id);

?>

<!DOCTYPE html>
<html>

<head>

<title>Pembelian Sepeda</title>

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

.box{
background:white;
padding:40px;
border-radius:10px;
text-align:center;
box-shadow:0 5px 15px rgba(0,0,0,0.3);
width:350px;
}

h2{
color:#2c3e50;
margin-bottom:20px;
}

img{
width:180px;
border-radius:8px;
margin-bottom:15px;
}

.nama{
font-size:20px;
font-weight:bold;
color:#333;
}

.harga{
color:#27ae60;
font-size:18px;
margin-top:5px;
}

.btn{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:#27ae60;
color:white;
text-decoration:none;
border-radius:5px;
}

.btn:hover{
background:#1e8449;
}

</style>

</head>

<body>

<div class="box">

<h2>Pembelian Berhasil!</h2>

<img src="../assets/<?php echo $data['gambar']; ?>">

<div class="nama">
<?php echo $data['nama_sepeda']; ?>
</div>

<div class="harga">
Rp <?php echo number_format($data['harga']); ?>
</div>

<p>Terima kasih telah membeli sepeda ini.</p>

<a class="btn" href="home.php">Kembali ke Halaman Home</a>

</div>

</body>

</html>