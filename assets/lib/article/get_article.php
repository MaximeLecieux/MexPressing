<?php

require_once('../pdo.php');

function getArticles(PDO $pdo){ 
    $query = $pdo->prepare("SELECT article, price, name FROM Articles INNER JOIN Categories ON Articles.id_category = Categories.id;");
    $query->execute();
    return $query->fetchAll();
}

echo $articles = json_encode(getArticles($pdo));