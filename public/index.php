<?php 
require("../model/database.php");
require("../model/phanloai.php");
require("../model/sanpham.php");


$pl = new PHANLOAI();
$phanloai = $pl->layphanloai();
$sp = new SANPHAM();
$sanphamxemnhieu = $sp->laysanphamxemnhieu();

if(isset($_REQUEST["action"])){
    $action = $_REQUEST["action"];
}
else{
    $action="null"; 
}


switch($action){
    case "null": 	
    	$sanpham = $sp->laysanpham();	
        include("main.php");
        break;
    case "group": 
        if(isset($_REQUEST["id"])){
            $mapl = $_REQUEST["id"];
            $pluc = $pl->layphanloaitheoid($mapl);
            $tenpl =  $pluc["tenpl"];   
            $sanpham = $sp->laysanphamtheophanloai($mapl);
            include("group.php");
        }
        else{
            include("main.php");
        }
        break;
    case "detail": 
        if(isset($_GET["id"])){
            $id_sp = $_GET["id"];
            // tăng lượt xem lên 1
            $sp->tangluotxem($id_sp);
            // lấy thông tin chi tiết mặt hàng
            $spct = $sp->laysanphamtheoid($id_sp);
            // lấy các mặt hàng cùng danh mục
            $mapl = $spct["phanloaisp"];
            $sanpham = $sp->laysanphamtheophanloai($mapl);
            include("detail.php");
        }
        break;

    default:
        break;
}
?>
