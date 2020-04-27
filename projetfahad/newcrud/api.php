<?php

//$publicite["publicite"]=$_REQUEST;


//echo json_encode($publicite,JSON_PRETTY_PRINT);

class traiter
{
    static $table1response = [];
    static function handel()
    {
        traiter::$table1response['request'] = $_REQUEST;
        $formulaire1 = $_REQUEST['formulaire1'] ?? "";

        if ($formulaire1 == "create") {
            traiter::creer();
        }

        if ($formulaire1 == "read") {
            traiter::lire();
        }
        echo json_encode(traiter::$table1response, JSON_PRETTY_PRINT);
    }


    static function creer()
    {
        $tableauvaleur =
            [
                "titre" => $_REQUEST["titre"] ?? "",
                "description" => $_REQUEST["description"] ?? "",
                "image" => $_REQUEST["image"] ?? "",

            ];
        $sqlprepare =
<<<CODESQL

INSERT INTO `publier` 
(`id`, `titre`, `description`, `image`) 
VALUES 
(NULL, :titre, :description, :image );
            

CODESQL;
        Model::envoyerRequeteSQL($sqlprepare, $tableauvaleur);
        traiter::lire();
    }

    static function lire()
    {
        $tableauvaleur = [];


        $sqlprepare =
<<<CODESQL
        SELECT * FROM publier

        ORDER BY id DESC


CODESQL;


        $pdoStatement = Model::envoyerRequeteSQL($sqlprepare, $tableauvaleur);
        $tabAssoLigne = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);
        traiter::$table1response["tableau"] = $tabAssoLigne;
       
    }
}
class Model
{
    static function envoyerRequeteSQL($sqlprepare, $tableauvaleur)
    {
        $pdo = new PDO("mysql:host=localhost;dbname=newcrud;charset=utf8", "root", "");
        $pdoStatement = $pdo->prepare($sqlprepare);
        $pdoStatement->execute($tableauvaleur);

        return $pdoStatement;
    }
}
traiter::handel();
