<?php
include('../../config.php');
$id = $_GET["id"];


// var_dump($id);
    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM product WHERE id_product='$id' ";
    $hasil_query = mysqli_query($conn, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Gagal menghapus data: ".mysqli_errno($conn).
       " - ".mysqli_error($conn));
    } else {
      echo "<script>alert('Data berhasil dihapus.');window.location='product.php';</script>";
    }