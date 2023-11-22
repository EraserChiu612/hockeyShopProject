<?php

require_once '../layout/navbar.php';
?>
    <main style="width: 99vw; height: 98vh;" class="bg-white">
    <div class="container">
        <h2 class="text-black mb-4 fw-bold" style="padding-top: 70px;">結帳頁</h2>
        <div class="row align-items-start">
            <div class="col-7">
                <div class=" bg-black text-white" style="height: 58px; font-size: 20px; padding: 16px 0px 0px 22px;">
                    收貨資料
                </div>
                <div class="border " style="padding: 22px;">
                    <div>
                        <p>選擇付費方式</p>
                        <div class="d-flex">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    貨到付款　
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    線上刷卡　
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2" checked>
                                <label class="form-check-label" for="flexRadioDefault2">
                                    匯款轉帳　
                                </label>
                            </div>
                        </div> <br>
                    </div>
                    <div>
                        <p>訂購人資料</p>
                        <div>
                            <div class="mb-2">
                                <label for="name" class="form-label">姓名</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                            <div class="mb-2">
                                <label for="phone" class="form-label">電話</label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                            <div class="mb-2">
                                <label for="email" class="form-label">信箱</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com">
                            </div>
                            <div class="mb-2">
                                <label for="address" class="form-label">地址</label>
                                <input type="email" class="form-control" id="address">
                            </div>
                            <div class="mb-2">
                                <label for="Remark" class="form-label">備註</label>
                                <textarea class="form-control" id="Remark" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5 bill-note">
                <div class=" text-black"
                    style="background-color: rgb(217, 217, 217); height: 58px; font-size: 20px; padding: 16px 0px 0px 22px;">
                    訂單摘要
                </div>
                <div class="border" style="padding: 22px 22px 0px 22px;">
                    <div class="d-flex justify-content-between">
                        <p>合計</p>
                        <p>NT$9,999</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>宅配</p>
                        <p>NT$100</p>
                    </div>
                    <div class="d-flex fw-bold justify-content-between">
                        <p>訂單總額</p>
                        <p>NT$10,099</p>
                    </div>
                </div>
                <div class="text-black"
                    style="background-color: rgb(217, 217, 217); height: 58px; font-size: 20px; padding: 16px 0px 0px 22px;">
                    訂單產品
                </div>
                <div class="border" style="padding: 22px 22px 0px 22px;">
                    <div class="d-flex">
                        <div class="col-4"><img src="../public/images/cart01.png" alt="" style="width: 160px;"></div>
                        <div class="col-1"></div>
                        <div class="col-4">
                            <p class="items text-black">曲棍球桿<br></p>
                            <p class="content text-secondary">Hand:Left<br>
                                Family:Bauer<br>
                                Gender:Unisex<br></p>
                        </div>
                    </div>
                    <div class="price d-flex justify-content-end">
                        <p class="fw-bold">NT$9,999</p>
                    </div>
                </div>
                <div class="check d-flex justify-content-center" style=" padding-top: 20px;">
                    <button type="button" class="btn btn-dark text-white text-center"
                        style="width: 250px; height:50px; vertical-align: middle;">確認購買</button>
                </div>
            </div>
        </div>
    </div>
    </main>


<?php
require_once '../layout/footer_black.php';
?>