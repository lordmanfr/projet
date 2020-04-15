<?php
require_once "Database.php";

class Model
{
    public function getread()
    {
        $pdo = $this->getConnection();

        $query='SELECT *from todo';

        $pdostatement=$pdo->prepare($query);

        $pdostatement->execute();

        return $pdostatement->fetchall();
    }
    public function create($todo)
    {
        $pdo = $this->getConnection();
        
        $query='INSERT INTO todo (title,description) VALUES (:title,:description)';

        $pdostatement=$pdo->prepare($query);

        $pdostatement->execute($todo);

        return $pdostatement->execute($todo);

    }
    public function delete($todo)
    {
        $pdo = $this->getConnection();

        $query="DELETE FROM todo WHERE id=:id";

        $pdostatement=$pdo->prepare($query);

        $pdostatement->execute($todo);

        $values=
        [
            'id' =>$todo['id'],

        ];

        return $pdostatement->execute($values);

    }
    private function getConnection()
    {
        $db=new Database;

        return $db->connect();

    }


}
//$db=new Database();
//$db->connect();