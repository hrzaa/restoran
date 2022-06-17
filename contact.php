  <?php 
    $page = 'contact';
    include('view/component/header.php');
    include('view/component/navbar.php');
  ?>
   
   <!-- Contact -->
    <section class="contact mt-5" id="contact">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h1 class="heading mt-5">Contact Us</h1>
            <p class="subheading">We serve you all the time</p>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-lg-6 text-center">
            <img src="Assets/images/order-img.jpg" class="img-fluid rounded-3" width="600" alt="" />
          </div>
          <div class="col-lg-6 mt-4">
            <form id="contactForm">
              <!-- Name input -->
              <div class="mb-3">
                <label class="form-label" for="name">Name</label>
                <input class="form-control" id="name" type="text" placeholder="Name" />
              </div>

              <!-- Email address input -->
              <div class="mb-3">
                <label class="form-label" for="emailAddress">Email Address</label>
                <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" />
              </div>

              <!-- Message input -->
              <div class="mb-3">
                <label class="form-label" for="message">Message</label>
                <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem"></textarea>
              </div>

              <!-- Form submit button -->
              <div class="d-grid">
                <button class="btn btn-lg" type="submit">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <?php 
      include('view/component/footer.php') 
    ?>


