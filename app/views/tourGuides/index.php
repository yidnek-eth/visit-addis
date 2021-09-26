<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/tourGuideNavigation.php';
    ?>
</div>
<div class="tourGuideIndex">
    <div class="container center" id="contain">

        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <h2 style="color: #d66538">Have a nice day!</h2>
        <!-- <?php //if($checkGuideExist->available == 0): ?>
        <form action="<?php //echo URLROOT . "/tourGuides/index"?>" method="POST">
            <input type="submit" name="assign" value="Available" class="btn orange" >
        </form>
        <?php //elseif($checkGuideExist->available == 1): ?>
        <form action="<?php //echo URLROOT . "/tourGuides/index"?>" method="POST">
            <input type="submit" name="assign" value="UnAvailable" class="btn orange" >
        </form>
        <?php //endif; ?> -->
    </div>

</div>