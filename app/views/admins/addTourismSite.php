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
          <div class="panel panel-primary">
            <div class="panel-heading main-bgcolors">
              <h3 class="panel-title text-center">Site Information</h3>
            </div>
            <div class="panel-body">
              <form action="<?php echo URLROOT; ?>/admins/addTourismSite" method= "POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name"  name="name" placeholder="Enter name of the site">
                    <span class="invalidFeedback">
                        <?php echo $data['nameError']; ?>
                    </span>
                </div>
                <div class="form-group">
                  <label for="description">Description</label>
                  <textarea name="description" id="description" class="form-control" placeholder="Enter Description" rows="7"></textarea>
                  <span class="invalidFeedback">
                    <?php echo $data['descriptionError']; ?>
                  </span>
                </div>
                <div class="form-group">
                  <label for="image">Select Image</label>
                  <input type="file" class="form-control" id="image"  name="image" >
                    <span class="invalidFeedback">
                        <?php echo $data['imageError']; ?>
                    </span>
                </div>
                <div class="form-group">
                  <label for="address">Address</label>
                  <input type="text" class="form-control" id="address"  name="address" >
                    <span class="invalidFeedback">
                        <?php echo $data['addressError']; ?>
                    </span>
                </div>
                <div class="form-group">
                  <label for="contactNo">Contact No.</label>
                  <input type="text" class="form-control" id="contactNo"  name="contactNo" >
                    <span class="invalidFeedback">
                        <?php echo $data['contactNoError']; ?>
                    </span>
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price"  name="price" >
                    <span class="invalidFeedback">
                        <?php echo $data['priceError']; ?>
                    </span>
                </div>
                <button type="submit" class="btn btn-default main-bgcolors" >Submit</button>
              </form>
            </div>
           
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