<?php

require_once('../pdo.php');

function getDay(PDO $pdo){ 
    $query = $pdo->prepare("SELECT day FROM Schedule");
    $query->execute();
    return $query->fetchAll();
}

echo $day = json_encode(getDay($pdo));