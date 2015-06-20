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
 <?php
 /*
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://www.payroll.com.local/index.php">Gumi Online Timesheet</a>
    </div>
  </div>
</div>
*/
?>

    <div class="container"><div class="main-content">

  <div class="login-title">Email Sent</div>


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

                            <!--div class="panel-body"-->
                            <div class="panel panel-info">
                              <div class="panel-heading">
                                <h3 class="panel-title">Forgot Password Success!</h3>
                              </div>

                              <div class="panel-body">
                                <div id="error_message" class="alert alert-success" role="alert">
                                  <!--The email have been sent to-->
                                </div>
                              </div>
                            </div>

    </form>

    <br />
    <span style="font-size:12px;">
      <a href="<?php echo site_url();?>">Back to Login</a>
    </span>
  </div>

</div></div>

    <script src="<?php echo site_url();?>/prevjs/jquery.min.js"></script>
    <script src="<?php echo site_url();?>/vendor/bootstrap/js/bootstrap.min.js?v=0.1"></script>
  </body>
	

</html>