<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/receptionNavigation.php';
    ?>
</div>

<div class="receptionIndex">
    <div class="container center" id="contain">

        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <h2>Have a nice day!</h2>

    </div>

</div>
