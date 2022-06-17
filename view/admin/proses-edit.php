<?php
// memanggil file koneksi.php untuk melakukan koneksi database
include '../../config.php';

	// membuat variabel untuk menampung data dari form input
  $id = $_POST['id'];

  // var_dump($id);
  $kode_product  = $_POST['kode_product'];
  $date         = $_POST['date'];
  $nama_product = $_POST['nama_product'];
  $harga_product = $_POST['harga_product'];
  $keterangan = $_POST['keterangan'];
  $gambar_product = $_FILES['gambar_product']['name'];
  //cek dulu jika merubah gambar produk jalankan coding ini
  if($gambar_product != "") {
    $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
    $x = explode('.', $gambar_product); //memisahkan nama file dengan ekstensi yang diupload
    $ekstensi = strtolower(end($x));
    $file_tmp = $_FILES['gambar_product']['tmp_name'];   
    $angka_acak     = rand(1,999);
    $nama_gambar_baru = $angka_acak.'-'.$gambar_product; //menggabungkan angka acak dengan nama file sebenarnya
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {
                  move_uploaded_file($file_tmp, '../../assets/images/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                      
                    // jalankan query UPDATE berdasarkan ID yang produknya kita edit
                   $query  = "UPDATE product SET kode_product = '$kode_product', tgl_input = '$date', nama_product = '$nama_product', harga = '$harga_product', keterangan = '$keterangan', foto = '$nama_gambar_baru'";
                    $query .= "WHERE id = '$id'";
                    $result = mysqli_query($conn, $query);
                    // periska query apakah ada error
                    if(!$result){
                        die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
                    } else {
                      //tampil alert dan akan redirect ke halaman index.php
                      //silahkan ganti index.php sesuai halaman yang akan dituju
                      echo "<script>alert('Data berhasil diubah.');window.location='product.php';</script>";
                    }
              } else {     
               //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                  echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='edit-produk.php';</script>";
              }
    } else {
      // jalankan query UPDATE berdasarkan ID yang produknya kita edit
      $query  = "UPDATE product SET kode_product = '$kode_product', tgl_input = '$date', nama_product = '$nama_product', harga = '$harga_product', keterangan = '$keterangan'";
      $query .= "WHERE id_product = '$id'";
      $result = mysqli_query($conn, $query);
      // periska query apakah ada error
      if(!$result){
            die ("Query gagal dijalankan: ".mysqli_errno($conn).
                             " - ".mysqli_error($conn));
      } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
          echo "<script>alert('Data berhasil diubah.');window.location='product.php';</script>";
      }
    }

 

