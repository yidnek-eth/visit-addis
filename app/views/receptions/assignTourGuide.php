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
                <p style="color: white; font-size: 28px; text-decoration: underline; font-weight: bold;">Available Guides</p>
                <?php foreach($data['guides'] as $guide): ?>
                    <div class="container-item">
                        <p style="color: white; font-size: 20px;"><?php echo $guide->username; ?></p>
                        <form action="<?php echo URLROOT . "/receptions/assignGuide/" . $data['ticket']->id . "/" . $guide->id ;?>" method="POST">
                            <input type="submit" name="assign" value="Assign" class="btn orange" >
                        </form>
                    </div>
                    
                <?php endforeach; ?>
            </div>
          <div class="assign">

            </div>      


    </div>

</div>
