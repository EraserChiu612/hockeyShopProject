<?php
include_once "../layout/navbar.php";
?>
  <main>
    <div class="container-fluid">
      <div class="new-product"></div>
      <h1 class="text-white product-text mx-auto mb-5">最新商品</h1>
      <div class="product-text-line mx-auto"></div>
    </div>
    <!-- <div class="col-sm-4 mt-5">
            <div class="card mb-3">
              <div class="card-body bg-img">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div> -->
    <div class="container-fluid slider-position">
      <div class="w-100 mx-auto h-100">
        <div class="overflow-hidden">
          <div class="row flex-nowrap left ms-2 me-2">

            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-product">
                <img src="../public/images/player1.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-orange text-white">SAVE NOW</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-product">
                <img src="../public/images/player2.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-orange text-white">SAVE NOW</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-product">
                <img src="../public/images/player3.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-orange text-white">SAVE NOW</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-product">
                <img src="../public/images/player4.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-orange text-white">SAVE NOW</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-product">
                <img src="../public/images/player5.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-orange text-white">SAVE NOW</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-product">
                <img src="../public/images/player6.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-orange text-white">SAVE NOW</button>
                </div>
              </div>
            </div>
          </div>
          <i class="bi bi-chevron-compact-left" id="btnPrev"></i>
          <i class="bi bi-chevron-compact-right" id="btnNext"></i>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <h1 class="text-white product-text mx-auto">全產品</h1>
      <div class="all-product-text-line mx-auto"></div>
    </div>
    <div class="container-fluid slider2-position">
      <div class="w-100 mx-auto h-100">
        <div class="overflow-hidden">
          <div class="row flex-nowrap sec_left ms-2 me-2">
            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-sec-product">
                <img src="../public/images/player1.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-opacity text-white">球桿一代</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-product">
                <img src="../public/images/player2.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-opacity text-white ">球桿二代</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-product">
                <img src="../public/images/player3.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-opacity text-white">手套</button>
                </div>
              </div>
            </div>
            <div class="col-sm-4 mt-5">
              <div class="card mb-3 bg-product">
                <img src="../public/images/player4.jpg" class="card-img-top img-position" alt="...">
                <div class="card-body mx-auto mt-3">
                  <button class="btn btn-opacity text-white">球衣</button>
                </div>
              </div>
            </div>
          </div>
          <i class="bi bi-chevron-compact-left" id="secbtnPrev"></i>
          <i class="bi bi-chevron-compact-right" id="secbtnNext"></i>
        </div>
      </div>
    </div>
    <div class="container-fluid body-height">
      <h1 class="text-white product-text mx-auto mb-5">客製化服務</h1>
      <div class="body-product-text-line mx-auto"></div>
      <div class="row">
        <div class="col-6">
          <div class="card bg-dark text-white ">
            <img src="../public/images/Rectangle 27.png" class="card-img w-100" alt="...">
            <div class="card-img-overlay stick">
              <h5 class="card-title card-title-body">客製化球桿</h5>
              <div class="row">
                <div class="col-6">
                  <p class="card-text card-title-text">客製化球桿部分<br>1.姓名&nbsp;2.號碼&nbsp;3.球隊&nbsp;4.LOGO</p>
                </div>
                <div class="col-6">
                  <a href="" class="btn btn-outline-light text-white card-title-btn ms-3">線上詢價</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card bg-dark text-white">
            <img src="../public/images/Rectangle 43.png" class="card-img" alt="...">
            <div class="card-img-overlay">
              <div class="card-img-overlay stick">
                <h5 class="card-title card-title-body">客製化裝備
                </h5>
                <div class="row">
                  <div class="col-6">
                    <p class="card-text card-title-text">客製化裝備部分<br>1.手套&nbsp;2.號碼&nbsp;3.球隊配色&nbsp;4.姓名</p>
                  </div>
                  <div class="col-6">
                    <a href="" class="btn btn-outline-light text-white card-title-btn ms-3">線上詢價</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php
  require_once '../layout/footer.php';
  ?>