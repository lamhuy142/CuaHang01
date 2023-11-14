<?php include("../inc/top.php"); ?>

    <form method="post" enctype="multipart/form-data" action="index.php">
    <input type="hidden" name="action" value="capnhat">
    <input type="hidden" name="txtid" value="<?php echo $m['id']?>">
    <input type="hidden" name="danhmuc_id" value="<?php echo $m['danhmuc_id']?>">
        <div class="md-3 mt-3">	
            <label for="txttenmathang" class="form-label">Tên mặt hàng</label>
            <input class="form-control" type="text" name="txttenmathang" value="<?php echo $m['tenmathang']; ?>">
        </div>
        <div class="md-3 mt-3">	
            <label for="txtgiaban" class="form-label">Gía bán</label>
            <input class="form-control" type="number" name="txtgiaban" value="<?php echo $m['giaban']; ?>">
        </div>
        <div class="md-3 mt-3">	
            <label for="txtsoluongton" class="form-label">Số lượng</label>
            <input  class="form-control" type="number" name="txtsoluongton" value="<?php echo $m['soluongton']; ?>"></input>
        </div>
        <div class="md-3 mt-3">	
            <label>Hình ảnh</label>
            <input type="hidden" class="form-control" name="img" value="<?php echo $m['hinhanh']?>"></input> 
            <img src="../../<?php echo $m['hinhanh']?>" width="50px" class="img-thumnail" alt="" >
            <input type="file" name="hinhanhmoi" id="" >
        </div>
        <div class="md-3 mt-3">	
            <input type="submit" value="Lưu" class="btn btn-success"></input> 
            <input type="reset" value="Hủy" class="btn btn-warning"></input> 
        </div>
    </form>

<?php include("../inc/bottom.php"); ?>
