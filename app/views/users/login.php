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
    <form class="text-center" style="color: #757575;" action="<?php echo URLROOT; ?>/users/login" method="POST">

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

      <!-- Register -->
      <p>Not a member?
        <a href="<?php echo URLROOT; ?>/users/register">Register</a>
      </p>

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

<!-- 
<div class="container-login">
    <div class="wrapper-login">
        <h2>Sign in</h2>

        <form action="<?php echo URLROOT; ?>/users/login" method ="POST">
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
        </form>
    </div>
</div>  -->

<!-- <div class="col-md-4">

</div>

  <div class="col-md-4 form">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title text-center">Login</h3>
    </div>
    <div class="panel-body">
      <form action="<?php //echo URLROOT; ?>/users/login" method= "POST">
        <div class="form-group">
          <label for="name">User Name</label>
          <input type="text" class="form-control input-lg"   name="username">
            <span class="invalidFeedback">
                <?php //echo $data['usernameError']; ?>
            </span>
        </div>

        <div class="form-group">
          <label for="address">Password</label>
          <input type="password" class="form-control input-lg"   name="password" >
            <span class="invalidFeedback">
                <?php //echo $data['passwordError']; ?>
            </span>
        </div>

       

      
        
       
            <button type="submit" class="btn btn-default btn-primary" >Submit</button>

            <p class="options">Not registered yet? <a href="<?php echo URLROOT; ?>/users/register">Create an account!</a></p>
      </form>
    </div>
   
  </div>
  </div>

  <div class="col-md-4">

  </div>

  <style>
      .form {
          margin-top: 100px;
      }
  </style> -->




