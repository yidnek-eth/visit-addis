<?php
   require APPROOT . '/views/includes/head.php';
?>

<style>
    .md-form {
        margin-top : 20px;
    }

   .card {
       width: 700px;
       margin-top: 150px;
   } 

   .btn {
       width: 300px;
   }

   .input-lg {
  font-size: 37px;
}


    
</style>

<link href="<?php echo URLROOT;?>/public/css/bootstrap.min.css" rel="stylesheet">



<div class="d-flex justify-content-center align-items-center  container">
    <div class="row">
        <div class="col-md-12">
                    <!-- Material form login -->
<div class="card">

  <h5 class="card-header bg-info white-text text-center py-4">
    <strong>Sign in</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="<?php echo URLROOT; ?>/users/employeeLogin" method="POST">

      <!-- Email -->
      <div class="md-form">
        <label for="materialLoginFormEmail">Username</label>
        <input type="text" id="materialLoginFormEmail" class="form-control input-lg" name="username">
        <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>
        
      </div>

      <!-- Password -->
      <div class="md-form">
      <label for="materialLoginFormPassword">Password</label>
        <input type="password" id="materialLoginFormPassword" class="form-control" name="password">
        <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
         </span>
      </div>

      
      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign in</button>

      
      <p>
        <a href="<?php echo URLROOT; ?>/pages/">Back To Home</a>
      </p>

    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
        </div>
    </div>
</div>





<!-- <div class="container-login">
    <div class="wrapper-login">
        <h2>Sign in</h2>

        <form action="<?php echo URLROOT; ?>/users/employeeLogin" method ="POST">
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>
        </form>
    </div>
</div>  -->



