<?php
require_once __DIR__ . "/../config/database.php";

class Sepeda extends Database {

    // mengambil semua data sepeda
    public function getAll(){

        $conn = $this->connect();

        $data = [];

        $query = "SELECT * FROM sepeda";

        $result = $conn->query($query);

        if(!$result){
            die("Query error : " . $conn->error);
        }

        while($row = $result->fetch_assoc()){
            $data[] = $row;
        }

        return $data;
    }

    // menambah data sepeda
    public function tambah($nama,$merek,$kategori,$harga,$stok,$gambar){

        $conn = $this->connect();

        $query = "INSERT INTO sepeda 
        (nama_sepeda, merek, kategori, harga, stok, gambar)
        VALUES 
        ('$nama','$merek','$kategori','$harga','$stok','$gambar')";

        if(!$conn->query($query)){
            die("Insert gagal : " . $conn->error);
        }

        return true;
    }

    // menghapus data sepeda
    public function hapus($id){

        $conn = $this->connect();

        $query = "DELETE FROM sepeda WHERE id='$id'";

        if(!$conn->query($query)){
            die("Hapus gagal : " . $conn->error);
        }

        return true;
    }

    // mengambil data sepeda berdasarkan id
    public function getById($id){

        $conn = $this->connect();

        $query = "SELECT * FROM sepeda WHERE id='$id'";

        $result = $conn->query($query);

        if(!$result){
            die("Query error : " . $conn->error);
        }

        return $result->fetch_assoc();
    }

    // update data sepeda
    public function update($id,$nama,$merek,$kategori,$harga,$stok,$gambar){

        $conn = $this->connect();

        if($gambar != ""){
            $query = "UPDATE sepeda SET
            nama_sepeda='$nama',
            merek='$merek',
            kategori='$kategori',
            harga='$harga',
            stok='$stok',
            gambar='$gambar'
            WHERE id='$id'";
        } else {
            $query = "UPDATE sepeda SET
            nama_sepeda='$nama',
            merek='$merek',
            kategori='$kategori',
            harga='$harga',
            stok='$stok'
            WHERE id='$id'";
        }

        if(!$conn->query($query)){
            die("Update gagal : " . $conn->error);
        }

        return true;
    }

}
?>