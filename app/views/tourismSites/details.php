<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/navigation.php';
    ?>
</div>

<div class="container center">
        <!-- <?php// echo $data['tourismSite']->description; ?> -->
        <div class="container">
    
        <div class="container-item detail">

                <h1>
                    <?php echo $data['tourismSite']->name; ?>
                </h1>
            
                <img src="<?php echo URLROOT.'/public/img/'. $data['tourismSite']->image; ?>" alt="" class="imageDetails">
            

            
                

              
                    <h4>
                        <?php echo 'Located at: ' . $data['tourismSite']->address; ?>
                    </h4>

                    <h4>
                        <?php echo 'Contact: ' . $data['tourismSite']->contactNo; ?>
                    </h4>
                

                
                    <p>
                        <?php 
                            echo $data['tourismSite']->description;
                        
                         ?>
                    </p>
              
                    
                    
                    <?php if(isLoggedIn()): ?>
                    <a href="<?php  echo URLROOT . "/tourismSites/buy/" . $data['tourismSite']->id ?>"
                     class="btn green details buy">
                     Buy
                    </a> 
                    <?php elseif(!isLoggedIn()): ?>
                    <a href="<?php  echo URLROOT . "/users/login" ?>"
                     class="btn green details buy">
                     Buy
                    </a> 
                     <?php endif; ?>
                         
                       
        </div>
    
</div>

</div>

