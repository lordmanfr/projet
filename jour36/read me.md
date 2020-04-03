# Projet Todolist Ajax/PHP

## Ze Pitch

Créer une application Todolist qui permet :

- d'afficher les tâches créées
- créer une tâche
- modifier une tâche
- supprimer une tâche

Les opérations sur les tâches se feront en utilisant la technologie AJAX, sans rechargement de la page

La partie PHP sera codée en POO (Programmation Orientée Objet)

On s'approchera de la structure MVC (Model View Controller)

## Structure du projet

```
project_folder
│   index.php
│
└───api
│   │   config.php
│   │   Database.php
│   │   Model.php
│   │
│   └───Controller
│       │   MainController.php
│       │   TodoController.php
│
└───assets
    |
    └───css
    │       style.css
    └───js
            main.js
```

## Le principe de fonctionnement

Les requêtes `GET` ou `POST` envoyées en AJAX seront traitées par le fichier `MainController` qui agira comme un aiguillage ou un routeur et appellera la méthode correspondante de la classe `TodoController`.

La tâche du `TodoController` sera d'interroger la classe `Model` et de renvoyer la réponse au format JSON au script JS.

Le rôle de la classe `Database` est d'établir une connexion à la BDD et de retourner un objet PDO

## Les étapes

1.  création de la bdd et de la table des tâches

    1.  BDD : `todolist`
    2.  Table : `todos`

2.  index.php

    1.  form (POST)
        1. input:text `title`
        2. input:text `description`
        3. button
    2.  div (affichage dela liste des tâches)

3.  config.php

    1.  définition des constantes de connexion

4.  Database.php

    1.  propriétés

        1.  `public $conn`
        2.  `private $dsn`
        3.  `private $username`
        4.  `private $pwd`
        5.  `private $options`

    2.  méthodes
        1.  `__construct`
        2.  `connect`

5.  Model.php

    1.  méthodes
        1.  `getConnection`
        2.  `getTodos`
        3.  `createTodo`
        4.  `updateTodo`
        5.  `deleteTodo`

6.  TodoController.php
    1.  méthodes
        1.  `__construct`
        2.  `getAll`
        3.  `create`
        4.  `update`
        5.  `delete`
7.  MainController.php
    1.  intercepter les requêtes et appeler les méthodes correspondantes du `TodoController`

### etap 1


base de donne



    1.  BDD : `todolist`
    2.  Table : `todos`



### etap 2

page index.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<h1>Todolist Ajax</h1>
    <form action="" method="post">
        <div>
            <label for="title">la tâche</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description">
        </div>
        <button>Save it</button>
    </form>
    
    <script src="assets/js/main.js"></script>
</body>
</html>



etap 3
cree page config.php

<?php
const DSN = 'mysql:host=localhost;dbname=todolist;charset=utf8' ;

const USERNAME ="root" ;

const PDW = "";



const OPTIONS = [
    PDO :: ATTR_DEFAULT_FETCH_MODE => PDO :: FETCH_ASSOC,

    PDO :: ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION,
];



### etap 4

cree page en API Database.php


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
            echo 'Connexion établie';
        } catch (PDOException $error) {
            echo 'Error : ' . $error->getMessage();
        }
        return $this->conn;
    }
}

//pour tester database
 //$objet = new Database();
//$pdo = $objet->connect();







  ### etap 5

   cree model.php


<?php

// on a besoin d'une conncetion à la bdd
require_once 'Database.php';

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
        print_r($PdoStatement->fetchAll());
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
        $query = 'INSERT INTO todos (title, description) VALUES (:title, :description)';

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
$model = new Model();

$response = $model->deleteTodo([
    'id' => '3',
]);

var_dump($response);

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










### etap 6 

creee TodoController.php


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
        if (isset($request['title'], $request['description'])) {
            $todo = [
                'title' => $request['title'],
                'description' => $request['description'],
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
require_once '../Model.php';

// on crée une nouvelle instance de la classe Model
$model = new Model();

// on crée une nouvelle instance de la classe TodoController et on lui passe l'instance de la classe Model su'on vient de créer
$controller = new TodoController($model);

// on appelle la méthode getAll de la classe TodoController
//pour test de __construct


//$controller->getAll();


//pour test creat
$todo =[
    "title" => "titre test méthode create",
    "description" => "description test"
];

// on appelle la méthode getAll de la classe TodoController
$controller->create($todo);


### etap 7

cree MainController.php   

<?php

// je dois importer mon Model et mon TodoController ici
require_once '../Model.php';
require_once 'TodoController.php';

// je crée mes instances de classes Model et TodoController
$model = new Model();

// on crée une nouvelle instance de la classe TodoController et on lui passe l'instance de la classe Model su'on vient de créer
$controller = new TodoController($model);

// en fonction de la requête JS que je vais recevoir, je vais faire différentes actions
// pour connaître le type de requête, on peut utiliser la superglobale $_SERVER
if ('GET' === $_SERVER['REQUEST_METHOD']) {
    // je vais gérer les requêtes en GET
    $controller->getAll();
}

  ### etap 8
  


  vas a main.js

console.log("hiiii there");

// DOM elements
const todosContainer = document.querySelector(".todos");

function getTodos() {
  // appel ajax au mainController de l'API
  fetch("api/controller/maincontroller.php")
    .then(response => response.json())
    .then(data => {
      //console.log(data);
      const todos = data.payload;
      todos.forEach(elem => {
        todosContainer.innerHTML += `
          <div style="border: 1px solid #333; margin-top: 1rem;">
            <h2>${elem.title}</h2>
            <p>${elem.description}</p>
          </div>
          `;
      });
    });
}

window.addEventListener("load", getTodos);




























