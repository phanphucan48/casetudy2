<?php
require_once "connect.php";
// require_once "../action/search.php";
class Product extends Database
{
    public function showProduct()
    {
        $query = "SELECT * FROM cuahangdienthoai.product LIMIT 8;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getAll()
    {
        $query = "SELECT * FROM cuahangdienthoai.product;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function iphone()
    {
        $query = "SELECT * FROM cuahangdienthoai.product where idbrank = 1;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function samsung()
    {
        $query = "SELECT * FROM cuahangdienthoai.product where idbrank = 2;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function oppo()
    {
        $query = "SELECT * FROM cuahangdienthoai.product where idbrank = 3;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function search($keyword)
    {
        $query = "SELECT * FROM cuahangdienthoai.product where ProductName LIKE  '%$keyword%';";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
        // die(var_dump($query));
    }
    public function price1()
    {
        $query = "SELECT * FROM cuahangdienthoai.product where price <10000000;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function price2()
    {
        $query = "SELECT * FROM cuahangdienthoai.product where price >=10000000 and price <=20000000;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function price3()
    {
        $query = "SELECT * FROM cuahangdienthoai.product where price >=20000000 and price <=30000000;";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getById($id)
    {
        // $query = "SELECT * FROM customers WHERE id = ?";
        $query = "SELECT * FROM cuahangdienthoai.product where idProduct = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(1, $id);

        $stmt->execute();

        return $stmt->fetch();
    }
}
