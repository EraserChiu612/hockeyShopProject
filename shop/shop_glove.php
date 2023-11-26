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
            <h3 class="text-white fw-bolder">手套系列</h3>
            <h1 class="text-white fw-bold">SNIPER</h1>
            <div class="card-body p-0">
              <h5 class="card-title pt-1 text-white">SNIPER 給你最舒適的手感，掌心面採用止滑材質，讓您能發揮最佳表現 </h5>
              <p class="card-text text-white mt-4">規格</p>
              <div class="d-flex  flex-nowrap">
                <input type="radio" class="btn-check" name="rule" id="rule1" checked>
                <label class="btn btn-light money-box me-3 p-0" for="rule1">SENIOR <br> $8,000</label>
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
              <button type="submit" class="btn btn-orange add-to-cart text-white mt-5" name="submit" id="submit">加入購物車
              </button>
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
      <div class="col text-center text-white">輕量化設計，加上服貼的手感，SNIPER手套給您最快速的反應</div>
    </div>
    <div class="container-fluid mt-5">
      <div class="ract mx-auto"></div>
    </div>
  </div>
  <?php
  include '../layout/slider.php'
  ?>
</main>

<script>
  $(function() {
    //點擊小圖換大圖
    $("#button1").click(function() {
      $("#show").attr("src", "../public/images/gloves-1.png");
    });
    $("#button2").click(function() {
      $("#show").attr("src", "../public/images/gloves-2.png");
    });
    $("#button3").click(function() {
      $("#show").attr("src", "../public/images/gloves-3.png");
    });
    $("#button4").click(function() {
      $("#show").attr("src", "../public/images/gloves-4.png");
    });
    $("#button5").click(function() {
      $("#show").attr("src", "../public/images/gloves-5.png");
    });
  });
</script>


<?php
require_once '../layout/footer_black.php';
?>