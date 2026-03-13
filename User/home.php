<?php

require_once "../models/Sepeda.php";

$sepeda = new Sepeda();
$data = $sepeda->getAll();

?>

<!DOCTYPE html>
<html>

<head>

<title>E-Bike Store</title>

<style>

body{
font-family:Arial;
margin:0;
background:#f5f7fa;
}

/* HEADER */

.header{
background:#111;
color:white;
padding:18px 40px;
display:flex;
justify-content:space-between;
align-items:center;
}

.header h1{
margin:0;
font-size:24px;
}

.logout{
background:#e74c3c;
color:white;
padding:8px 14px;
text-decoration:none;
border-radius:6px;
}

.logout:hover{
background:#c0392b;
}

/* GRID PRODUK */

.container{
width:95%;
margin:auto;
display:grid;
grid-template-columns:repeat(auto-fit,minmax(260px,1fr));
gap:25px;
padding:40px 0;
}

/* CARD PRODUK */

.card{
background:white;
border-radius:14px;
overflow:hidden;
box-shadow:0 8px 20px rgba(0,0,0,0.08);
transition:0.3s;
}

.card:hover{
transform:translateY(-6px);
box-shadow:0 12px 25px rgba(0,0,0,0.15);
}

/* GAMBAR PRODUK */

.card img{
width:100%;
height:210px;
object-fit:cover;
}

/* INFO PRODUK */

.info{
padding:15px;
text-align:center;
}

.nama{
font-size:18px;
font-weight:bold;
margin-bottom:5px;
}

.merek{
color:#666;
font-size:14px;
margin-bottom:6px;
}

.kategori{
display:inline-block;
background:#3498db;
color:white;
padding:4px 10px;
font-size:12px;
border-radius:20px;
margin-bottom:10px;
}

.harga{
color:#e74c3c;
font-size:20px;
font-weight:bold;
margin:8px 0;
}

.stok{
color:#777;
font-size:14px;
margin-bottom:12px;
}

/* BUTTON */

.btn{
display:block;
background:#27ae60;
color:white;
padding:10px;
text-decoration:none;
border-radius:6px;
font-weight:bold;
transition:0.2s;
}

.btn:hover{
background:#1e8449;
}

</style>

</head>

<body>

<div class="header">

<h1>E-Bike Store</h1>

<a class="logout" href="../logout.php">Logout</a>

</div>

<div class="container">

<?php foreach($data as $s){ ?>

<div class="card">

<img src="../assets/<?php echo $s['gambar']; ?>">

<div class="info">

<div class="nama">
<?php echo $s['nama_sepeda']; ?>
</div>

<div class="merek">
<?php echo $s['merek']; ?>
</div>

<div class="kategori">
<?php echo $s['kategori']; ?>
</div>

<div class="harga">
Rp <?php echo number_format($s['harga']); ?>
</div>

<div class="stok">
Stok : <?php echo $s['stok']; ?>
</div>

<a class="btn" href="beli.php?id=<?php echo $s['id']; ?>">
Beli Sekarang
</a>

</div>

</div>

<?php } ?>

</div>

</body>

</html>