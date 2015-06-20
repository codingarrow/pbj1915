<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="®™ Timekeeping System">
    <meta name="keyword" content="Timekeeping System">
    <link rel="shortcut icon" href="img/favicon.png">

  <title>Timekeeping System</title>
		<?php $base_url = base_url(); ?>
		<script type="text/javascript">
		root = "<?php echo $base_url; ?>";
		</script>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $base_url; ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo $base_url; ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
	<link href="<?php echo $base_url; ?>css/table-responsive.css" rel="stylesheet" />

     <?php
        $needle = "load_employeemasterlist";
        $haystack = current_url();
        if (strpos($haystack, $needle) !== false)
        {
     ?>
    <!--dynamic table-->
    <link href="<?php echo $base_url; ?>assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="<?php echo $base_url; ?>assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />	
    <link rel="stylesheet" href="<?php echo $base_url; ?>assets/data-tables/DT_bootstrap.css" />
     <?php
        }
     ?>


    <?php
     //used for form components
       /*
        $needle = "new_employee";
        $haystack = current_url();
        if (strpos($haystack, $needle) !== false)
        {
       */
        $needle = "new_employee"; $needle1 = "edit_employee";
        $haystack = current_url();
        if ( (strpos($haystack, $needle) !== false) || (strpos($haystack, $needle1) !== false) )
        {

    ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/bootstrap-fileupload/bootstrap-fileupload.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/bootstrap-datetimepicker/css/datetimepicker.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>assets/jquery-multi-select/css/multi-select.css" />
     <?php
        }
     ?>

    <!--link href="<?php echo $base_url; ?>css/tasks.css" rel="stylesheet"-->
    <!--right slidebar-->
    <link href="<?php echo $base_url; ?>css/slidebars.css" rel="stylesheet">
    <?php
     //used for form components
    ?>
	
    <!--<link href="css/navbar-fixed-top.css" rel="stylesheet">-->

      <!-- Custom styles for this template -->
    <link href="<?php echo $base_url; ?>css/style.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php echo $base_url; ?>js/html5shiv.js"></script>
      <script src="<?php echo $base_url; ?>js/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body class="full-width">

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!--logo start-->
              <a href="<?php echo $base_url; ?>" class="logo" >T K<span> S</span></a>
              <!--logo end-->
           <?php
              $needle = "show_timesheet";
              $haystack = current_url();
              //echo current_url();
              $showtabactive = "";
              if (strpos($haystack, $needle) !== false) $showtabactive="active";
              ?>

              <div class="horizontal-menu navbar-collapse collapse ">
                  <ul class="nav navbar-nav">
                      <!--li><a href="<?php //echo $base_url; ?>">Dashboard</a></li-->
                      <li class="<?php echo $showtabactive?>"><a href="<?php echo site_url(); ?>/tks/show_timesheet">Timesheet</a></li>
                    <?php
                    switch ($this->session->userdata('userlevel')) 
                    {                      
                    case 1:
                    //---------------------------
                    /*
                    $needle = "show_timesheet";
                    $haystack = current_url();
                    //echo current_url();
                    $showtabactive = "";
                    if (strpos($haystack, $needle) !== false) $showtabactive="active";
                    */
                    //---------------------------
                    ?>
                      <li class="dropdown">
                          <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">Admin <b class=" icon-angle-down"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="<?php echo site_url(); ?>/tks/load_employeeattendance">Manage Timesheet</a></li>
                              <li><a href="<?php echo site_url(); ?>/tks/load_employeemasterlist">Manage Employee</a></li>
                          </ul>
                      </li>
                      <?php
                    break;
                    }                      
                      /*
                      ?>
                      <li><a href="basic_table.html">Tables</a></li>
                      <li class="dropdown">
                          <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#">Extra <b class=" icon-angle-down"></b></a>
                          <ul class="dropdown-menu">
                              <li><a href="search_result.html">Search Result</a></li>
                              <li><a href="404.html">404 Error Page</a></li>
                              <li><a href="500.html">500 Error Page</a></li>
                          </ul>
                      </li>
                      */
                      ?>

                  </ul>

              </div>
              <div class="top-nav ">
                  <ul class="nav pull-right top-menu">
                    <?php
					/*
                      <li>
                          <input type="text" class="form-control search" placeholder=" Search">
                      </li>
					  Only show this when there are users logged in
					*/
					//if (@$_SESSION[EW_SESSION_USER_PROFILE_USER_NAME] != "")
                    if($this->session->userdata('isLoggedIn'))					
					{
					?>
					  
                      <!-- user login dropdown start-->
                      <li class="dropdown">
                          <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                              <!--img alt="" src="img/avatar1_small.jpg"--><?php //echo $this->session->userdata('name'); ?>
                              <span class="username"><?php echo $this->session->userdata('name'); ?></span>
                              <b class="caret"></b>
                          </a>
                          <ul class="dropdown-menu extended logout">
                              <div class="log-arrow-up"></div>
                              <li><a href="#"><i class=" icon-suitcase"></i>Profile</a></li>
                              <li><a href="#"><i class="icon-cog"></i> Settings</a></li>
                              <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li>
                              <li><a href="<?php echo site_url(); ?>/login/logout_user"><i class="icon-key"></i> Log Out</a></li>
                          </ul>
                      </li>
                      <!-- user login dropdown end -->
                    <?php
					}
					?>   					  
                  </ul>
              </div>

          </div>

      </header>
      <!--header end-->
      <!--sidebar start-->
