<?php
    require_once('assets/lib/session.php')
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mex'Pressing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <div class="container">
        <header class="d-flex flex-wrap text-center justify-content-center py-3 mb-4 border-bottom">
            <a href="index.php" class="d-flex align-items-center mx-5 mb-3 mb-md-0 me-md-auto">
                <img src="assets/images/logo.jpg" height="100" alt="Logo">
            </a>
            <?php 
            if(isset($_SESSION['user'])){;// Shows the logout button if the user is logged in ?> 
                <div class="dropdown d-flex align-items-center">
                    <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-person-circle me-2" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
                        <span></span>
                        <span><?=$_SESSION['user']['identifiant'];?></span>
                    </a>
                    <ul class="dropdown-menu text-small shadow" style="">
                        <li><a class="dropdown-item" href="administration_article.php">Tableau de bord</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php">Se déconnecter</a></li>
                    </ul>
                </div>
            <?php } else {  // Shows the login button if the user is logged out?>
                <ul class="nav nav-pills d-flex align-items-center">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link active" aria-current="page">Se connecter</a>
                    </li>
                </ul> 
            <?php } ?>
        </header>
    </div>