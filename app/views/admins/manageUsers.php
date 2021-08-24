<?php require APPROOT . '/views/includes/admin head.php'; ?>
<!-- Navbar
========================================================= -->
<?php require APPROOT . '/views/includes/admin navigation.php'; ?> 

<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <?php require APPROOT . '/views/includes/admin sidebar.php'; ?>
          </div>
          <div class="col-md-9 ">
          <div class="panel panel-primary">
            <div class="panel-heading main-bgcolors">
              <h3 class="panel-title text-center">Manage Workers</h3>
            </div>
            <div class="panel-body">
            <div class="panel panel-default">
              
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Carrier type</th>
                  </tr>
                  <?php foreach($data['employees'] as $employee): ?>
                  <tr>
                    <td><?php echo $employee->username;?></td>
                    <td><?php echo $employee->email;?></td>
                    <td><?php echo $employee->carrier;?></td>
                    <td><form action="<?php echo URLROOT . "/admins/delete/" . $employee->id ?>" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger" onclick= "return confirm('Are you sure you want to delete this post?');">
                  </form></td>
                  </tr>
                  <?php endforeach; ?>
                </table>
              </div>
            </div>
            </div>
           
          </div>
        </div>
        <div class="col-md-3">
          
        </div>            
        <div class="col-md-9">
          <div class="panel panel-primary">
            <div class="panel-heading main-bgcolors">
              <h3 class="panel-title text-center">View Workers Categorically</h3>
            </div>
            <div class="panel-body">
            <div class="panel panel-default">
              
              <div class="panel-body">
                <div class="col-md-4">
                  <a data-toggle="collapse" href="#collapseAttendant" role="button" aria-expanded="false" aria-controls="collapseExample"
                   class="btn btn-primary">View Attendants</a>
                </div>

                <div class="col-md-4">
                  <a data-toggle="collapse" href="#collapseSiteManager" role="button" aria-expanded="false" aria-controls="collapseExample"
                  class="btn btn-success">View Site Managers</a>
                </div>
                <div class="col-md-4">
                  <a data-toggle="collapse" href="#collapseTourGuide" role="button" aria-expanded="false" aria-controls="collapseExample"
                   class="btn btn-warning">View Tour Guides</a>
                </div>

                <div class="collapse" id="collapseAttendant">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Carrier type</th>
                    </tr>
                    <?php foreach($data['attendants'] as $attendant): ?>
                    <tr>
                      <td><?php echo $attendant->username;?></td>
                      <td><?php echo $attendant->email;?></td>
                      <td><?php echo $attendant->carrier;?></td>
                      <td></td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                </div>

                <div class="collapse" id="collapseSiteManager">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Carrier type</th>
                    </tr>
                    <?php foreach($data['siteManagers'] as $siteManager): ?>
                    <tr>
                      <td><?php echo $siteManager->username;?></td>
                      <td><?php echo $siteManager->email;?></td>
                      <td><?php echo $siteManager->carrier;?></td>
                      <td></td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                </div>

                <div class="collapse" id="collapseTourGuide">
                  <table class="table table-striped table-hover">
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Carrier type</th>
                    </tr>
                    <?php foreach($data['tourGuides'] as $tourGuide): ?>
                    <tr>
                      <td><?php echo $tourGuide->username;?></td>
                      <td><?php echo $tourGuide->email;?></td>
                      <td><?php echo $tourGuide->carrier;?></td>
                      <td></td>
                    </tr>
                    <?php endforeach; ?>
                  </table>
                </div>
                
              </div>
            </div>
            </div>
           
          </div>
        </div>
       </div>
    </div>
</section>


          <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo URLROOT;?>/public/javascript/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT;?>/public/javascript/main.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>
