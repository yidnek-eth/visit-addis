<?php
   require APPROOT . '/views/includes/head.php';
?>



<link href="<?php echo URLROOT;?>/public/css/bootstrap.min.css" rel="stylesheet">

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
  font-size: 32px;
}


    
</style>


<div class="d-flex justify-content-center align-items-center  container">
    <div class="row">
        <div class="col-md-12">
                
<div class="card">

  <h5 class="card-header bg-success white-text text-center py-4">
    <strong>Register</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="<?php echo URLROOT; ?>/users/register" method="POST">

      <!-- Email -->
      <div class="md-form">
        <label for="materialLoginFormUsername">Username</label>
        <input type="text" id="materialLoginFormUsername" class="form-control input-lg" name="username">
        <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>
        
      </div>

      <div class="md-form">
        <label for="materialLoginFormEmail">Email</label>
        <input type="text" id="materialLoginFormEmail" class="form-control input-lg" name="email">
        <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
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

      <div class="md-form">
      <label for="materialLoginFormPassword">Confirm Password</label>
        <input type="password" id="materialLoginFormPassword" class="form-control" name="confirmPassword">
        <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
         </span>
      </div>

      
      <!-- Sign in button -->
      <button class="btn btn-outline-success btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Register</button>

      <p>Already Registered?
        <a href="<?php echo URLROOT; ?>/users/login">Sign In</a>
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
        <h2>Register</h2>

            <form
                id="register-form"
                method="POST"
                action="<?php echo URLROOT; ?>/users/register"
                >
            <input type="text" placeholder="Username *" name="username">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>

            <input type="email" placeholder="Email *" name="email">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>

            <input type="password" placeholder="Password *" name="password">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>

            <input type="password" placeholder="Confirm Password *" name="confirmPassword">
            <span class="invalidFeedback">
                <?php echo $data['confirmPasswordError']; ?>
            </span>

            <button id="submit" type="submit" value="submit">Submit</button>

        
        </form>
    </div>
</div> -->
