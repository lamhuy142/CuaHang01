<?php include("../inc/top.php"); ?>

<h4 class="text-info">CHI TIẾT SẢN PHẨM</h4> 
<h3><?php echo $sp["tensp"]?></h3>
<img width="400px" src="../../<?php echo $sp["hinhanh"]; ?>">
<p><strong class="text-info">Mô tả : </strong><br><?php echo $sp["mota"];?></p>
<p><strong class="text-info">Gía gốc : </strong><?php echo $sp["giagoc"];?></p>
<p><strong class="text-info">Gía bán : </strong><?php echo $sp["giaban"];?></p>
<p><strong class="text-info">Số lượng tồn : </strong><?php echo $sp["soluongton"];?></p>
<p><strong class="text-info">Lượt xem : </strong><?php echo $sp["luotxem"];?></p>
<p><strong class="text-info">Lượt mua : </strong><?php echo $sp["luotmua"];?></p>
		
	
<?php include("../inc/bottom.php"); ?>
