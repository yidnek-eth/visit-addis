<?php require APPROOT . '/views/includes/admin head.php'; ?>
<!-- Navbar
========================================================= -->
<?php require APPROOT . '/views/includes/admin navigation.php'; ?>   


<!-- main
================================================== -->
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <?php require APPROOT . '/views/includes/admin sidebar.php'; ?>

            
          </div>

          <div class="col-md-9">
          <div class="panel panel-default ">
              <div class="panel-heading main-bgcolors">
                <h3 class="panel-title">User Reports</h3>
              </div>
              <form action="<?php echo URLROOT. "/admins/sites";?>" method="post">
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-md-12">
                            <input type="text" placeholder="Filter users........" name="valueToSearch" class="form-control">
                            <input type="submit" name="filter" value="Filter" class="btn btn-info" style="margin-top: 10px; ">
                          </div>
                        </div>
                        <hr>
                        <table class="table table-striped table-hover">
                          <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                          </tr>
                          <?php if($data['filteredUsers'] == ''):?>
                          <?php foreach ($data['allUsers'] as $row): ?>
                          <tr>                            
                            <td><?php echo $row->username; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->role; ?></td>
                            
                          </tr>
                          <?php endforeach; ?>
                          <?php elseif($data['allUsers'] == ''):?>
                            <?php foreach ($data['filteredUsers'] as $row): ?>
                          <tr>                            
                            <td><?php echo $row->username; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->role; ?></td>
                            
                          </tr>
                          <?php endforeach; ?>
                          <?php endif; ?>
                          
                        </table>

                  </div>
              </form>

                            </div>
                            </div>

            

                            </div>
              
              



<!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="<?php echo URLROOT; ?>/public/javascript/jquery.min.js"></script>
    <script src="<?php echo URLROOT;?>/public/javascript/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT;?>/public/javascript/main.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>