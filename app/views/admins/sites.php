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

          <div class="col-md-9" style="border: 1px solid red; display: block">
          <div class="panel panel-default ">
              <div class="panel-heading main-bgcolors">
                <h3 class="panel-title">Users</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-md-12">
                    <input type="text" placeholder="Filter users........" class="form-control">
                  </div>
                </div>
                <hr>
                <table class="table table-striped table-hover">
                  <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Joined</th>
                  </tr>
                  <tr>
                    <td>Jill</td>
                    <td>jill@gmail.com</td>
                    <td>Dec, 12 2017</td>
                  </tr>
                  <tr>
                    <td>Eve</td>
                    <td>eve@gmail.com</td>
                    <td>Dec, 12 2017</td>
                  </tr>
                  <tr>
                    <td>Tom</td>
                    <td>tom@gmail.com</td>
                    <td>Dec, 12 2017</td>
                  </tr>
                  <tr>
                    <td>John</td>
                    <td>john@gmail.com</td>
                    <td>Dec, 12 2017</td>
                  </tr>
                  <tr>
                    <td>Mrunali</td>
                    <td>mrunali@gmail.com</td>
                    <td>Dec, 12 2017</td>
                  </tr>
                </table>

          </div>



<!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="<?php echo URLROOT;?>/public/javascript/bootstrap.min.js"></script>
    <script src="<?php echo URLROOT;?>/public/javascript/main.js"></script>
    <script>
        CKEDITOR.replace( 'editor1' );
    </script>