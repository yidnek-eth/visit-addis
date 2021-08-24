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
              <h3 class="panel-title text-center">Manage Sites</h3>
            </div>
            <div class="panel-body">
            <div class="panel panel-default">
              
              <div class="panel-body">
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Contact No.</th>
                    <th>Price</th>
                  </tr>
                  <?php foreach($data['tourismSites'] as $tourismSite): ?>
                  <tr>
                    <td><?php echo $tourismSite->name;?></td>
                    <td><?php echo $tourismSite->address;?></td>
                    <td><?php echo $tourismSite->contactNo;?></td>
                    <td><?php echo $tourismSite->price;?></td>
                    <td><form action="<?php echo URLROOT . "/admins/deleteTourismSite/" . $tourismSite->id; ?>" method="POST">
                    <input type="submit" name="delete" value="Delete" class="btn btn-danger" onclick= "return confirm('Are you sure you want to delete this User?');">
                  </form></td>
                  <td><form action="<?php echo URLROOT . "/admins/updateTourismSite/" . $tourismSite->id; ?>" method="POST">
                    <input type="submit" name="update" value="Update" class="btn btn-primary" >
                  </form></td>
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
