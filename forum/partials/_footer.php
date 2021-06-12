<style>
.products{
  color:white;
}
</style>

<!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 py-3 mb-0 bg-dark text-light">

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Footer links -->
    <div class="row text-center text-md-left mt-3 pb-3">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Blade News</h6>
        <p>welcome to V-Discuss!! we hope you are having fun browsing the site.
           with your support and our work we will grow together.<br>LETS HAVE FUN!!</p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
        <p>
          <a href="index.php" class="products">Blade News</a>
        </p>
        <p>
          <a href="#!" class="products">Blade Films</a>
        </p>
        <p>
          <a href="#!" class="products">V merchandies</a>
        </p>
      </div>
      <!-- Grid column -->

      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
        <p><?php
        if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
          echo '<a href="index.php" class="products">Your Account</a>';
        }
        else{
          echo '<a href="partials/_loginModal.php" data-toggle="modal" data-target="#loginModal" class="products">Your Account</a>';
        }?>
        </p>
        <p>
          <a href="contact.php" class="products">Become an Affiliate</a>
        </p>
        <p>
          <a href="about.php" class="products">About Us</a>
        </p>
        
      </div>

      <!-- Grid column -->
      <hr class="w-100 clearfix d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
        <p>
          <i class="fas fa-home mr-3"></i> Bangalore , INDIA</p>
        <p>
          <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
        <p>
          <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
        <p>
          <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
      </div>
      <!-- Grid column -->

    </div>
    <!-- Footer links -->

    <hr>

    <!-- Grid row -->
    <div class="row d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright:
            <strong> All rights reserved</strong>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
              <img src="https://cdn.icon-icons.com/icons2/1826/PNG/512/4202110facebooklogosocialsocialmedia-115707_115594.png" width="40px" height="auto" alt="Facebook">
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
              <img src="https://picklefeetgames.com/wp-content/uploads/2018/12/twitter-app-icon-transparent-17-2-300x300.png" width="40px" height="auto" alt="Twitter">
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
              <img src="https://image.flaticon.com/icons/png/512/174/174855.png" width="40px" height="auto" alt="Instagram">
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1" href="#">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Linkedin_icon.svg/600px-Linkedin_icon.svg.png" width="40px" height="auto" alt="Linked In">
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->