<?php

require_once 'config.php';

class Database
{

    // on déclare les propriété
    private $dsn;
    private $username;
    private $pwd;
    private $options;

    //objet PDO
    public $conn;

    // on déclare les méthodes
    // ref sur les constructeurs : https://www.w3schools.com/php/php_oop_constructor.asp
    public function __construct()
    {
        // ici on va set les propriétés de la classe avec les valeurs de notre config
        $this->dsn = DSN;
        $this->username = USERNAME;
        $this->pwd = PDW;
        $this->options = OPTIONS;
    }
    /*EXP
       class User
{
    public $name;
    public $address;
    public $country;

    // méthodes
    public function __construct($name, $address, $country)
    {
        $this->name = $name;
        $this->address = $address;
        $this->country = $country;
    }
}

$user1 = new User('lionel', 'Marseille', 'France');
$name = $user1->name;

       
           */
    public function connect()
    {
        try {
            //  stocker dans la propriété de classe conn une nouvelle instance de l'objet PDO
            $this->conn = new PDO($this->dsn, $this->username, $this->pwd, $this->options);
        } catch (PDOException $error) {
            echo 'Error : ' . $error->getMessage();
        }
        return $this->conn;
    }
}
