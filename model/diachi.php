<?php
class DIACHI
{
    private $id;
    private $nguoidung_id;
    private $diachi;
    private $macdinh;

    public function getid()
    {
        return $this->id;
    }

    public function setid($value)
    {
        $this->id = $value;
    }

    public function getnguoidung_id()
    {
        return $this->nguoidung_id;
    }

    public function setnguoidung_id($value)
    {
        $this->nguoidung_id = $value;
    }
    public function getdiachi()
    {
        return $this->diachi;
    }

    public function setdiachi($value)
    {
        $this->diachi = $value;
    }
    public function getmacdinh()
    {
        return $this->macdinh;
    }

    public function setmacdinh($value)
    {
        $this->macdinh = $value;
    }

    // Lấy danh sách
    public function laydiachi()
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "SELECT * FROM diachi";
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
    public function laydiachitheoid($id)
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "SELECT * FROM diachi WHERE id=:id";
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
    public function layidtheodiachi($diachi)
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "SELECT id FROM diachi WHERE diachi=:diachi";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":diachi", $diachi);
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
    public function themdiachi($diachimoi)
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "INSERT INTO diachi(nguoidung_id,diachi,macdinh) VALUES(:nguoidung_id,:diachi,:macdinh)";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":nguoidung_id", $diachimoi->nguoidung_id);
            $cmd->bindValue(":diachi", $diachimoi->diachi);
            $cmd->bindValue(":macdinh", $diachimoi->macdinh);
            $result = $cmd->execute();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Xóa 
    public function xoadiachi($diachi)
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "DELETE FROM diachi WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":id", $diachi->id);
            $result = $cmd->execute();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
    // Cập nhật 
    public function suadiachi($diachi)
    {
        $dbcon = DATABASE::connect();
        try {
            $sql = "UPDATE diachi SET tendiachi=:tendiachi WHERE id=:id";
            $cmd = $dbcon->prepare($sql);
            $cmd->bindValue(":tendiachi", $diachi->tendiachi);
            $cmd->bindValue(":id", $diachi->id);
            $result = $cmd->execute();
            return $result;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Lỗi truy vấn: $error_message</p>";
            exit();
        }
    }
}
