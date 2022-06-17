<?php
// memanggil file $conn.php untuk melakukan $conn database
include '../../config.php';

	// membuat variabel untuk menampung data dari form
  $kode_product  = $_POST['kode_product'];
  $date         = $_POST['date'];
  $nama_product = $_POST['nama_product'];
  $harga_product = $_POST['harga_product'];
  $keterangan = $_POST['keterangan'];
  $gambar_product = $_FILES['gambar_product']['name'];


//cek dulu jika ada gambar product jalankan coding ini
if($gambar_product != "") {
  $ekstensi_diperbolehkan = array('png','jpg'); //ekstensi file gambar yang bisa diupload 
  $x = explode('.', $gambar_product); //memisahkan nama file dengan ekstensi yang diupload
  $ekstensi = strtolower(end($x));
  $file_tmp = $_FILES['gambar_product']['tmp_name'];   
  $angka_acak     = rand(1,999);
  $nama_gambar_baru = $angka_acak.'-'.$gambar_product; //menggabungkan angka acak dengan nama file sebenarnya
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true)  {     
                move_uploaded_file($file_tmp, '../../assets/images/'.$nama_gambar_baru); //memindah file gambar ke folder gambar
                  // jalankan query INSERT untuk menambah data ke database pastikan sesuai urutan (id tidak perlu karena dibikin otomatis)
                  $query = "INSERT INTO product 
                    (id_product, kode_product, tgl_input, harga, nama_product, keterangan, foto) 
                    VALUES 
                    ('', '$kode_product', '$date', '$harga_product', '$nama_product', '$keterangan', '$nama_gambar_baru')";
                  $result = mysqli_query($conn, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($$conn).
                           " - ".mysqli_error($conn));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='product.php';</script>";
                  }

            } else {     
             //jika file ekstensi tidak jpg dan png maka alert ini yang tampil
                echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='tambah-product.php';</script>";
            }
} else {
    $query = "INSERT INTO product 
    (id_product, kode_product, tgl_input, harga, nama_product, keterangan, foto) 
    VALUES 
    ('', '$kode_product', '$date', '$harga_product', '$nama_product', '$keterangan', null)";
                  $result = mysqli_query($conn, $query);
                  // periska query apakah ada error
                  if(!$result){
                      die ("Query gagal dijalankan: ".mysqli_errno($$conn).
                           " - ".mysqli_error($conn));
                  } else {
                    //tampil alert dan akan redirect ke halaman index.php
                    //silahkan ganti index.php sesuai halaman yang akan dituju
                    echo "<script>alert('Data berhasil ditambah.');window.location='product.php';</script>";
                  }
}

 

