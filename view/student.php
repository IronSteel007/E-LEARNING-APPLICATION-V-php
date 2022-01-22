<?php
    include '../includes/header.php';
?>
<div class="container-fluid">
    <div class="row" style="height: 100vh;">
        <?php
            include '../includes/asidebar.php';
        ?>
    </div>
    <div class="col-lg-10 col-md-8 col-sm-6 col-xs-12">
        <div class="d-flex justify-content-between mt-3">
            <?php
                include '../includes/navbar.php';
            ?>
        </div>
        <div class="row mt-2">
            <?php
                include '../includes/content_stud.php';
            ?>
        </div>
    </div>
</div>

<?php
    include '../includes/footer.php';
?>