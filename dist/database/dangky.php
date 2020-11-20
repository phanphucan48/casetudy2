<?php
require_once "connect.php";
class DangkyDB extends Database
{
    public function insert($role, $name, $password, $phone)
    {
        $query = "INSERT INTO `cuahangdienthoai`.`user` ( `role`,`name`, `password`, `phone`) VALUES ( ?,?,?,?);";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $role);
        $stmt->bindValue(2, $name);
        $stmt->bindValue(3, $password);
        $stmt->bindValue(4, $phone);
        $stmt->execute();

        return true;
    }
    public function getByName($name)
    {
        $query = "SELECT * FROM cuahangdienthoai.user WHERE name = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $name);
        $stmt->execute();
        return $stmt->fetch();
    }
}
