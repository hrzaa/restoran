<?php 
session_start();
 
include('header.php');
//koneksi

if (!isset($_SESSION['login'])) {
    echo "<script>window.location.href='index.php'</script>";
}

include('../../config.php');
if (!isset($_SESSION['username'])) {
    header("Location: index.php");
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
                        Featured
                    </div>
                    <div class="card-body">
                    <form id="contactForm" enctype="multipart/form-data" action="proses-tambah.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label" for="kode_product">ID Product</label>
                            <input class="form-control" type="text" id="kode_product" name="kode_product" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="date">Waktu dan Tanggal</label>
                            <input class="form-control" type="date" id="date" name="date">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="nama_product">Nama Product</label>
                            <input class="form-control" id="nama_product" name="nama_product" type="text" placeholder="Nama Product" required/>
                        </div>
                        <label class="form-label" for="harga_product">Harga Product</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Rp</span>
                            <input class="form-control" id="harga_product" name="harga_product" type="text" placeholder="Harga Product" required/>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="gambar_product">Foto Product</label>
                            <input class="form-control" id="gambar_product" name="gambar_product"  type="file" placeholder="Foto Product" required/>
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="keterangan">Keterangan</label>
                            <textarea class="form-control" id="keterangan" name="keterangan" type="text" placeholder="Keterangan" style="height: 10rem" required></textarea>
                        </div>

                        <!-- Form submit button -->
                        <div class="mb-3">
                            <button type=" submit" name="submit" class="btn btn-primary">Kirim</button>
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