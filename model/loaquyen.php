<?php
class LOAIQUYEN
{
    private $id;
    private $tenquyen;

    public function getid()
    {
        return $this->id;
    }

    public function setid($value)
    {
        $this->id = $value;
    }

    public function gettenquyen()
    {
        return $this->tenquyen;
    }

    public function settenquyen($value)
    {
        $this->tenquyen = $value;
    }

    // Lấy danh sách
    public function layloaiquyen()
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "SELECT * FROM loaiquyen";
            $cmd = $dbcon->prepare($sql);
            $cmd->execute();
            $result = $cmd->fetchAll();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }


    // Lấy danh mục theo id
    public function layloaiquyentheoid($id)
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "SELECT * FROM loaiquyen WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $id);
            $cmd->execute();
            $result = $cmd->fetch();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Thêm mới
    public function themloaiquyen($loaiquyen)
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "INSERT INTO loaiquyen(tenquyen) VALUES(:tenquyen)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tenquyen", $loaiquyen->tenquyen);
            $result = $cmd->execute();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Xóa 
    public function xoaloaiquyen($loaiquyen)
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "DELETE FROM loaiquyen WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $loaiquyen->id);
            $result = $cmd->execute();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Cập nhật 
    public function sualoaiquyen($loaiquyen)
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "UPDATE loaiquyen SET tenquyen=:tenquyen WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tenquyen", $loaiquyen->tenquyen);
            $cmd->bindValue(":id", $loaiquyen->id);
            $result = $cmd->execute();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
}
