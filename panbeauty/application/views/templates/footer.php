  <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              <?php echo date("Y"); ?> &copy; Timekeeping System.
              <a href="#" class="go-top">
                  <i class="icon-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

<?php $base_url = base_url(); ?>
  
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo $base_url;?>js/jquery.js"></script>
    <script src="<?php echo $base_url;?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo $base_url;?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script type="text/javascript" src="<?php echo $base_url;?>js/hover-dropdown.js"></script>
    <script src="<?php echo $base_url;?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo $base_url;?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo $base_url;?>js/respond.min.js" ></script>

      <?php
          /*
          <!--common script for all pages-->
            <script src="js/common-scripts.js"></script>
            <script src="js/form-component.js"></script>
          */
        ?>

    <script src="<?php echo $base_url;?>js/jquery.stepy.js"></script>

    <?php
      //used for forms
    ?>

     <?php
        $needle = "new_employee"; $needle1 = "edit_employee";
        $haystack = current_url();
        if ( (strpos($haystack, $needle) !== false) || (strpos($haystack, $needle1) !== false) )
        {
     ?>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/fuelux/js/spinner.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/bootstrap-daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/jquery-multi-select/js/jquery.multi-select.js"></script>
  <script type="text/javascript" src="<?php echo $base_url;?>assets/jquery-multi-select/js/jquery.quicksearch.js"></script>
    <?php
      //used for forms so makes no sense to load them for pages with no forms
        }
    ?>

  <!--right slidebar-->
  <?php
  //<script src="js/slidebars.min.js"></script>
    ?>

    <script src="<?php echo $base_url;?>js/respond.min.js" ></script>
    <!--common script for all pages-->
    <script src="<?php echo $base_url;?>js/common-scripts.js"></script>
    <!--script src="<?php echo $base_url;?>js/tasks.js" type="text/javascript"></script-->
     <?php
        $needle = "load_employeemasterlist";
        $haystack = current_url();
        //echo $haystack;
        if (strpos($haystack, $needle) !== false)
        {
     ?>

        <!--dynamic table-->
        <script type="text/javascript" language="javascript" src="<?php echo $base_url;?>assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
        <script type="text/javascript" src="<?php echo $base_url;?>assets/data-tables/DT_bootstrap.js"></script>
        <!--dynamic table initialization -->
        <script type="text/javascript" language="javascript" src="<?php echo $base_url;?>js/dynamic_l1st1ng_init.js"></script>

      <?php
        //used for forms so makes no sense to load them for pages with no forms
      /*
        <script type="text/javascript" charset="utf-8">
            $(document).ready(function() {
                $('#example').dataTable( {
                    "aaSorting": [[ 0, "asc" ]]
                } );
            } );
        </script>
      */
      }
    ?>

     <?php
        $needle = "new_employee"; $needle1 = "edit_employee";
        $haystack = current_url();
        if ( (strpos($haystack, $needle) !== false) || (strpos($haystack, $needle1) !== false) )
        {
          $UPD = '';
          if ( strpos($haystack, $needle1) !== false ) $UPD = 'UPD';

     ?>
        <!--used by edit timesheet-->
        <script type="text/javascript" src="<?php echo $base_url;?>js/jquery.validate.min.js"></script>
        <script src="<?php echo $base_url;?>js/form-validation-<?php echo $UPD?>employee.js"></script>
        <!--this page  script only-->
        <script src="<?php echo $base_url;?>js/advanced-form-components.js"></script>

    <?php
      //used for forms so makes no sense to load them for pages with no forms
        }
    ?>

  </body>
</html>
