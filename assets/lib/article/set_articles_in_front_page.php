<?php

require_once('../pdo.php');

function getCategories(PDO $pdo){
    $query = $pdo->prepare("SELECT * FROM Categories ORDER BY id DESC");
    $query->execute();
    return $query->fetchAll();
}
$categories = getCategories($pdo);

function getFirstCat(PDO $pdo){ 
    $query = $pdo->prepare("SELECT article, price, name FROM Articles INNER JOIN Categories ON Articles.id_category = Categories.id WHERE Categories.id = 1;");
    $query->execute();
    return $query->fetchAll();
}
$firstCat = getFirstCat($pdo);

function getSecondCat(PDO $pdo){ 
    $query = $pdo->prepare("SELECT article, price, name FROM Articles INNER JOIN Categories ON Articles.id_category = Categories.id WHERE Categories.id = 2;");
    $query->execute();
    return $query->fetchAll();
}
$secondCat = getSecondCat($pdo);

function getThirdCat(PDO $pdo){ 
    $query = $pdo->prepare("SELECT article, price, name FROM Articles INNER JOIN Categories ON Articles.id_category = Categories.id WHERE Categories.id = 3;");
    $query->execute();
    return $query->fetchAll();
}
$thirdCat = getThirdCat($pdo);

function getFourCat(PDO $pdo){ 
    $query = $pdo->prepare("SELECT article, price, name FROM Articles INNER JOIN Categories ON Articles.id_category = Categories.id WHERE Categories.id = 4;");
    $query->execute();
    return $query->fetchAll();
}
$fourCat = getFourCat($pdo);

function getFiveCat(PDO $pdo){ 
    $query = $pdo->prepare("SELECT article, price, name FROM Articles INNER JOIN Categories ON Articles.id_category = Categories.id WHERE Categories.id = 5;");
    $query->execute();
    return $query->fetchAll();
}
$fiveCat = getFiveCat($pdo);

function getSixCat(PDO $pdo){ 
    $query = $pdo->prepare("SELECT article, price, name FROM Articles INNER JOIN Categories ON Articles.id_category = Categories.id WHERE Categories.id = 6;");
    $query->execute();
    return $query->fetchAll();
}
$sixCat = getSixCat($pdo);

function getSevenCat(PDO $pdo){ 
    $query = $pdo->prepare("SELECT article, price, name FROM Articles INNER JOIN Categories ON Articles.id_category = Categories.id WHERE Categories.id = 7;");
    $query->execute();
    return $query->fetchAll();
}
$sevenCat = getSevenCat($pdo);

$res = [
    'categories' => $categories,
    'first' => $firstCat,
    'second' => $secondCat,
    'third' => $thirdCat,
    'four' => $fourCat,
    'five' => $fiveCat,
    'six' => $sixCat,
    'seven' => $sevenCat
];

echo $ajaxResponse = json_encode($res);