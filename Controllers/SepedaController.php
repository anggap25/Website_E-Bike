<?php

require_once "../models/Sepeda.php";

$sepeda = new Sepeda();

if(isset($_GET['action'])){

$action = $_GET['action'];


// TAMBAH SEPEDA
if($action == "tambah"){

$nama = $_POST['nama'];
$merek = $_POST['merek'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp,"../assets/".$gambar);

$sepeda->tambah($nama,$merek,$kategori,$harga,$stok,$gambar);

header("location:../admin/data_sepeda.php");

}


// HAPUS SEPEDA
if($action == "hapus"){

$id = $_GET['id'];

$sepeda->hapus($id);

header("location:../admin/data_sepeda.php");

}


// UPDATE / EDIT SEPEDA
if($action == "update"){

$id = $_POST['id'];
$nama = $_POST['nama'];
$merek = $_POST['merek'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp,"../assets/".$gambar);

$sepeda->update($id,$nama,$merek,$kategori,$harga,$stok,$gambar);

header("location:../admin/data_sepeda.php");

}

}
?>