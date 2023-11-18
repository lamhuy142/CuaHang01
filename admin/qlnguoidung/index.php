<?php
if (!isset($_SESSION["nguoidung"]))
    header("location:../index.php");

require("../../model/database.php");
require("../../model/nguoidung.php");

// Xét xem có thao tác nào được chọn
if (isset($_REQUEST["action"])) {
    $action = $_REQUEST["action"];
} else {   // mặc định là xem danh sách
    $action = "xem";
}

$nd = new NGUOIDUNG();

switch ($action) {
    case "xem":
        $nguoidung = $nd->laydanhsachnguoidung();
        include("main.php");
        break;
    
    default:
        break;
}
