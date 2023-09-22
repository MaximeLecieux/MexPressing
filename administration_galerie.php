<?php
require_once('templates/dashboard_header.php');
require_once('assets/lib/pdo.php');
require_once('assets/lib/config.php');
require_once('assets/lib/picture/picture.php');

if(!isset($_SESSION['user'])){
    header('Location: login.php');
}

$errors = [];
$messages = [];

if(isset($_POST['saveImage'])){  
    $fileName = null;
    if(isset($_FILES['addFile']['tmp_name']) && $_FILES['addFile']['tmp_name'] != ''){ 
        $checkImage = getimagesize($_FILES['addFile']['tmp_name']);
        if($checkImage !== false && $checkImage['mime'] === 'image/jpeg'){
            $fileName = ($_FILES['addFile']['name']);
            move_uploaded_file($_FILES['addFile']['tmp_name'], _GALERY_IMG_PATH_.$fileName); 
            $src = _GALERY_IMG_PATH_.$fileName;
            $width = '1200';
            $height = '675';
            $dst = _GALERY_IMG_PATH_.$fileName;

            convertImage($src, $checkImage, $dst, $width, $height, 50);

        } else {
            $errors[] = 'Le fichier doit être une image JPEG';
        }
    }
    if(!$errors){
        $res = saveImage($pdo, $fileName);

        if($res){ // Checks if data is sent and OK and stock a message based on the response
            $messages[] = 'L\'image a bien été enregistré !';
        } else{
            $errors[] = 'Une erreur est survenue';
        } 
    }
}

if(isset($_POST['deleteFile'])){
    $idImage = $_POST['deleteFile'];
    
    $res = deleteImage($pdo, $idImage);
    if($res){ // Checks if data is sent and OK and stock a message based on the response
        $messages[] = 'L\'image a bien été supprimé !';
    } else{
        $errors[] = 'Une erreur est survenue';
    } 
}

$images = getImages($pdo);
?>

<h1 class="text-center mb-3">Galerie photo</h1>

<?php foreach($messages as $message){ ?>
        <div class="alert alert-success">
            <?=$message;?>
        </div>
    <?php } ?>
    <?php foreach($errors as $error){ ?>
        <div class="alert alert-danger">
            <?=$error;?>
        </div>
    <?php } ?>

<div class="rounded bg-dark-subtle p-2 mb-4">
    <div class="row justify-content-center d-flex">
        <?php foreach($images as $image){ ;?>
            <div class="card col-3 m-1 p-0" style="width: 18rem;">
                <img src="<?=_GALERY_IMG_PATH_.$image['url'];?>" class="card-img-top" alt="<?=$image['url'];?>">
                <div class="card-body">
                    <h5 class="card-title"><?=$image['url']?></h5>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<div class="rounded bg-dark-subtle p-2 mb-4">
    <div class="row">
        <div class="col-6 text-center"> <!-- Add picture -->
            <h2>Ajouter une photo</h2>
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="addFile" class="form-label">Image</label>
                    <input type="file" name="addFile" id="addFile" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" value="Enregistrer" name="saveImage" class="btn btn-primary">
                </div>
            </form>
        </div>
        <div class="col-6 text-center"><!-- Delete picture -->
            <h2>Supprimer une photo</h2>
            <form method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="deleteFile" class="form-label">Sélectionner la photo</label>
                    <select name="deleteFile" id="deleteFile" class="form-select">
                        <?php foreach($images as $image){ ?>
                            <option value="<?=$image['id']?>"><?=$image['url']?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <input type="submit" value="Enregistrer" name="deleteImage" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>
</div>

<?php
    require_once('templates/dashboard_footer.php');
?>