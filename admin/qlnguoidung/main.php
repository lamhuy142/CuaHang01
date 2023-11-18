<?php include("../inc/top.php"); ?>

<p><a class="btn btn-info" href="index.php?action=them">Thêm người dùng</a></p>
<h4 class="text-info">Danh sách người dùng</h4>
<table class="table table-hover">
    <tr>
        <th>Email</th>
        <th>Số điện thoại</th>
        <th>Họ tên</th>
        <th>Loại quyền</th>
        <th>Trạng thái</th>
        <th>Khóa</th>
    </tr>
    <?php
    foreach ($nguoidung as $n) :
    ?>
        <tr>
            <td><?php echo $n["email"]; ?></td>
            <td><?php echo $n["sodienthoai"]; ?></td>
            <td><?php echo $n["hoten"]; ?></td>
            <td><?php echo $n["loai"]; ?></td>
            <td><?php echo $n["trangthai"]; ?></td>
            <td><a href="index.php?action=khoa&id=<?php echo $n['id']; ?>" class="btn btn-warning">Khóa</a></td>
        </tr>
    <?php
    endforeach;
    ?>
</table>
<?php include("../inc/bottom.php"); ?>