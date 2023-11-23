<?php include("inc/top.php"); ?>
<div class="row ">
    <h3 class="text-dark text-left">Vui lòng nhập đầy đủ thông tin</h3>
    <div class="col-6 ">
        <div class="card-header">
            <h4 class="text-info text-left">Thông tin khách hàng</h4>
        </div>
        <div class="card-body">
            <form method="post" enctype="multipart/form-data" action="index.php">
                <input type="hidden" name="txtid" value="<?php echo $_SESSION['nguoidung']['id']; ?>">
                <input type="hidden" name="action" value="htdonhang">
                <div class="my-3 mt-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="txtemail" value="<?php echo $_SESSION['nguoidung']['email']; ?>" required>
                </div>
                <div class="my-3">
                    <label for="pwd" class="form-label">Số điện thoại:</label>
                    <input type="number" class="form-control" id="sdt" placeholder="Số điện thoại" name="txtsdt" value="<?php echo $_SESSION['nguoidung']['sodienthoai']; ?>" required>
                </div>
                <div class="my-3">
                    <label for="pwd" class="form-label">Họ tên:</label>
                    <input type="text" class="form-control" id="hoten" placeholder="Họ tên" name="txthoten" value="<?php echo $_SESSION['nguoidung']['hoten']; ?>" required>
                </div>
                <div class="my-3">
                    <label for="pwd" class="form-label">Địa chỉ:</label>
                    <input type="text" class="form-control" id="diachi" placeholder="Nhập địa chỉ" name="txtdiachi" required>
                </div>
                <div class="my-3 text-left">
                    <input class="btn btn-primary" type="submit" value="Hoàn tất đơn hàng">
                </div>
            </form>
        </div>
    </div>
    <div class="col-6">
        <div class="card-header">
            <h4 class="text-info text-left">Thông tin đơn hàng</h4>
        </div>
        <div class="card-body">
            <table class="table table-sm ">
                <tr>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                </tr>
                <tr>
                    <td><?php echo $_SESSION["giohang"]["hinhanh"].''.$_SESSION["giohang"]["tensp"] ; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<?php include("inc/bottom.php"); ?>