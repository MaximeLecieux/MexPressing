<?php

try {
    $pdo = new PDO('mysql:dbname=MexPressing;host=localhost', 'root', ''); // Connexion à la BDD

} catch (PDOException $PDOException){
    echo 'Impossible de contacter le serveur';
}