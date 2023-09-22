<?php

require_once('../pdo.php');

function getCategories(PDO $pdo){ 
    $query = $pdo->prepare("SELECT * FROM Categories");
    $query->execute();
    return $query->fetchAll();
}

echo $articles = json_encode(getCategories($pdo));