<?php
if (!isset($_SESSION["nguoidung"])) 
    header("location:../index.php");

require("../../model/database.php");
require("../../model/danhmuc.php");
require("../../model/mathang.php");

// Xét xem có thao tác nào được chọn
if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{   // mặc định là xem danh sách
    $action="xem";
}

$dm = new DANHMUC();
$mh = new MATHANG();
$idsua = 0;

switch($action){
    case "xem":
        $mathang = $mh->laymathang();       
        include("main.php");
        break;
     case "chitiet":
        $m = $mh->laymathangtheoid($_GET["id"]);       
        include("detail.php");
        break;
    case "them":
        $danhmuc = $dm->laydanhmuc();       
        include("add.php");
        break;
    case "xulythem":
        //xử lý load ảnh
        $hinhanh = "images/products/" .basename($_FILES["fileanh"]["name"]); // đường dẫn ảnh lưu trong db
        $duongdan = "../../" .$hinhanh; //nơi lưu file upload
        move_uploaded_file($_FILES["fileanh"]["tmp_name"], $duongdan);
        //xử lý thêm mặt hàng
        $mathangmoi = new MATHANG();
        $mathangmoi->settenmathang($_POST["txttenmathang"]);
        $mathangmoi->setmota($_POST["txtmota"]);
        $mathangmoi->setgiagoc($_POST["txtgianhap"]);
        $mathangmoi->setgiaban($_POST["txtgiaban"]);
        $mathangmoi->setsoluongton($_POST["txtsoluongton"]);
        $mathangmoi->setdanhmuc_id($_POST["optdanhmuc"]);
        $mathangmoi->sethinhanh($hinhanh);
        // thêm
        $mh->themmathang($mathangmoi);
        // load mặt hàng
        $mathang = $mh->laymathang();       
        include("main.php");
        break;
        case "xoa":
            $mhxoa = new MATHANG(); 
            $mhxoa -> setid($_GET["id"]);
            $mathang = $mh->xoamathang($mhxoa);
            $mathang = $mh->laymathang();       
            include("main.php");
            break;
        case "sua":
            $m = $mh -> laymathangtheoid($_GET["id"]);
            $mathang = $mh->laymathang();       
            include("update.php");
            break;
        case "capnhat": // lưu dữ liệu sửa mới vào db
           
            // gán dữ liệu từ form
            $mhsua = new MATHANG();
            $mhsua -> setid($_POST["txtid"]);
            $mhsua->setdanhmuc_id($_POST["danhmuc_id"]);
            $mhsua->settenmathang($_POST["txttenmathang"]);
            $mhsua->setgiaban($_POST["txtgiaban"]);
            $mhsua->setsoluongton($_POST["txtsoluongton"]);
            $mhsua->sethinhanh($_POST["img"]);

            if($_FILES["hinhanhmoi"]["name"] != ""){
             //xử lý load ảnh
             $hinhanh ="images/products/" .basename($_FILES["hinhanhmoi"]["name"]); // đường dẫn ảnh lưu trong db
             $mhsua->sethinhanh($hinhanh);
             $duongdan = "../../" .$hinhanh; //nơi lưu file upload
             move_uploaded_file($_FILES["hinhanhmoi"]["tmp_name"], $duongdan);
            }
            // sửa
            $mh->suamathang($mhsua);
            // load danh sách
            $mathang = $mh->laymathang();       
            include("main.php");
            break;
    default:
        break;
}
?>
