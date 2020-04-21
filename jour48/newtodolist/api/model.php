<?php

// on a besoin d'une conncetion à la bdd
require_once 'database.php';

// on a besoin d'une classe qui va gérer les interactions avec la bdd
//CRUD

class Model
{
    public function getTodos()
    {
        $pdo = $this->getConnection();

        $query = 'SELECT * FROM todos'; // ceci est juste une chaîne de caractères

        $PdoStatement = $pdo->prepare($query);

        $PdoStatement->execute();

        // debug : affichage du résultat
      //  print_r($PdoStatement->fetchAll());
      return $PdoStatement->fetchAll();
    }
    // ici $todo sera un tableau associatif avec comme clés title, description
    /* $todo = [
        "title" => "titre de la tâche",
        "description" => "description"
    ];
    */
    public function createTodo($todo)
    {
        // TODO établir une connexion à la db
        $pdo = $this->getConnection();

        // TODO écrire la requête en insertion
        $query = 'INSERT INTO todos (title, body) VALUES (:title, :body)';

        // TODO préparer la requête
        $PdoStatement = $pdo->prepare($query);

        // TODO exécuter le requête en passant les bonnes valeurs
        // TODO retourner le résultat de la requête (dans notre cas true ou false)
        return $PdoStatement->execute($todo);
    }


   public function deleteTodo($todo) {
        // TODO établir une connexion à la db
        $pdo = $this->getConnection();
        // TODO écrire la requête en insertion
        $query = 'DELETE FROM todos WHERE id = :id';

        // TODO préparer la requête
        $PdoStatement = $pdo->prepare($query);

        // TODO exécuter le requête en passant les bonnes valeurs
        $values = [
            'id' => $todo['id'],
        ];

        return $PdoStatement->execute($todo);
    }
    
        // TODO retourner le résultat de la requête
  //  }

   // public function createTodo() {
        // TODO établir une connexion à la db

        // TODO écrire la requête en insertion

        // TODO préparer la requête

        // TODO exécuter le requête en passant les bonnes valeurs

        // TODO retourner le résultat de la requête
 //   }

   // public function createTodo() {
        // TODO établir une connexion à la db

        // TODO écrire la requête en insertion

        // TODO préparer la requête

        // TODO exécuter le requête en passant les bonnes valeurs

        // TODO retourner le résultat de la requête
  //  }

    // on crée une méthode qui va nous permettre de créer une nouvelle instance de la classe Database et qui va retourner un objet PDO
    // cette méthode sera privée, elle ne sera accesiible que depuis cette classe
    private function getConnection()
    {
        // on va créer une nouvelle instance de Database
        $db = new Database();
        // ici je retourne un objet PDO que je pourrai utiliser pour mes requêtes
        return $db->connect();
    }
}

//pour tester delete
//$model = new Model();

//$response = $model->deleteTodo([
  //  'id' => '3',
//]);

//var_dump($response);

//pour tester creat

//$model = new Model();

 //$response = $model->createTodo([
  //  'title' => 'Test de la méthode create',
  //  'description' => 'description méthode create',
 // ]);

//var_dump($response);

//$model->getTodos();



//pour voir la rsultat  de base donner
//$model = new Model();

//$model->getTodos();


/*
if ($identifiantFormulaire == "create")
{

    
    $todo = [
        "title	"            => filtrer("title	"),
        "description	"          => filtrer("description	"),
   
    ];
   
    extract($todo);

    if ($title	 != "" 
            && $description	 != ""
         
    {

        $requeteSQL   =
<<<CODESQL

INSERT INTO todos
( title	, description	)
VALUES
( :titre, :description	) 

CODESQL;

      //  require_once "php/model/envoyer-sql.php";

        echo "PUBLIE ($requeteSQL)";
    }
    else
    {
      
        echo "LES CHAMPS OBLIGATOIRES";
    }

}
*/
