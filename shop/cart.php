<?php

require_once '../layout/navbar.php';
?>
<main style="width: 100vw; height: 100vh;" class="bg-white">
	<div class="container">
		<h2 class="text-black mb-4 fw-bold" style="padding-top: 70px">購物車</h2>
		<table class="table">
			<thead>
				<tr class="text-white fs-5">
					<th scope="col-3">商品</th>
					<th scope="col-3"></th>
					<th scope="col-2">數量</th>
					<th scope="col-2" style="padding-left: 30px">金額</th>

					<th scope="col-1 pe-0" style="padding-left: 41px">刪除</th>
				</tr>
			</thead>
			<tbody>
				<tr class="table" style="vertical-align: middle">
					<td class="col-3">
						<img src="../public/images/cart01.png" alt="" />
					</td>
					<td class="col-3">
						<p class="items text-black" style="font-size: 24px">
							曲棍球桿<br />
						</p>
						<p class="content text-secondary">
							Hand:Left<br />
							Family:Bauer<br />
							Gender:Unisex<br />
						</p>
					</td>
					<td class="col-2 text-center">
						<div class="quantity d-flex">
							<input class="reduce border" type="submit" value="-" onclick="fnCount('-');" style="width: 70px" />
							<input class="number border text-center" type="text" id="i_sum" name="n_sum" value="0" style="width: 48px" />
							<input class="plus border" type="submit" value="+" onclick="fnCount('+')" style="width: 48px" />
						</div>
					</td>
					<td class="col-2 fs-5 fw-bold" style="padding-left: 30px">
						$9,999
					</td>

					<td class="col-1 pe-0 offset-2" style="padding-left: 50px">
						<i class="bi bi-trash3 fs-5 "></i>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="total">
			<div class="d-flex justify-content-end" style="margin-right: 0px">
				<p class="p-2">總共　　</p>
				<h2>2</h2>
				<p class="p-2">　　項</p>
			</div>
			<div class="d-flex justify-content-end" style="margin-right: 0px">
				<p class="p-2">總金額</p>
				<h2 class="fw-bold">$19,998</h2>
			</div>
			<div class="d-flex justify-content-end">
				<button type="button" class="btn btn-dark text-white text-center" style="width: 250px; height: 50px">
					結帳
				</button>
			</div>
		</div>
	</div>
</main>
<script>
	function fnCount(oper) {
		var A = Number(i_A.value)
		var sum = Number(i_sum.value)
		if (oper == '+') {
			var myfunc = function(A) {
				return (sum = sum + A)
			}
		} else {
			var myfunc = function(A) {
				return (sum = sum - A)
			}
		}
	}
</script>
</body>

</html>