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

<script>
var select4 = 0;
var sel_val4 = 0;
$(document).ready(function () {
  //function不能去設fnchange(參數)，因此寫法只能這樣寫
        $("#glovebtnPrev").on("click",glovebtnPrev);
        // 按下往右鈕執行fnNext函式
        $("#glovebtnNext").on("click",glovebtnNext);
})

function glovebtnPrev() {
  //往右捲動動畫
  if (select4 != 0) {
    select4 -= 1;
    sel_val4 += 450;
    $(".glove_left").css("left", sel_val4 + "px");
  }
}
// 往右鈕事件處理函式
function glovebtnNext() {
  //往左捲動動畫
  if(select4 < 1){
    select4 += 1;
    sel_val4 -= 450;
  $(".glove_left").css("left", sel_val4 + "px");
  }
}

</script>