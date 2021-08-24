<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>



<div class="container tourism-container">
    <?php foreach($data['tourismSites'] as $tourismSite): ?>
        <div class="container-item tourism">
            
                <img src="<?php  echo URLROOT.'/public/img/'. $tourismSite->image; ?>" alt="" class="imageDetails">
            

            
                <h2>
                    <?php echo $tourismSite->name; ?>
                </h2>

              
                    <h4>
                        <?php echo 'Located at: ' . $tourismSite->address; ?>
                    </h4>
                

                
                    <p>
                        <?php if(strlen($tourismSite->description)>200){
                            echo substr($tourismSite->description, 0, 199) . '...';
                        }
                         ?>
                    </p>
              
                    
                    
                    
                    <a href="<?php echo URLROOT . "/tourismSites/details/" . $tourismSite->id ?>"
                     class="btn green details">
                     Details
                    </a> 
                     
                         

                       
        </div>
    <?php endforeach; ?>
</div>