<?php
require_once('../pdo.php');

if(isset($_POST)){
    modifyArticle($pdo, $_POST['article'], $_POST['articleModify'], $_POST['price'], $_POST['category']); 
}

function modifyArticle(PDO $pdo, string $article, string $articleModify, string $price, int $category){
    $sql = "UPDATE `Articles` SET `article` = :articleModify, `price` = :price, `id_category` = :category WHERE `article` = :article;";
    $query = $pdo->prepare($sql);
    $query->bindParam(':article', $article, PDO::PARAM_STR);
    $query->bindParam(':articleModify', $articleModify, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_STR);
    $query->bindParam(':category', $category, PDO::PARAM_INT);
    return $query->execute();
}