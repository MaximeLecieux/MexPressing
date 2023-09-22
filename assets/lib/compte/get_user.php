<?php

require_once('../pdo.php');

function getUsers(PDO $pdo){ 
    $query = $pdo->prepare("SELECT identifiant, role FROM Employed INNER JOIN Fonctions ON Employed.id_fonction = Fonctions.id;");
    $query->execute();
    return $query->fetchAll();
}

echo $user = json_encode(getUsers($pdo));