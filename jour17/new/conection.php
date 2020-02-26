<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=snowden;charset=utf8','root','');
    echo 'succesfuly connecting to database:';

} catch (PDOException $error){
    echo 'failed connecting to database:' .$error->getMessage();
}