<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>revisition</title>
</head>
<body>
<?php

$nombre1=5;
$nombre2=7;

function truoverpluspetit($nombre1,$nombre2)

{
    $pluspetitnombre =$nombre1;
    if ($nombre2 < $nombre1)
    {
        $pluspetitnombre = $nombre2;

    }
    return $pluspetitnombre = $nombre2;

}



?>
<script>


// COMME LA PLUPART DU TEMPS LE TAUX EST A 20% ON PEUT DONNER CETTE VALEUR PAR DEFAUT AU PARAMETRE
function calculerTTC ($prixHT, $tauxTVA=20)
{

}

// SI JE VEUX CALCULER UN PRIX TTC AVEC UN TAUX DE TVA DE 20%
// => JE N'AI PAS BESOIN DE PRECISER CETTE VALEUR 
$prixOrdinateur = calculerprixTTC(1000);

$prixMasque =calculerprixTTC(2, 5);







</script>
    
</body>
</html>