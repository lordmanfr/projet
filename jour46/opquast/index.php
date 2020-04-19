<?php
require_once "data/glossary.php";
//print_r($glossaire);
function displayRandomTerm($glossary)
{
    $lenght = count($glossary);

    $index = mt_rand(0, $lenght - 1);
    //  var_dump($index);
    //   echo '<pre>';
    //  print_r($glossary[$index]);
    //  echo '</pre>';
    $title = $glossary[$index]['title'];
    $description = $glossary[$index]['description'];



    $html =
        <<<output
  <div class="container">
  <h1>  {$title}</h1>
  <p>   {$description}</p>

  </div>
  output;

    echo $html;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>glossaire des termes opquast</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Lobster|Modak&display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Modak&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
   
</head>

<body>
    <form>
         <button type="submit" class="btn btn-primary btn-lg btn-block"> afficher un terme aléatoire

         </button>
        


    </form>
    <?php displayRandomTerm($glossary);
    ?>

</body>

</html>