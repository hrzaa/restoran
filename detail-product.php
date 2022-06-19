<?php 
    $page = 'detailProduct';
    include('config.php');
    include('view/component/header.php');
    include('view/component/navbar.php');
  ?>
   
   <!-- Contact -->
    <section class="contact mt-5" id="contact">
      <div class="container">
        <?php 

        $id = $_GET["id"];

        $sql = "SELECT * FROM product WHERE id_product='$id'";
        $query = mysqli_query($conn, $sql);
        $product = mysqli_fetch_array($query)

        ?>
        <div class="row">
            
          <div class="col text-center">
            <h1 class="heading mt-5">Detail Menu <?= $product['kode_product']; ?></h1>
            <p class="subheading">We serve you all the time</p>
            <!-- <?php var_dump($product) ?> -->
          </div>
        </div>
        <div class="row mt-4">
            <div class=" col-md-6 mt-5">
            <div class="card text-center">
                <div class="card-header">
                    Kode Menu - <?= $product['kode_product']; ?>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><?= $product['nama_product']; ?></h5>
                    <p class="card-text"><?= $product['keterangan']; ?></p>
                    <p class="card-text">Rp.<?= $product['harga']; ?></p>
                    <a href="#" class="btn btn-primary">Add to Chart</a>
                </div>
                <div class="card-footer text-muted">
                    <span> Diupload pada : <?= $product['tgl_input']; ?> || <a href="product.php">kembali ke daftar menu</a></span>
                </div>
                </div>
                
            </div>
            <div class="col-lg-6 text-center">
                <img src="Assets/images/<?= $product['foto']; ?>" class="img-fluid rounded-3" width="600" alt="" />
            </div>
        </div>
      </div>
    </section>

    <?php 
      include('view/component/footer.php') 
    ?>


