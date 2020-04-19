// méthode Ismail Aydin
// avec boucle for()
for ($i = 0; $i < count($posts); ++$i) {
    // Debug
    // echo $deneme[$i]['title']
    // $querySQL = $db->query('SELECT title, body FROM infos', PDO::FETCH_ASSOC);
    $querySQL = 'INSERT INTO posts SET title=:a, body=:b';

    $pdoStatement = $db->prepare($querySQL);
    $pdoStatement->execute([':a' => $posts[$i]['title'], ':b' => $posts[$i]['body']]);
}
