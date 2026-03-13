<?php

require_once "../models/Sepeda.php";

$sepeda = new Sepeda();
$data = $sepeda->getAll();

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Sepeda</title>

<style>

body{
font-family: Arial;
background:#f4f6f9;
margin:0;
padding:20px;
}

h2{
text-align:center;
}

.container{
width:90%;
margin:auto;
background:white;
padding:20px;
border-radius:8px;
box-shadow:0 2px 10px rgba(0,0,0,0.1);
}

.btn-tambah{
background:#28a745;
color:white;
padding:10px 15px;
text-decoration:none;
border-radius:5px;
}

.btn-edit{
background:#007bff;
color:white;
padding:6px 10px;
text-decoration:none;
border-radius:4px;
}

.btn-hapus{
background:#dc3545;
color:white;
padding:6px 10px;
text-decoration:none;
border-radius:4px;
}

table{
width:100%;
border-collapse:collapse;
margin-top:20px;
}

table th{
background:#343a40;
color:white;
padding:10px;
}

table td{
padding:10px;
text-align:center;
border-bottom:1px solid #ddd;
}

table tr:hover{
background:#f1f1f1;
}

img{
border-radius:6px;
}

</style>

</head>

<body>

<div class="container">

<h2>Data Sepeda Listrik</h2>

<a class="btn-tambah" href="tambah_sepeda.php">+ Tambah Sepeda</a>

<table>

<tr>
<th>Nama</th>
<th>Merek</th>
<th>Kategori</th>
<th>Harga</th>
<th>Stok</th>
<th>Gambar</th>
<th>Aksi</th>
</tr>

<?php foreach($data as $s){ ?>

<tr>

<td><?php echo $s['nama_sepeda']; ?></td>
<td><?php echo $s['merek']; ?></td>
<td><?php echo $s['kategori']; ?></td>
<td>Rp <?php echo number_format($s['harga']); ?></td>
<td><?php echo $s['stok']; ?></td>

<td>
<img src="../assets/<?php echo $s['gambar']; ?>" width="80">
</td>

<td>

<a class="btn-edit" href="edit_sepeda.php?id=<?php echo $s['id']; ?>">Edit</a>

<a class="btn-hapus" href="../controllers/SepedaController.php?action=hapus&id=<?php echo $s['id']; ?>">
Hapus
</a>

</td>

</tr>

<?php } ?>

</table>

</div>

</body>
</html>