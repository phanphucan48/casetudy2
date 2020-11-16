<?php
    $host = 'localhost';
    $dbname = 'cuahangdienthoai';
    $user = 'root';
    $password = 'phucan48';
    $dns = 'mysql:host=' . $host . ';dbname=' . $dbname;

    $pdo = new PDO($dns, $user, $password);
