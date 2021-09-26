<?php require APPROOT . '/views/includes/admin head.php'; ?>
<?php
   require APPROOT . '/views/includes/head.php';
?>

<style>
    body {
        background: 
    }
    .update-form {
        padding-top: 5%;
		width: 30%;
    	margin: 50px auto;
	}
    /* .update-form form {
    	margin-bottom: 15px;
        /* background: #fff; */
        /* box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3); */
        padding: 30px;
    } */
    label {
        font-size : 25px;
        font-weight: bold;
    }
    .update-form h2 {
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
<div class="update-form">
    <form action="<?php echo URLROOT;?>/admins/manageAdminAccount" method="POST">
        <h2 class="text-center">Update Account</h2>       
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" name="username" class="form-control" placeholder="Username" required="required" value="<?php echo $data['admin']->username?>">
            <span class="invalidFeedback">
                <?php echo $data['usernameError']; ?>
            </span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" placeholder="Email" required="required" value="<?php echo $data['admin']->email?>">
            <span class="invalidFeedback">
                <?php echo $data['emailError']; ?>
            </span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password" required="required">
            <span class="invalidFeedback">
                <?php echo $data['passwordError']; ?>
            </span>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Update</button>
        </div>       
    </form>
    <p class="text-center"><a href="<?php echo URLROOT;?>/admins/index">Back To Admin Dashboard <span class="glyphicon glyphicon-log-out"></span></a></p>
</div>
</body>