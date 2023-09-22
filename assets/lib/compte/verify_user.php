<?php

require_once('../pdo.php');

if(isset($_POST)){
    verifyUser($pdo, $_POST['identifiant']);
}

function verifyUser(PDO $pdo, $identifiant){ 
    $query = $pdo->prepare("SELECT identifiant FROM Employed WHERE identifiant = :identifiant;");
    $query->bindParam(':identifiant', $identifiant, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();
    
    echo json_encode($user);
}
