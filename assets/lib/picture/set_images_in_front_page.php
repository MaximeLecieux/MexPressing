<?php

require_once('../pdo.php');

function getImages(PDO $pdo){ // Get images from database
    $query = $pdo->prepare("SELECT * FROM Images"); 
    $query->execute();
    return $query->fetchAll();
}

echo $ajaxResponse = json_encode(getImages($pdo));