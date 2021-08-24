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

            <div id="entry">
                <p>Available Guides</p>
                <?php foreach($data['guides'] as $guide): ?>
                    <div class="container-item">
                        <p><?php echo $guide->username; ?></p>
                        <form action="<?php echo URLROOT . "/receptions/assignTourGuide/". $data['ticketInfo']->id ?>" method="POST">
                        <input type="submit" name="assign" value="Assign" class="btn" style="color: black; width: 150px">
                        </form>
                    </div>
                    
                <?php endforeach; ?>
            </div>
          <div class="assign">

            </div>      


    </div>

</div>
