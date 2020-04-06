<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>projetFahad</title>
</head>
<body>
<?php
  class hussein 
{
    // METHODE
    function sport ()
    {
        echo "(foot ball)";
    }
    
}
  $hh = new hussein;
  $hh->sport();

   class fahad{
       function work ()
       {
       echo "(coder)";
    }
       function manger()
       {
           echo "(viende)";
       }
   }
   $xx = new fahad;
   $xx->work();
   $xx->manger();

   class xxx{
       static function fucking()  //on ne es pas obligee de mettre le mot static
       {
           echo "(have sexe evry time)";

       }
   }
   xxx::fucking();
     class box{
         function math()
         {
             echo "(formulaire de math )";
             
         }
         function fisique()
         {
             echo "(la theorie de l'univers)";
         }
         function chimic()
         {

            echo "(fer plomb)";
         }
     }
box::fisique();
box::math();

?>
</body>
</html>