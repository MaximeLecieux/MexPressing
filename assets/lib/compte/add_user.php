<?php
require_once('../pdo.php');

if(isset($_POST)){
    addUser($pdo, $_POST['identifiant'], $_POST['password'], $_POST['fonction']);
}

function addUser(PDO $pdo, string $identifiant , string $password, string $fonction){
    $sql = "INSERT INTO `Employed` (`id`, `identifiant`, `password`, `id_fonction`) VALUES (NULL, :identifiant, :password, :id_fonction) ;";
    $query = $pdo->prepare($sql);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':id_fonction', $fonction, PDO::PARAM_STR);
    return $query->execute();
}