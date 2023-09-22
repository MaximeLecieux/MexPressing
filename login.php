<?php
require_once('templates/header.php');
require_once('assets/lib/user.php');
require_once('assets/lib/pdo.php');

$errors = [];
$messages = [];

if(isset($_POST['loginUser'])){
    $user = verifyUser($pdo, $_POST['identifiant'], $_POST['password']);
    
    if($user){
        $_SESSION['user'] = ['identifiant' => $user['identifiant']];
        header('location: index.php');
    } else {
        $errors[] = "Identifiant ou mot de passe incorrect";
    }
}
?>

<h1 class=" text-center mb-3">Se connecter</h1>

<div class="container text-center">

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

    <form method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="identifiant" class="form-label">Identifiant</label>
            <input type="text" class="form-control" id="identifiant" name="identifiant">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3">
            <button type="submit" name="loginUser" class="btn btn-success">Enregister</button>
        </div>
    </form>
</div>

<?php
    require_once('templates/dashboard_footer.php');
?>