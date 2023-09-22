<?php
require_once('../pdo.php');

if(isset($_POST)){
    deleteArticle($pdo, $_POST['article']);
}

function deleteArticle(PDO $pdo, string $article){
    $sql = "DELETE FROM `Articles` WHERE `article` = :article";
    $query = $pdo->prepare($sql);
    $query->bindParam(':article', $article, PDO::PARAM_STR);
    $deleteArticle = $query->execute();
}