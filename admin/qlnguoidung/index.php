<?php
if (!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../../model/database.php");
require("../../model/nguoidung.php");
require("../../model/loaquyen.php");

// Xét xem có thao tác nào được chọn
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
} else {   // mặc định là xem danh sách
    $action = "xem";
}

$lq = new LOAIQUYEN();
$nd = new NGUOIDUNG();

switch ($action) {
    case "xem":
        $loaiquyuen = $lq->layloaiquyen();
        $nguoidung = $nd->laydanhsachnguoidung();
        include("main.php");
        break;
    case "them":
        $loaiquyuen = $lq->layloaiquyen();
        
        include("add.php");
        break;
    case "xulythem":
        //xử lý load ảnh
        $hinhanh = "images/products/" . basename($_FILES["fileanh"]["name"]); // đường dẫn ảnh lưu trong db
        $duongdan = "../../" . $hinhanh; //nơi lưu file upload
        move_uploaded_file($_FILES["fileanh"]["tmp_name"], $duongdan);
        //xử lý thêm mặt hàng
        $nguoidungmoi = new NGUOIDUNG();
        $nguoidungmoi->setemail($_POST["txtemail"]);
        $nguoidungmoi->setsodienthoai($_POST["txtsodienthoai"]);
        $nguoidungmoi->setmatkhau($_POST["txtmatkhau"]);
        $nguoidungmoi->sethoten($_POST["txthoten"]);
        $nguoidungmoi->setloai($_POST["optloaiquyen"]);
        $nguoidungmoi->settrangthai($_POST["txttrangthai"]);
        $nguoidungmoi->sethinhanh($hinhanh);
        // thêm
        $nd->themnguoidung($nguoidungmoi);
        // load sản phẩm
        $loaiquyuen = $lq->layloaiquyen();
        $nguoidung = $nd->laydanhsachnguoidung();
        include("main.php");
        break;    
    default:
        break;
}
