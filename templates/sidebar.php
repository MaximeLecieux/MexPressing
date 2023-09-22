<?php
    require_once('assets/lib/config.php');
    $currentPage = basename($_SERVER['SCRIPT_NAME']);
?>

<div class="col-2">
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-tertiary position-sticky" style="width: 280px;">
        <hr>
            <ul class="nav nav-pills flex-column mb-auto">
                <?php foreach($sidebarAdministration as $key => $value){ ?>
                <li class="nav-item text-center">
                    <a href="<?=$key?>" class="nav-link link-body-emphasis <?php if ($currentPage === $key) { echo 'bg-primary-subtle active';}?>"><?=$value?></a>
                </li>
                <?php } ?>
            </ul>
        <hr>
    </div>
</div>