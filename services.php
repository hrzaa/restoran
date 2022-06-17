<?php 
  $page = 'services';
  include('view/component/header.php'); 
  include('view/component/navbar.php');
?>

<!-- Service -->
<section class="service section-margin" id="service">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1 class="heading">Our Services</h1>
            <p class="subheading">We provide fast food with a variety of menus</p>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-lg-4">
            <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4" data-aos="flip-left">
              <div class="detail">
                <p class="label">Top Choice</p>
                <h3 class="heading">Various Food</h3>

                <a href="#" class="btn-service btn mt-4"><i class="bx bx-shopping-bag"></i> Shop</a>
              </div>
              <div class="img-service">
                <img src="Assets/images/step-1-removebg-preview.png" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-4 my-3 my-lg-0">
            <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4" data-aos="flip-left" data-aos-delay="300">
              <div class="detail">
                <p class="label">Top Choice</p>
                <h3 class="heading">Fast Delivery</h3>

                <a href="#" class="btn-service btn mt-4"><i class="bx bx-shopping-bag"></i> Shop</a>
              </div>
              <div class="img-service">
                <img src="Assets/images/step-2-removebg-preview.png" alt="" />
              </div>
            </div>
          </div>
          <div class="col-lg-4">
          <div class="card-service rounded-3 d-flex justify-content-between align-items-center p-4" data-aos="flip-left" data-aos-delay="300">
              <div class="detail">
                <p class="label">Top Choice</p>
                <h3 class="heading">Cash Back</h3>

                <a href="#" class="btn-service btn mt-4"><i class="bx bx-shopping-bag"></i> Shop</a>
              </div>
              <div class="img-service">
                <img src="Assets/images/step-3-removebg-preview.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include('view/component/footer.php') ?>