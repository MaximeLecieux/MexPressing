<?php

require_once('../pdo.php');

function getFonctions(PDO $pdo){ 
    $query = $pdo->prepare("SELECT * FROM  Fonctions");
    $query->execute();
    return $query->fetchAll();
}

echo $fonction = json_encode(getFonctions($pdo));