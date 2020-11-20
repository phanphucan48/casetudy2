
<?php
$host = 'localhost';
$dbname = 'cuahangdienthoai';
$user = 'root';
$password = 'phucan48';
$dns = 'mysql:host=' . $host . ';dbname=' . $dbname;

$pdo = new PDO($dns, $user, $password);


class Database
{
    private const DBHOST = 'localhost';
    private const DBNAME = 'cuahangdienthoai';
    private const DBUSER = 'root';
    private const DBPASS = 'phucan48';

    private $dsn = 'mysql:host=' . self::DBHOST . ';dbname=' . self::DBNAME . '';
    protected $conn = null;

    public function __construct()
    {
        try {
            $this->conn = new PDO($this->dsn, self::DBUSER, self::DBPASS);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'ERROR!';
            print_r($e);
        }
    }
}
