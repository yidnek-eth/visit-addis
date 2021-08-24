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
          <div class="col-md-9 ">
          <div class="panel panel-primary">
            <div class="panel-heading main-bgcolors">
              <h3 class="panel-title text-center">Worker Register</h3>
            </div>
            <div class="panel-body">
              <form action="<?php echo URLROOT; ?>/admins/addUser" method= "POST">
                <div class="form-group">
                  <label for="username">User Name</label>
                  <input type="text" class="form-control" id="username" placeholder="User Name" name="username">
                    <span class="invalidFeedback">
                        <?php echo $data['usernameError']; ?>
                    </span>
                </div>
                <div class="form-group">
                  <label for="Email">Email address</label>
                  <input type="email" class="form-control" id="Email" placeholder="Email"  name="email">
                    <span class="invalidFeedback">
                        <?php echo $data['emailError']; ?>
                    </span>
                </div>
                <div class="form-group">
                  <label for="InputPassword">Password</label>
                  <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password">
                  <span class="invalidFeedback">
                    <?php echo $data['passwordError']; ?>
                  </span>
                </div>
                <div class="form-group">
                  <label for="confirmPassword">Confirm Password</label>
                  <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password" name="confirmPassword">
                  <span class="invalidFeedback">
                    <?php echo $data['confrimPasswordError']; ?>
                  </span>
                </div>
                <div class="form-group">
                <label for="carrier-choice">Carrier</label>
                
                <select name="carrier" id="carrier-choice">
                  <option value="Attendant">Attendant</option>
                  <option value="Site Manager">Site Manager</option>
                  <option value="Tour Guide">Tour Guide</option>
                </select>
                    <span>
                    <?php echo $data['carrierError']; ?>
                    </span> 
                </div>
                <button type="submit" class="btn btn-default main-bgcolors">Submit</button>
              </form>
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