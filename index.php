<?php 
$page = 'index';
include 'view/component/header.php';
include 'view/component/navbar.php';

?>



<!-- Home -->
<section class="home" id="home">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-lg-flex flex-lg-column justify-content-lg-end content-left" data-aos="fade-up">
            <h1 class="heading">Fast Food Delivered To Your Table In A Minutes</h1>
            <p class="subheading text-white">There are several fast food variants that you can choose, enjoy your meal</p>
            <div class="btn-home mt-5">
              <a href="#" class="btn btn-buy py-2 px-3 px-lg-4 py-lg-3">Buy Now</a>
              <a href="#" class="btn btn-learn ms-4 py-2 px-3 px-lg-4 py-lg-3">Learn More</a>
            </div>
          </div>
          <div class="col-lg-6 position-relative d-none d-lg-block">
            <img src="Assets/images/home-img.png" class="img-fluid position-absolute" alt="" />
            <!-- <img src="img/home-img2.png" class="position-absolute img2 top-0" alt="" /> -->
          </div>
        </div>
      </div>
    </section>

    
    <!-- Banner1 -->
    <section class="banner1 section-margin px-2">
      <div class="container rounded-3 pt-5 pt-lg-0 h-100">
        <div class="row text-white h-100 d-lg-flex align-items-lg-center">
          <div class="col-lg-6">
            <p class="label">Black Friday</p>
            <h3 class="heading">Sale Up To <span>50%</span> Off</h3>
            <a href="#" class="btn btn-banner1 mt-4">Shop Now</a>
          </div>
          <div class="col-lg-6 position-relative">
            <img src="Assets/images/p-2-removebg-preview.png" class="img-fluid position-absolute end-0" alt="" />
          </div>
        </div>
      </div>
    </section>

    <?php 
    include 'view/component/footer.php';

    ?>