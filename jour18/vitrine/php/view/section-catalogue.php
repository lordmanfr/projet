<section>
            <h2>catalogue</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                 Eum cupiditate quisquam quos fugiat pariatur odit molestias numquam
                  perferendis, incidunt id repellendus, nisi quae fugit
                 officiis consequatur aliquid totam, dolorum maxime!</p>
                 <img class="imagePrincipale" src="assets/img/car4.jpeg" alt="voiture">
            <div class="container">
<?php

// JE DEMANDE A PHP DE RECUPERER LA LISTE DES FICHIERS QUI COMMENCE PAR galerie

// $listecoupe = glob("assets/img/galerie*.jpg");
$listeGalerie = glob("assets/img/coupe*.{jpg,jpeg,gif,png}", GLOB_BRACE);

foreach($listeGalerie as $image)
{
    echo 
<<<CODEHTML

    <img src="$image" alt="$image">

CODEHTML;
}

?>

            </div>

        </section>