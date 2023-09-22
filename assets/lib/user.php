<?php
require_once('pdo.php');

function verifyUser(PDO $pdo, string $identifiant, string $password){

    $query = $pdo->prepare("SELECT * FROM Employed WHERE identifiant = :identifiant;");
    $query->bindParam(':identifiant', $identifiant, PDO::PARAM_STR); 
    $query->execute();
    $user = $query->fetch();
    
    if($user && password_verify($_POST['password'], $user['password'])){
        return $user;
    } else {
        return false;
    }
}