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
  <div class="login-title">Online Timesheet</div>

  <div class="login-form">
    <form method="POST" action="<?php echo site_url();?>/login/login_admin" accept-charset="utf-8">

        <h2 class="form-signin-heading">sign in now</h2>
    
                  <?php if (isset($error) && $error): ?>
            <br />
          <div class="alert alert-info">
            <?php //Please login with your Username and Password. ?>
                              <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!                                                
          </div>
                  <?php endif; ?>       


      
      <div class="form-group">
        <label for="inputUsername">Username</label>
        <input type="text" class="form-control" id="inputUsername" placeholder="Username" name="email" />
      </div>
      <div class="form-group">
        <label for="inputPassword">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password" name="password" />
      </div>
      
      <input type="hidden" name="referpage" value="<?php echo site_url();?>"> 
      <button type="submit" class="btn btn-primary">Login</button>
    </form>

    <br />
    <span style="font-size:12px;">
      Help: <a href="<?php echo site_url();?>/account/forgotPassword">I can't sign in or I forgot my username/password</a>
    </span>
  </div>
</div></div>
  </body>
	

</html>