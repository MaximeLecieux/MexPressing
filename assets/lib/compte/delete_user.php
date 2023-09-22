<?php
require_once('../pdo.php');

if(isset($_POST)){
    deleteUser($pdo, $_POST['identifiant']);
}

function deleteUser(PDO $pdo, string $identifiant){
    $sql = "DELETE FROM `Employed` WHERE `identifiant` = :identifiant";
    $query = $pdo->prepare($sql);
    $query->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
    return $query->execute();
}