<?php
const DSN = 'mysql:host=localhost;dbname=todolist;charset=utf8' ;

const USERNAME ="root" ;

const PDW ="";

//$pdo = new PDO("mysql:host=localhost;dbname=blog;charset=utf8;", "root", "");

const OPTIONS = [
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
 
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
];