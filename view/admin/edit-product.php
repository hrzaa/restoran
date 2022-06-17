<?php 
session_start();
 
include('header.php');
//koneksi
include('../../config.php');

if (!isset($_SESSION['login'])) {
    echo "<script>window.location.href='index.php'</script>";
}

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM product WHERE id_product='$id'";
    $result = mysqli_query($conn, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($conn).
         " - ".mysqli_error($conn));
    }
    // mengambil data dari database
    $product = mysqli_fetch_assoc($result);
      // apabiproduct tidak ada pada database maka akan dijalankan perintah ini
       if (!count($product)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='product.php';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='product.php';</script>";
  }         


?>

<div class="container-fluid px-4">
    <!-- <img src="../../assets/images/g" alt=""> -->
        <div class="row my-5">
        <h3 class="fs-4 mb-3">Recent Orders</h3>
            <div class="text-end">
                <button type="button" class="btn btn-primary mb-2"><i class="bi bi-plus"></i>Tambah Product</button>
            </div>
                    
                <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h3>Edit data <?= $product['nama_product']; ?></h3>
                    </div>
                    <div class="card-body">
                    <form id="contactForm" enctype="multipart/form-data" action="proses-edit.php" method="POST">
                          
                    <div class="mb-3">
                    <input name="id" value="<?php echo $product['id_product']; ?>"  hidden />  
                            <label class="form-label" for="kode_product">ID Product</label>
                            <input class="form-control" type="text" id="kode_product" name="kode_product" value="<?= $product['kode_product']; ?>"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="date">Waktu dan Tanggal</label>
                            <input class="form-control" type="date" id="date" name="date" value="<?= $product['tgl_input']; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama_product">Nama Product</label>
                            <input class="form-control" id="nama_product" name="nama_product" type="text" placeholder="Nama Product" value="<?= $product['nama_product']; ?>"/>
                        </div>
                        <label class="form-label" for="harga_product">Harga Product</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                            <input class="form-control" id="harga_product" name="harga_product" type="text" placeholder="Harga Product" value="<?= $product['harga']; ?>"/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="gambar_product">Foto Product</label>
                            <img src="../../assets/images/<?= $product['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;" alt="">
                            <input class="form-control" id="gambar_product" name="gambar_product"  type="file" placeholder="Foto Product"  />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" type="text"  style="height: 10rem"><?= $product['keterangan']; ?></textarea>
                        </div>

                        <!-- Form submit button -->
                        <div class="mb-3">
                            <button type=" submit" name="submit" class="btn btn-primary">Update</button>
                            <!-- <button class="btn btn-lg" type="submit">Submit</button> -->
                        </div>
                        </form>
                    </div>
                    </div>    
                    </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

<?php
    include('footer.php');
    
?>