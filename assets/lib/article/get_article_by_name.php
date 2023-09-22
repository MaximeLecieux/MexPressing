<?php

require_once('../pdo.php');

if(isset($_POST)){
    getArticleByName($pdo, $_POST['article']);
}
function getArticleByName(PDO $pdo, $article){ 
    $query = $pdo->prepare("SELECT article, price, name FROM Articles INNER JOIN Categories ON Articles.id_category = Categories.id WHERE article = :article;");
    $query->bindParam(':article', $article, PDO::PARAM_STR);
    $query->execute();
    return $query->fetchAll();
}

echo $article = json_encode(getArticleByName($pdo, $_POST['article']));