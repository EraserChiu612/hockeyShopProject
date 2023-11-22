<?php

include_once "../layout/navbar.php";
include_once "../layout/second_navbar.php";

?>



<main>

  <div class="mt-5">
    <p class="service text-center text-white">GLOVE</p>
    <div class="hori-line-glove mb-5 mx-auto"></div>
  </div>
  <div class="contain-fluid">
    <div class="row d-flex justify-content-center">
      <div class="col-5">
        <div class="bg-light">
          <img src="../public/images/gloves-1.png" class="img-fluid" id="show" alt="">
        </div>
      </div>
      <div class="col-5">
        <form action="">
          <div class="card mb-3 h-100 card-shop">
            <h3 class="text-white">手套系列</h3>
            <h1 class="text-white">SNIPER</h1>
            <div class="card-body p-0">
              <h5 class="card-title pt-1 text-white">詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明</h5>
              <p class="card-text text-white mt-4">規格</p>
              <div class="d-flex  flex-nowrap">
                <input type="radio" class="btn-check" name="rule" id="rule1" checked>
                <label class="btn btn-light money-box me-3 p-0" for="rule1">Senior <br> $8,000</label>
                <input type="radio" class="btn-check" name="rule" id="rule2">
                <label class="btn btn-light money-box me-3 p-0" for="rule2">INTERMEDIATE <br> $8,000</label>
                <input type="radio" class="btn-check" name="rule" id="rule3">
                <label class="btn btn-light money-box me-3 p-0" for="rule3">JUNIOR <br> $8,000</label>
                <input type="radio" class="btn-check" name="rule" id="rule4">
                <label class="btn btn-light money-box me-3 p-0" for="rule4">YOUTH <br> $8,000</label>
              </div>
              <p class="card-text text-white mt-3">Size</p>
              <div class="d-flex  flex-nowrap">
                <input type="radio" class="btn-check" name="size" id="size1" checked>
                <label class="btn btn-light size-box me-3 p-0" for="size1">14</label>
                <input type="radio" class="btn-check" name="size" id="size2">
                <label class="btn btn-light size-box me-3 p-0" for="size2">15</label>

              </div>

              <p class="card-text text-white mt-3">Color</p>
              <div class="d-flex  flex-nowrap">
                <input type="radio" class="btn-check" name="color" id="color1" checked>
                <label class="btn btn-light me-3 color-button p-0" for="color1" id="button1"><img src="../public/images/gloves-1.png" class="img-fluid"></label>
                <input type="radio" class="btn-check" name="color" id="color2">
                <label class="btn btn-light me-3 color-button p-0" for="color2" id="button2"><img src="../public/images/gloves-2.png" class="img-fluid"></label>
                <input type="radio" class="btn-check" name="color" id="color3">
                <label class="btn btn-light me-3 color-button p-0" for="color3" id="button3"><img src="../public/images/gloves-3.png" class="img-fluid"></label>
                <input type="radio" class="btn-check" name="color" id="color4">
                <label class="btn btn-light me-3 color-button p-0" for="color4" id="button4"><img src="../public/images/gloves-4.png" class="img-fluid"></label>
                <input type="radio" class="btn-check" name="color" id="color5">
                <label class="btn btn-light me-3 color-button p-0" for="color5" id="button5"><img src="../public/images/gloves-5.png" class="img-fluid"></label>
              </div>
                <button type="submit" class="btn btn-info btn-lg add-to-cart text-white"  style="margin-top: 12%;" name="submit" id="submit" >ADD
                    TO CART</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container-fluid " style="margin-top: 200px">
    <div class="mt-3">
      <p class="product-intorduct text-center">產品詳細介紹</p>
      <div class="hori-line-intorduct mb-5 mx-auto"></div>
    </div>
    <div class="row flex-column">
      <div class="col text-center text-white">產品詳細介紹</div>
      <div class="col text-center text-white">產品詳細介紹產品詳細介紹</div>
      <div class="col text-center text-white">產品詳細介紹</div>
      <div class="col text-center text-white">產品詳細介紹產品詳細介紹產品詳細介紹</div>
      <div class="col text-center text-white">產品詳細介紹產品詳細介紹</div>
      <div class="col text-center text-white">產品詳細介紹產品詳細介紹</div>
    </div>
    <div class="container-fluid mt-5">
      <div class="ract mx-auto"></div>
    </div>
  </div>
  <div class="container-fluid slider-onlineshop-glove mt-5">
    <div class="w-100 mx-auto h-100">
      <div class="overflow-hidden">
        <div class="row flex-nowrap glove_left ms-2 me-2">
          <div class="col-sm-4 mt-5">
            <div class="card mb-3 bg-sec-product">
              <img src="../public/images/player1.jpg" class="card-img-top glove-position" alt="...">
            </div>
          </div>
          <div class="col-sm-4 mt-5">
            <div class="card mb-3 bg-product">
              <img src="../public/images/player2.jpg" class="card-img-top glove-position" alt="...">
            </div>
          </div>
          <div class="col-sm-4 mt-5">
            <div class="card mb-3 bg-product">
              <img src="../public/images/player3.jpg" class="card-img-top glove-position" alt="...">
            </div>
          </div>
          <div class="col-sm-4 mt-5">
            <div class="card mb-3 bg-product">
              <img src="../public/images/player4.jpg" class="card-img-top glove-position" alt="...">
            </div>
          </div>
        </div>
        <i class="bi bi-chevron-compact-left" id="glovebtnPrev"></i>
        <i class="bi bi-chevron-compact-right" id="glovebtnNext"></i>
      </div>
    </div>
  </div>
</main>


<?php
require_once '../layout/footer_black.php';
?>
