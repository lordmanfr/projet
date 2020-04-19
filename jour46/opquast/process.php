<?php

// Debug : je teste les param que je reçois dans l'url
// print_r($_GET);

// je construit le nom du fichier dont je vais avoir besoin pour le traitement

$name = $_GET['query'];

$dataSource = $_GET['query'].'.php';



// je récupère le fichier correspondant
require_once "data/{$dataSource}";

// je fais mon traitement et je retourne la réponse au format JSON
//print_r($glossary);
if($name === "glossary")
{
  $index = mt_rand(0, count($glossary)-1);

  $result = $glossary[$index];

  echo json_encode([
      "data"=> $result,
  ]);

}
if ('practice' === $name) {
    $index = mt_rand(0, count($practices) - 1); // prends en paramètres un min et un max et retourne un entier aléatoire

    // je fais un echo du résultat pour le récupérer en ajax
    $result = $practices[$index];

    echo json_encode([
        'data' => $result,
    ]);
}

