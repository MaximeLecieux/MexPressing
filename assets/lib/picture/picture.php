<?php

function convertImage($src, $checkImage, $dst, $width, $height, $quality){
    $imageSize = getimagesize($src);
    $imageRessource = imagecreatefromjpeg($src);
    $imageFinal = imagecreatetruecolor($width, $height);
    $final = imagecopyresampled($imageFinal, $imageRessource, 0, 0, 0, 0, $width, $height, $checkImage[0], $checkImage[1]);
    $res = imagejpeg($imageFinal, $dst, $quality);
    if($res){
        return $res;
    } else{
        return false;
    }
}


function saveImage(PDO $pdo, string $url){ // Add image in database
    $sql = "INSERT INTO `Images` (`id`, `url`) VALUES (NULL, :image) ;";
    $query = $pdo->prepare($sql);
    $query->bindParam(':image', $url, PDO::PARAM_STR);
    return $query->execute();
}


function getImages(PDO $pdo){ // Get images from database
    $query = $pdo->prepare("SELECT * FROM Images"); 
    $query->execute();
    return $query->fetchAll();
}

function deleteImage(PDO $pdo, string $idImage){
    $sql = "DELETE FROM `Images` WHERE `id` = :idImage";
    $query = $pdo->prepare($sql);
    $query->bindParam(':idImage', $idImage, PDO::PARAM_STR);
    return $query->execute();
}