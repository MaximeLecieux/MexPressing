<?php
require_once('../pdo.php');

if(isset($_POST)){
    addArticles($pdo, $_POST['article'], $_POST['price'], $_POST['category']);
}

function addArticles(PDO $pdo, string $article , string $price, int $category){
    $sql = "INSERT INTO `Articles` (`id`, `article`, `price`, `id_category`) VALUES (NULL, :article, :price, :id_category) ;";
    $query = $pdo->prepare($sql);
    $query->bindParam(':article', $article, PDO::PARAM_STR);
    $query->bindParam(':price', $price, PDO::PARAM_STR);
    $query->bindParam(':id_category', $category, PDO::PARAM_INT);
    return $query->execute();
}