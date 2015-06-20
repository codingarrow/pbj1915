<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Timekeeping System">
    <meta name="keyword" content="Timekeeping System">
    <link rel="shortcut icon" href="img/favicon.png">
		<?php $base_url = base_url(); ?>
		<script type="text/javascript">
		root = "<?php echo $base_url; ?>";
		</script>

    <title>Timekeeping System</title>


    <!-- Bootstrap core CSS -->

    <link href="<?php echo $base_url; ?>vendor/bootstrap/css/bootstrap.min.css?v=1.1" rel="stylesheet">
    <link href="<?php echo $base_url; ?>prevcss/login.css" rel="stylesheet">

	</head>

  <body>
    <div class="container"><div class="main-content">

  <div class="login-title">Forgot Password</div>


  <div class="login-form">
    <form method="POST" action="<?php echo site_url();?>/login/send_password" accept-charset="utf-8">

        <!--h2 class="form-signin-heading">sign in now</h2-->
    
                  <?php if (isset($error) && $error): ?>
            <br />
          <div class="alert alert-info">
            <?php //Please login with your Username and Password. ?>
                              <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!                                                
          </div>
                  <?php endif; ?>       

                            <div class="panel-body">
                              <div class="alert alert-info" role="alert">
                                Input the email that you used for your account.
                              </div>


                                <div class="form-group clearfix">
                                  <label>Email : </label>
                                  <input type="email" name="email" class="form-control" size="20" value="" required="required" />
                                </div>

      
                  <input type="hidden" name="referpage" value="<?php echo site_url();?>"> 
                <div class="form-actions">
                  <input type="submit" name="Submit" value="Submit" class="btn btn-primary" />
                </div>

    </form>

    <br />
    <span style="font-size:12px;">
      <a href="<?php echo site_url();?>">Back to Login</a>
    </span>
  </div>

</div></div>
  </body>
	

</html>