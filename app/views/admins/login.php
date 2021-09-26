<?php require APPROOT . '/views/includes/admin head.php'; ?>
<?php
   require APPROOT . '/views/includes/head.php';
?>

<style>
    body {
        background: 
    }
    .login-form {
        padding-top: 5%;
		width: 30%;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f5dfc4;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }

</style>
<body>
<div class="login-form">
    <form action="<?php echo URLROOT;?>/admins/login" method="POST">
        <h2 class="text-center">Log in</h2>       
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required="required">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>       
    </form>
    <p class="text-center"><a href="<?php echo URLROOT;?>/pages/">Back To Main Site <span class="glyphicon glyphicon-log-out"></span></a></p>
</div>
</body>