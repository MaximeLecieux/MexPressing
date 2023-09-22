<?php

require_once('../pdo.php');

function getHoraires(PDO $pdo){ 
    $query = $pdo->prepare("SELECT * FROM Schedule ORDER BY id DESC;");
    $query->execute();
    return $query->fetchAll();
}

echo $horaires = json_encode(getHoraires($pdo));