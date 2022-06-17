  <?php 
    $page = 'addProduct';
    include('view/component/header.php');
    include('view/component/navbar.php');
  ?>
   
   <!-- Contact -->
    <section class="contact mt-5" id="contact">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1 class="heading mt-5">Add Menu</h1>
            <p class="subheading">We serve you all the time</p>
          </div>
        </div>
        <div class="row mt-4">
         
        <div class=" col-md-6 mt-5">
                    <p class="fs-3"> <span class="text-danger">Opps!</span> Add Menu hanya bisa dilakukan Admin.</p>
                    <p class="lead">
                        Login sebagai admin untuk input menu baru!
                    </p>
                    <a href="view/admin/index.php" class="btn btn-primary">Go To Admin Page</a>
                </div>
          <div class="col-lg-6 text-center">
            <img src="Assets/images/g-1.jpg" class="img-fluid rounded-3" width="600" alt="" />
          </div>
        </div>
      </div>
    </section>

    <?php 
      include('view/component/footer.php') 
    ?>


