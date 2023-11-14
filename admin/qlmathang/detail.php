<?php include("../inc/top.php"); ?>

<h4 class="text-info">CHI TIẾT MẶT HÀNG</h4> 
<h3><?php echo $m["tenmathang"]?></h3>
<img width="400px" src="../../<?php echo $m["hinhanh"]; ?>">
<p><strong class="text-info">Mô tả : </strong><br><?php echo $m["mota"];?></p>
<p><strong class="text-info">Gía gốc : </strong><?php echo $m["giagoc"];?></p>
<p><strong class="text-info">Gía bán : </strong><?php echo $m["giaban"];?></p>
<p><strong class="text-info">Số lượng tồn : </strong><?php echo $m["soluongton"];?></p>
<p><strong class="text-info">Lượt xem : </strong><?php echo $m["luotxem"];?></p>
<p><strong class="text-info">Lượt mua : </strong><?php echo $m["luotmua"];?></p>
		
	
<?php include("../inc/bottom.php"); ?>
