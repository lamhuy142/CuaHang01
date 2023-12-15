<?php include("../inc/top.php"); ?>
<div class="mb-3 row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input type="text" readonly class="form-control-plaintext" id="email" name="email" value="">
    </div>
</div>
<div class="mb-3 row">
    <label for="matkhau" class="col-sm-2 col-form-label">Mật khẩu</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="matkhau" name="matkhau">
    </div>
</div>
<div class="mb-3 row">
    <label for="xacnhanmk" class="col-sm-2 col-form-label">Xác nhận mật khẩu</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="xacnhanmk" name="xacnhanmk">
    </div>
</div>
<?php include("../inc/bottom.php"); ?>