<?php
require_once "common.php";
require_once "connect.php";
if (isset($_SESSION['user'])) {
   header("Location:login.php");
}
class Login extends Database
{
   public function getAll()
   {
      $sql = "SELECT * FROM cuahangdienthoai.user";
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      return $stmt->fetchAll();
   }
}
