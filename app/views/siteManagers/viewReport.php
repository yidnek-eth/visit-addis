<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/siteManagerNavigation.php';
    ?>
</div>





<div class="container tourism-container">
    <?php foreach($data['reports'] as $report): ?>
        <div class="container-item tourism">
            
            

            
                <h1>
                    <?php echo 'Guide Name:' . $report->user_name; ?>
                </h1>

              
                    <h4 style="font-style: 40px;">
                        <?php echo 'Guide Email: ' . $report->user_email; ?>
                    </h4>
                

                
                    <p>
                        <?php echo $report->description;             
                         ?>
                    </p>
              
                    
                    
                    
                    
                     
                         

                       
        </div>
    <?php endforeach; ?>
</div>

