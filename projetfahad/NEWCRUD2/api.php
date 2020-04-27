<?php

//$publicite["publicite"]=$_REQUEST;


//echo json_encode($publicite,JSON_PRETTY_PRINT);













class traiter
{



    static $tabelresponse = [];


    static function handel()
    {



        traiter::$tabelresponse['request'] = $_REQUEST;


        $formulaire1 = $_REQUEST["formulaire1"] ?? "";



        if ($formulaire1 == "create") {

            traiter::creer();
        }




        if ($formulaire1 == "read") {


            traiter::lire();
        }


        echo json_encode(traiter::$tabelresponse, JSON_PRETTY_PRINT);
    }




    static function lire()
    {

        $tableauvaleur = [];



        $sqlprepare =

            <<<codesql
    
    SELECT * FROM publier
    ORDER BY id DESC
    
codesql;



        $pdostatement = Model::sendRequestsql($sqlprepare, $tableauvaleur);

        $linetable = $pdostatement->fetchAll(PDO::FETCH_ASSOC);


        traiter::$tabelresponse["tableau"] = $linetable;
    }




    static function creer()

    {





        $tableauvaleur = [


            "titre"         => $_REQUEST["titre"]  ?? "",

            "description"   => $_REQUEST["description"] ?? "",

            "image"        => $_REQUEST["image"] ?? "",
        ];


        $sqlprepare =

            <<<codesql

         INSERT  INTO `publier`

        (`id`,`titre`,`description`,`image`)

        VALUES

        (NULL,:titre,:description,:image)
              
codesql;




        Model::sendRequestsql($sqlprepare, $tableauvaleur);

        traiter::lire();
    }
}




class Model

{


    static function sendRequestsql($sqlprepare, $tableauvaleur)

    {

        $pdo = new PDO("mysql:host=localhost;dbname=newcrud;charset=utf8", "root", "");


        $pdostatement = $pdo->prepare($sqlprepare);

        $pdostatement->execute($tableauvaleur);




        return $pdostatement;
    }
}






traiter::handel();
