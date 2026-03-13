<!DOCTYPE html>
<html>

<head>

<title>Tambah Sepeda</title>

<style>

body{
font-family:Arial;
background:linear-gradient(135deg,#2ecc71,#3498db);
margin:0;
padding:0;
}

.container{
width:500px;
margin:60px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 6px 20px rgba(0,0,0,0.3);
}

h2{
text-align:center;
margin-bottom:20px;
color:#2c3e50;
}

label{
font-weight:bold;
}

input,select{
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

.back{
display:block;
text-align:center;
margin-top:15px;
text-decoration:none;
color:#3498db;
}

</style>

</head>

<body>

<div class="container">

<h2>Tambah Sepeda</h2>

<form action="../controllers/SepedaController.php?action=tambah" method="POST" enctype="multipart/form-data">

<label>Nama Sepeda</label>
<input type="text" name="nama" required>

<label>Merek Sepeda</label>
<input type="text" name="merek" required>

<label>Kategori Sepeda</label>
<select name="kategori">

<option value="Sepeda Listrik Kota">Sepeda Listrik Kota</option>
<option value="Sepeda Gunung Listrik">Sepeda Gunung Listrik</option>
<option value="Sepeda Lipat Listrik">Sepeda Lipat Listrik</option>

</select>

<label>Harga</label>
<input type="number" name="harga" required>

<label>Stok</label>
<input type="number" name="stok" required>

<label>Upload Gambar</label>
<input type="file" name="gambar" required>

<button type="submit">Simpan Sepeda</button>

</form>

<a class="back" href="dashboard.php">← Kembali ke Dashboard</a>

</div>

</body>

</html>