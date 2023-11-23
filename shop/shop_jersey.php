<?php
include_once "../layout/navbar.php";
include_once "../layout/second_navbar.php";
?>
    <main>
        <div class="mt-5">
            <p class="service text-center text-white">JERSEY</p>
            <div class="hori-line-jersey mb-5 mx-auto"></div>
        </div>
        <div class="contain-fluid" style="height: 500px;">
            <div class="row d-flex justify-content-center">
                <div class="col-5">
                    <div class="bg-light">
                        <img src="../public/images/jersey.png" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col-5">
                    <form action="">
                        <div class="card mb-3 h-100 card-shop">
                            <h3 class="text-white">練習球衣</h3>
                            <h1 class="text-h1 text-white">JERSEY</h1>
                            <div class="card-body p-0">
                                <h5 class="card-title pt-1 text-white">
                                    詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明詳細說明</h5>
                                <p class="card-text text-white margin-jersey">Color</p>
                                <div class="d-flex  flex-nowrap">
                                    <input type="radio" class="btn-check" name="color2" id="color2_1" checked>
                                    <label class="btn box-black p-0" for="color2_1"></label>
                                    <input type="radio" class="btn-check" name="color2" id="color2_2">
                                    <label class="btn box-white p-0" for="color2_2"></label>
                                    <input type="radio" class="btn-check" name="color2" id="color2_3">
                                    <label class="btn box-gray p-0" for="color2_3"></label>
                                    <input type="radio" class="btn-check" name="color2" id="color2_4">
                                    <label class="btn box-navy p-0" for="color2_4"></label>
                                    <input type="radio" class="btn-check" name="color2" id="color2_5" >
                                    <label class="btn box-red p-0" for="color2_5"></label>
                                </div>
                                <div>
                                    <p class="card-text text-white margin-jersey">Size</p>
                                    <div class="d-flex  flex-nowrap">
                                        <input type="radio" class="btn-check" name="size2" id="size2_1" checked>
                                        <label class="btn btn-light size-box me-3 p-0" for="size2_1">S</label>
                                        <input type="radio" class="btn-check" name="size2" id="size2_2">
                                        <label class="btn btn-light size-box me-3 p-0" for="size2_2">M</label>
                                        <input type="radio" class="btn-check" name="size2" id="size2_3">
                                        <label class="btn btn-light size-box me-3 p-0" for="size2_3">L</label>
                                        <input type="radio" class="btn-check" name="size2" id="size2_4">
                                        <label class="btn btn-light size-box me-3 p-0" for="size2_4">XL</label>
                                    </div>
                                    <button type="submit" class="btn btn-info btn-lg add-to-cart text-white" name="submit" id="submit" style="margin-top: 12%;" >ADD
                                        TO CART</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 300px">
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
        <div class="container-fluid slider-onlineshop-jersey mt-5">
            <div class="w-100 mx-auto h-100">
                <div class="overflow-hidden">
                    <div class="row flex-nowrap jersey_left ms-2 me-2">
                        <div class="col-sm-4 mt-5">
                            <div class="card mb-3 bg-sec-product">
                                <img src="../public/images/player1.jpg" class="card-img-top jersey-position" alt="...">
                            </div>
                        </div>
                        <div class="col-sm-4 mt-5">
                            <div class="card mb-3 bg-product">
                                <img src="../public/images/player2.jpg" class="card-img-top jersey-position" alt="...">
                            </div>
                        </div>
                        <div class="col-sm-4 mt-5">
                            <div class="card mb-3 bg-product">
                                <img src="../public/images/player3.jpg" class="card-img-top jersey-position" alt="...">
                            </div>
                        </div>
                        <div class="col-sm-4 mt-5">
                            <div class="card mb-3 bg-product">
                                <img src="../public/images/player4.jpg" class="card-img-top jersey-position" alt="...">
                            </div>
                        </div>
                    </div>
                    <i class="bi bi-chevron-compact-left" id="jerseybtnPrev"></i>
                    <i class="bi bi-chevron-compact-right" id="jerseybtnNext"></i>
                </div>
            </div>
        </div>
    </main>


<?php
require_once '../layout/footer_black.php';
?>