<?php

require_once "../models/Sepeda.php";

$sepeda = new Sepeda();

// cek apakah id ada
if(!isset($_GET['id'])){
    header("location:data_sepeda.php");
    exit();
}

$id = $_GET['id'];

$data = $sepeda->getById($id);

// jika data tidak ditemukan
if(!$data){
    echo "Data tidak ditemukan";
    exit();
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Sepeda</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
margin:0;
padding:20px;
}

.container{
width:500px;
margin:auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 3px 10px rgba(0,0,0,0.1);
}

h2{
text-align:center;
margin-bottom:20px;
}

label{
font-weight:bold;
}

input, select{
width:100%;
padding:10px;
margin-top:5px;
margin-bottom:15px;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#007bff;
color:white;
border:none;
border-radius:5px;
font-size:16px;
cursor:pointer;
}

button:hover{
background:#0056b3;
}

.btn-kembali{
display:block;
text-align:center;
margin-top:15px;
text-decoration:none;
background:#6c757d;
color:white;
padding:10px;
border-radius:5px;
}

.preview{
text-align:center;
margin-bottom:15px;
}

.preview img{
border-radius:8px;
}

</style>

</head>

<body>

<div class="container">

<h2>Edit Sepeda</h2>

<form action="../controllers/SepedaController.php?action=update" method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $data['id']; ?>">

<label>Nama Sepeda</label>
<input type="text" name="nama" value="<?php echo $data['nama_sepeda']; ?>" required>

<label>Merek Sepeda</label>
<input type="text" name="merek" value="<?php echo $data['merek']; ?>" required>

<label>Kategori</label>
<input type="text" name="kategori" value="<?php echo $data['kategori']; ?>" required>

<label>Harga</label>
<input type="number" name="harga" value="<?php echo $data['harga']; ?>" required>

<label>Stok</label>
<input type="number" name="stok" value="<?php echo $data['stok']; ?>" required>

<div class="preview">
<p><b>Gambar Saat Ini</b></p>
<img src="../assets/<?php echo $data['gambar']; ?>" width="120">
</div>

<label>Upload Gambar Baru</label>
<input type="file" name="gambar">

<button type="submit">Update Sepeda</button>

</form>

<a class="btn-kembali" href="data_sepeda.php">Kembali ke Data Sepeda</a>

</div>

</body>
</html>