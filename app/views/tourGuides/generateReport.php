<?php
   require APPROOT . '/views/includes/head.php';
?>

<div class="navbar dark">
    <?php
       require APPROOT . '/views/includes/tourGuideNavigation.php';
    ?>
</div>

<!-- <link href="<?php echo URLROOT;?>/public/css/bootstrap.min.css" rel="stylesheet"> -->

<style>
  .form {
    display: block;
    text-align: center;
    margin-top: 200px;
  }

 
</style>




        <div class="col-md-4">

        </div>

          <div class="col-md-4 form">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title text-center">Generate Report</h3>
            </div>
            <div class="panel-body">
              <form action="<?php echo URLROOT; ?>/tourGuides/generateReport" method= "POST">
                <div class="form-group">
                  <label for="name">Name of the Guide</label>
                  <input type="text" class="form-control input-lg"   name="userName">
                    <span class="invalidFeedback">
                        <?php echo $data['nameError']; ?>
                    </span>
                </div>

                <div class="form-group">
                  <label for="address">Email of the Guide</label>
                  <input type="text" class="form-control input-lg"   name="email" >
                    <span class="invalidFeedback">
                        <?php echo $data['emailError']; ?>
                    </span>
                </div>

                <div class="form-group">
                  <label for="address">Tourism Site Name</label>
                  <input type="text" class="form-control input-lg"   name="siteName" >
                    <span class="invalidFeedback">
                        <?php echo $data['siteNameError']; ?>
                    </span>
                </div>
                
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control input-lg" placeholder="Enter Description" rows="7"></textarea>
                  <span class="invalidFeedback">
                    <?php echo $data['descriptionError']; ?>
                  </span>
                </div>

              
                
               
                    <button type="submit" class="btn btn-default btn-primary" >Submit</button>
              </form>
            </div>
           
          </div>
          </div>
     
          <div class="col-md-4">

          </div>

          
      

 

