<?php
include("inc/top.php");
?>
<?php
foreach ($phanloai as $l) {
    $i = 0;
?>
    <h3><a class="text-decoration-none text-info" href="index.php?action=group&id=<?php echo $l["id"]; ?>">
            <?php echo $l["tenpl"]; ?></a></h3>
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php
        foreach ($sanpham as $s) {
            if ($s["phanloaisp"] == $l["id"] && $i < 4) {
                $i++;
        ?>
                <div class="col mb-5">
                    <div class="card h-100 shadow">
                        <!-- Sale badge-->
                        <?php if ($s["giaban"] != $s["giagoc"]) { ?>
                            <div class="badge bg-danger text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Giảm giá</div>
                        <?php } // end if 
                        ?>
                        <!-- Product image-->
                        <a href="index.php?action=detail&id=<?php echo $s["id"]; ?>">
                            <img style=" height:250px; " class="card-img-top" src="../<?php echo $s["hinhanh"]; ?>" alt="<?php echo $s["tensp"]; ?> " />
                        </a>
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <a class="text-decoration-none" href="index.php?action=detail&id=<?php echo $s["id"]; ?>">
                                    <h5 class="fw-bolder text-info"><?php echo $s["tensp"]; ?></h5>
                                </a>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <?php if ($s["giaban"] != $s["giagoc"]) { ?>
                                    <span class="text-muted text-decoration-line-through"><?php echo number_format($s["giagoc"]); ?>đ</span><?php } // end if 
                                                                                                                                            ?>
                                <span class="text-danger fw-bolder"><?php echo number_format($s["giaban"]); ?>đ</span>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <form method="post">
                                    <input type="hidden" name="action" value="chovaogio">
                                    <input type="hidden" name="id" value="<?php echo $s["id"]; ?>">
                                    <input class="form-control  btn btn-outline-info mt-auto" type="submit" name="btnchonmua" value="Chọn mua">
                                </form>
                                <!-- <a class="btn btn-outline-info mt-auto" href="index.php?action=chovaogio&id=<php echo $s["id"]; ?>&soluong=1">
                                    Chọn mua</a> -->
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }
        }
        ?>

    </div>
    <?php
    if ($i == 0)
        echo "<p>Danh mục hiện chưa có sản phẩm.</p>";
    else
    ?>
    <div class="text-end mb-2"><a class="text-warning text-decoration-none fw-bolder" href="index.php?action=group&id=<?php echo $l["id"]; ?>">Xem thêm <?php echo $l["tenpl"]; ?></a></div>
<?php
}
?>

<?php
include("inc/bottom.php");
?>