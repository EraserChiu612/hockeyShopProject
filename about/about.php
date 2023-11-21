<?php
include_once "../layout/navbar.php";
?>
<main>
  <div class="container">
    <!-- <div class="about-us">
      <img src="./images/about.jpg" alt="">
    </div>
    <div class="about-us-text">
      <p class="p-text">ABOUT US</p>
      <p class="p-text-small">Our purpose is to give you<br>
        the best equipment at the<br>
        best price.</p>
    </div>
    <div class="our-service">
      <p class="service">OUR SERVICE</p>
      <div class="hori-line">-</div>
    </div>
  </div> -->
    <div class="row mt-5 mb-5">
      <div class="col-6">
        <img src="../public/images/about.jpg" alt="" class="img-about">
      </div>
      <div class="col-6">
        <p class="p-text">ABOUT US</p>
        <p class="p-text-small">Our purpose is to give you<br>
          the best equipment at the<br>
          best price.</p>
      </div>
    </div>
    <div class="mt-3">
      <p class="service text-center">OUR SERVICE</p>
      <div class="hori-line mb-3 mx-auto"></div>
    </div>
  </div>
  <div class="container mb-5 mt-5">
    <div class="row">
      <div class="col-6">
        <img src="../public/images/about.jpg" alt="" class="w-100">
      </div>
      <div class="col-6">
        <div class="GEAR">GEAR</div>
        <div class="rect-gear"></div>
      </div>
    </div>
  </div>
  <div class="container mb-5 mt-5">
    <div class="row">
      <div class="col-6">
        <div class="TEAM">TEAM</div>
        <div class="rect-team"></div>
      </div>
      <div class="col-6">
        <img src="../public/images/about.jpg" alt="" class="w-100">
      </div>
    </div>
  </div>
  <div class="container mb-5 mt-5">
    <div class="row">
      <div class="col-6">
        <img src="../public/images/about.jpg" alt="" class="w-100">
      </div>
      <div class="col-6">
        <div class="customize">CUSTOMIZE</div>
        <div class="rect-customize"></div>
      </div>
    </div>
  </div>
</main>
<?php
require_once '../layout/footer.php';
?>