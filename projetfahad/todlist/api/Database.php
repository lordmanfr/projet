<?php

require_once "config.php";

class Database 
{
    public $conn;


    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn=Dsn;
        $this->username=Username;
        $this->password=Password;

    }
    public function connect()
    {
        try
        {
            $this->conn=new PDO($this->dsn,$this->username,$this->password);

            echo"you";

        }
        catch(PDOException $error)
        {
            echo'error :'.$error->getMessage();

        }
        return $this->conn;
        

    }


}
 // $db=new Database();
 // $db->connect();