<?php 
session_start();
 
include('header.php');
include('../../config.php');

if (!isset($_SESSION['login'])) {
    echo "<script>window.location.href='index.php'</script>";
    # code...
}

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>
    <div class="container-fluid px-4">
        <div class="row my-5">
        <h3 class="fs-4 mb-3">Recent Orders</h3>
            <div class="text-end">
                <button type="button" class="btn btn-primary mb-2" onclick="window.location.href='add-product.php'"><i class="bi bi-plus"></i>Tambah Product</button>
            </div>
                    
                <div class="col">
                    <table class="table bg-white rounded shadow-sm  table-hover table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col" width="50">Kode product</th>
                                <th scope="col">Tanggal Input</th>
                                <th scope="col">Nama Product</th>
                                <th scope="col">Keterangan</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Foto</th>
                                <th scope="col" width="120">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 0;
                             $sql = "SELECT * FROM product";
                             $query = mysqli_query($conn, $sql);
                                while($product = mysqli_fetch_array($query)){
                                $no++;
                            ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $product['kode_product']; ?></td>
                                <td><?= $product['tgl_input']; ?></td>
                                <td><?= $product['nama_product']; ?></td>
                                <td><?= $product['keterangan']; ?></td>
                                <td><?= $product['harga']; ?></td>
                                <td><img src="../../assets/images/<?= $product['foto']; ?>" width="200" alt=""></td>
                                <td>
                                    <div class="btn-group">
                                        <a href="add-product.php" class="btn btn-primary"><i class="bi bi-plus-square"></i></a>
                                        <a href="delete-product.php?id=<?= $product['id_product']; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')"><i class="bi bi-trash"></i></a>
                                        <a href="edit-product.php?id=<?= $product['id_product']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <?php } ?>    
                            </tbody>
                        </table>
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