<?php
require_once('../pdo.php');

if(isset($_POST)){
    modifyPassword($pdo, $_POST['identifiant'], $_POST['newPassword']); 
}

function modifyPassword(PDO $pdo, string $identifiant, string $newPassword){
    $sql = "UPDATE `Employed` SET `password` = :newPassword WHERE `identifiant` = :identifiant;";
    $query = $pdo->prepare($sql);
    $newPassword = password_hash($newPassword, PASSWORD_DEFAULT);
    $query->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
    $query->bindParam(':newPassword', $newPassword, PDO::PARAM_STR);
    return $query->execute();
}