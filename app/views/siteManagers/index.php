<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/siteManagerNavigation.php';
    ?>
</div>
<div class="tourGuideIndex">
    <div class="container center" id="contain">

        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <h2 style="color: #d66538">Have a nice day!</h2>
       
    </div>

</div>