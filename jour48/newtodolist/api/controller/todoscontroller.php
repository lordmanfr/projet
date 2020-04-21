<?php

class TodoController
{
    // propriétés de classe
    private $model;

    // constructeur prend en paramètre une instance de ma classe Model
    public function __construct($model)
    {
        $this->model = $model;
    }

    // méthodes de classe
    public function getAll()
    {
        $data = $this->model->getTodos();
     //  echo '<pre>'; 
     //  print_r($data);
     //   echo '</pre>';
             // je veux vérifier s'il y a au moins 1 élément dans mon tableau

     if (count($data) > 0){
             // code à exécuter si la condition est vraie
        // je construis ma réponse sous la forme d'un tableau associatif
        $response = [
              "status" => "success",
              "message" => "recuperees",
              "payload" => $data 
        ];  

     } else{
        $response = [
            "status" => "error",
            "message" => "nigative",
        ]; 
          
     }
     // je dois transformer le tableau associatif de la réponse en JSON qui va pouvoir être compris et exploité par JS

      echo json_encode($response);



    }

      // create : prend en paramètre une request de type POST
    public function create($request)
    {
        // la request va contenir les infos du formulaire
        // je vérifie si j'ai bien title et description dans ma requête
        if (isset($request['title'], $request['body'])) {
            $todo = [
                'title' => $request['title'],
                'body' => $request['body'],
            ];

            if ($this->model->createTodo($todo)) {
                $response = [
                    'status' => 'NEW',
                    'message' => 'pravo',
                ];
            } else {
                $response = [
                    'status' => 'error',
                    'message' => 'Echec de création de la nouvelle tâche',
                ];
            }

            echo json_encode(($response));
        }

        // si la méthode createTodo de la classe Model renvoie true
        // reponse de type success
        // sinon réponse de type erreur
    }

    // update

    // delete
}

// debug only
//require_once '../Model.php';

// on crée une nouvelle instance de la classe Model
//$model = new Model();

// on crée une nouvelle instance de la classe TodoController et on lui passe l'instance de la classe Model su'on vient de créer
//$controller = new TodoController($model);

// on appelle la méthode getAll de la classe TodoController
//pour test de __construct


//$controller->getAll();


//pour test creat
 //$todo =[
  //  "title" => "titre test méthode create",
  //  "description" => "description test"
//];

// on appelle la méthode getAll de la classe TodoController
//$controller->create($todo);