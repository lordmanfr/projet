<?php
require_once 'config.php';
function getConnection()
{
    $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];

    try {
        // on essaie d'exécuter le code dans la partie try
        $db = new PDO(DSN, USERNAME, PWD, $options);
        // echo 'Succesfully connected to DB';
    } catch (PDOException $error) {
        // si erreur, on gère l'erreur et on récupère le message associé
        echo "Failed to connect to DB with error : {$error->getMessage()}";
    }

    return $db;
}

// TODO: créer une fonction qui prendra en paramètre une requête et qui traitera les données de notre formulaire
function handleRequest($request)
{
    // print_r($request);

    if (isset($request['fileUpload'])) {
        // print_r($request['fileUpload']);
        extract($request['fileUpload']);

        // vérifier si pas d'erreur lors de l'upload
        if (UPLOAD_ERR_OK === $error) {
            // on utilise une expression régulière pour trouver les espaces dans une chaîne de caractères
            $pattern = '/\s/';
            // on utilise preg_replace pour les remplacer
            $name = preg_replace($pattern, '-', $name);

            // on va générer un identifiant unique pour le fichier qu'on va sauvegarder
            $fileName = uniqid() . '-' . $name;

            // on spécifie à quel endroit on va sauvegarder nos images sur le serveur
            $uploadsDir = 'uploads/';

            $path = $uploadsDir . $fileName;

            // sauvegarder l'image
            // on va utiliser une fonction php : move_uploaded_file()
            // cette fonction renvoie true si tout s'est bien passé, sinon false

            // 1er paramètre : chemin vers le stockage temporaire de l'image
            // 2ème paramètre : chemin complet vers le lieu de stockage sur le serveur
            if (move_uploaded_file($tmp_name, $path)) {
                // uploads/513153165-simplon.png
                echo "Le fichier {$fileName} a bien été sauvegardé";

                // ici on va sauvegarder l'image en BDD
                // étapes :

                // se connecter à la BDD
                $pdo = getConnection();
                // écrire sa requête SQL
                $sql = 'INSERT INTO Fields (name, path ) VALUES (:name, :path)';
                // prépare la requête
                $pdoStatement = $pdo->prepare($sql);
                // exécuter la reqûete en associant les bonnes valeurs
                $file = [
                    ':name' => $name,
                    ':path' => $path,
                
                ];

                $pdoStatement->execute($file);
                // on confirme par un message à l'utilisateur avec un lien vers l'image sur le serveur
                echo "Le fichier a été sauvegardé dans la BDD. Il est visible <a href={$path} >ici</a>";
                echo <img>{$path}</img>;
            } else {
                echo 'Erreur lors de la sauvegarde';

                return;
            }
        }
    }
}
