<?php require APPROOT . '/views/includes/admin head.php'; ?>
<!-- Navbar
========================================================= -->
<?php require APPROOT . '/views/includes/admin navigation.php'; ?>   


<!-- main ================================================== -->
    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <?php require APPROOT . '/views/includes/admin sidebar.php'; ?>

            
          </div>

          <div class="col-md-9">
            <div class="panel panel-default ">
              <div class="panel-heading main-bgcolors">
                <h3 class="panel-title">Website overview</h3>
              </div>
              <div class="panel-body">
                <div class="col-md-3">
                  <div class="well text-center">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                      <?php echo $data['userNos']; ?>
                    </h2>
                    <h4>Users</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well text-center">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
                      <?php echo $data['ticketNos']; ?>
                    </h2>
                    <h4>Tickets</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well text-center">
                    <h2><span class="glyphicon glyphicon-apple" aria-hidden="true"></span>
                      <?php echo $data['tourismSiteNos']; ?>
                    </h2>
                    <h4>Tourism Sites</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well text-center">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>
                      12,123
                    </h2>
                    <h4>Visitors</h4>
                  </div>
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading main-bgcolors">
                <h3 class="panel-title">Laest Users</h3>
              </div>
              <div class="panel-body">
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
            </div>
          </div>
        </div>
      </div>
    </section>



<!-- Modals
================================================== -->
<!-- Add Page Modal -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form class="" action="index.html" method="post">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Add Page</h4>
        </div>
        <div class="modal-body">

          <div class="form-group">
            <label for="pgTitle">Page Title</label>
            <input type="text" class="form-control" id="" placeholder="Enter page title.">
          </div>
          <div class="form-group">
            <label>Page Body</label>
            <textarea name="editor1" class="form-control" placeholder="Enter Page Body"></textarea>
          </div>
          <div class="form-group">
            <label for="">
              <input type="checkbox" name="" value="">
              Published
            </label>
          </div>
          <div class="form-group">
            <label for="">Meta Tags:</label>
            <input type="text" class="form-control" id="" placeholder="Ass some tags">
            <p class="help-block">Help text here.</p>
          </div>
          <div class="form-group">
            <label for="">Meta Description:</label>
            <input type="text" class="form-control" id="" placeholder="Add some description">
            <p class="help-block">Help text here.</p>
          </div>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary main-bgcolors">Save changes</button>
        </div>


      </form>
    </div>
  </div>
</div>

<!-- Add User Modal -->
<div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    

      <section >
      <div class="container">
        <div class="col-md-6 col-md-offset-4">
          <div class="panel panel-primary">
            <div class="panel-heading main-bgcolors">
              <h3 class="panel-title text-center">Worker Register</h3>
            </div>
            <div class="panel-body">
              <form action="<?php echo URLROOT; ?>/admins/index" method= "POST">
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
                <button type="submit" class="btn btn-default main-bgcolors" >Submit</button>
              </form>
            </div>
           
          </div>
        </div>
      </div>
    </section>
  </div>
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
  </body>
</html>
