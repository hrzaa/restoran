<?php 
include('header.php');

?>

<!-- NAVBAR -->
  <body data-bs-spy="scroll" data-bs-target="#navbar-spy" data-bs-offset="200" class="scrollspy-example" tabindex="0">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark fixed-top py-3">
        <div class="container">
          <a class="navbar-brand" href="#"><span>NA</span>BIIL RESTO</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse d-lg-flex justify-content-lg-end align-items-lg-center" id="navbarNavAltMarkup">
            <div class="navbar-nav me-5" id="navbar-spy">
              <!-- <a class="nav-link me-4 active" href="index.php">Home</a>
              <a class="nav-link me-4" href="services.php">Services</a>
              <a class="nav-link me-4" href="product.php">Menu</a>
              <a class="nav-link" href="contact.php">Contact us</a> -->

              <a class="nav-link me-4 <?php  if($page == "index") {echo "active"; }?>" href="index.php">Home</a>
              <a class="nav-link me-4 <?php  if($page == "services") {echo "active"; }?>" href="services.php">Services</a>
              <a class="nav-link me-4 <?php  if($page == "product") {echo "active";} ?>" href="product.php">Menu</a>
              <a class="nav-link me-4 <?php  if($page == "contact") {echo "active"; }?>" href="contact.php">Contact us</a>
              <a class="nav-link <?php  if($page == "addProduct") {echo "active"; }?>" href="addProduct.php">Add Menu</a>
            </div>
            <div class="icons-home mt-4 mt-lg-0">
              <a href="#"><i class="bx bx-shopping-bag ms-3"></i></a>
              <a href="view/admin/index.php"><i class="bx bx-user"></i></a>
            </div>
          </div>
        </div>
      </nav>
    </header>