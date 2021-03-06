<?php 
    
class db {
    private $servername = 'localhost';
    private $dbname = 'payroll';
    private $password = "";
    private $user = "root";

    function __construct()
    {
        $this->conn = $this->connect();
    }

    protected function connect(){
            $dsn  = "mysql:host={$this->servername};dbname={$this->dbname}";
            $conn = new PDO($dsn,$this->username,$this->password);
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
    }

}

?>