<?php

require_once('../pdo.php');

if(isset($_POST)){
    getSchedule($pdo, $_POST['day']);
}
function getSchedule(PDO $pdo, $day){ 
    $query = $pdo->prepare("SELECT morning, afternoon FROM Schedule WHERE day = :day;");
    $query->bindParam(':day', $day, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

echo $schedule = json_encode(getSchedule($pdo, $_POST['day']));