<?php include("../inc/top.php"); ?>

<p><a class="btn btn-info" href="index.php?action=them" >Thêm mặt hàng</a></p>
<h4 class="text-info">Danh sách mặt hàng</h4> 
<table class="table table-hover">
	<tr><th>Tên mặt hàng</th><th>Gía bán</th><th>Số lượng</th><th>Hình ảnh</th><th>Sửa</th><th>Xóa</th></tr>
	<?php 
	foreach ($mathang as $m) :
	?>
		<tr>
			<td>
				<a href="index.php?action=chitiet&id=<?php echo $m['id']; ?>">
				<?php echo $m["tenmathang"]; ?>
				</a>
			</td>
			<td><?php echo number_format($m["giaban"]); ?></td>
			<td><?php echo $m["soluongton"]; ?></td>
			<td>
				<a href="index.php?action=chitiet&id=<?php echo $m['id']; ?>">
				<img width="40px" class="thumnail" src="..\..\<?php echo $m['hinhanh']; ?>">
				</a>
			</td>
			<td><a href="index.php?action=sua&id=<?php echo $m['id']; ?>" class="btn btn-warning">Sửa</a></td>
			<td><a href="index.php?action=xoa&id=<?php echo  $m['id']; ?>" class="btn btn-danger">Xóa</a></td>
		</tr>
	<?php 
	endforeach; 
	?>
</table>
<?php include("../inc/bottom.php"); ?>
