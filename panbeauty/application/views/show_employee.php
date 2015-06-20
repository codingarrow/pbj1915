<?php //include('templates/header.php'); ?>
        <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script--> 
        <!--link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen"/-->	
	    <script src="<?php echo base_url();?>js/jquery.dataTables.min.js"></script>
        <!--script src="//cdn.datatables.net/1.10.1/js/jquery.dataTables.js"></script--> 


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <?php
              /*
              ?>
              <div class="row">
                  <div class="col-lg-12">
                      <!--breadcrumbs start -->
                      <ul class="breadcrumb">
                          <li><a href="#"><i class="icon-home"></i> Home</a></li>
                          <li><a href="#">Library</a></li>
                          <li class="active">Data</li>
                      </ul>
                      <!--breadcrumbs end -->
                  </div>
              </div>
              */
              ?>
			  <?php
			  /*
             <div class="row">

                 <div class="col-lg-6">
                      <div id="accordion" class="panel-group m-bot20">
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
                                          Collapsible Group Item #1
                                      </a>
                                  </h4>
                              </div>
                              <div class="panel-collapse collapse in" id="collapseOne">
                                  <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
                                          Collapsible Group Item #2
                                      </a>
                                  </h4>
                              </div>
                              <div class="panel-collapse collapse" id="collapseTwo">
                                  <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading">
                                  <h4 class="panel-title">
                                      <a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle">
                                          Collapsible Group Item #3
                                      </a>
                                  </h4>
                              </div>
                              <div class="panel-collapse collapse" id="collapseThree">
                                  <div class="panel-body">
                                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>			 
			  </div> 
			  //trick from http://thewebthought.blogspot.com/2011/04/asp-resulting-recordset-in-two-columns.html
			  //http://www.qualitycodes.com/tutorial.php?articleid=33&title=Displaying-Records-in-Multiple-Columns-Using-PHP

              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Hello [kruu....kruu..]
                          </header>
                          <div class="panel-body">

                          </div>
                      </section>

                  </div>
              </div>

			  */
			  ?>


             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Employee Timesheet
                          </header>
                          <div class="panel-body">
                              <section id="flip-scroll">
                                <table class="table table-bordered table-striped table-condensed cf">
								<!--table class="table table-striped table-hover table-bordered" id="editable-sample"-->
                                  <thead class="cf">
                                  <tr>
                                      <th class="numeric">Date</th>
                                      <!--th class="numeric">Notes</th-->
                                  </tr>
                                  </thead>
                                  <tbody>
                                    <?php if ( $max_posts ) : ?>
                                        <?php foreach( $rows as $results ) : $checkindate = $results['checkindate'];?>
                                            <tr>
                                                <td><?php echo $results['tks_date']; ?></td>
                                                <!--td><?php //echo $results['notes']; ?></td-->
                                            </tr>

                                            <tr>
                                              <td>

                                                <?php
                                                /* GUIDE
                                              $que = $this->surveyform_model->get_questionsundertopic(  $squestions['topic_id']);
                                               $subque = $que ? count($que) : 0;
                                               if ( $subque ) :
                                                foreach( $que as $sque ) :
                                                */

                                                      $checkinrows = $this->timesheet_model->show_employeeBYattendanceDATE($checkindate);
                                                       $subcheckinrows = $checkinrows ? count($checkinrows) : 0;
                                                       if ( $subcheckinrows ) :
                                                        foreach( $checkinrows as $subcheckinrows ) :

                                                ?>

                                                <!--div class="col-sm-6">
                                                    <section class="panel">
                                                        <header class="panel-heading">
                                                            Details
                                                        </header-->
                                                        <table class="table table-hover">
                                                            <!--thead>
                                                            <tr>
                                                                <th>Employee</th>
                                                                <th>checkin</th>
                                                                <th>checkout</th>
                                                            </tr>
                                                            </thead-->
                                                            <tbody>
                                                            <tr>
                                                                <td width="40%"><?php echo $subcheckinrows['fullname']; ?></td>
                                                                <td width="10%"><?php echo $subcheckinrows['usertimein']; ?></td>
                                                                <td width="10%"><?php echo $subcheckinrows['usertimeout']; ?></td>
                                                                <td width="30%"><?php echo $subcheckinrows['HMSTotal']; ?></td>

                                                            </tr>

                                                            </tbody>
                                                        </table>
                                                <?php
                                                          endforeach; 
                                                        endif;
                                                ?>
                                                    <!--/section>
                                                </div-->
                                              </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                           </section>								
                          </div>
                      </section>
                  </div>
              </div>


                  <?php
				  /*
                  <div class="col-sm-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Handle Contact
                          </header>
                          <table class="table table-striped">
                              <thead>
                              <tr>
                                  <th>#</th>
                                  <th>First Name</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr>
                                  <td>1</td>
                                  <td>Mark</td>
                              </tr>
                              </tbody>
                          </table>
                      </section>
                  </div>
				  */
				  ?>
		
				  
	              <!-- page end-->
          </section>
      </section>
      <!--main content end-->	 
	  
	  <?php
	  /*GUIDE DON'T PURGE
<div class="samplebox">
	<div id="checkboxlistDemo">
		<div><input type="checkbox" id="checkbox03[]" value="1" class="chkDemo"> Value 1</div>
		<div><input type="checkbox" id="checkbox03[]" value="2" class="chkDemo"> Value 2</div>
		<div><input type="checkbox" id="checkbox03[]" value="3" class="chkDemo"> Value 3</div>
		<div><input type="checkbox" id="checkbox03[]" value="4" class="chkDemo"> Value 4</div>
		<div><input type="checkbox" id="checkbox03[]" value="5" class="chkDemo"> Value 5</div>
		<div>
    		 <input type="button" value="Get Value Using Class" id="buttonClassDemo" class="samplebutton"> 
             <!--button id="buttonClassDemo" class="samplebutton"><i class="icon-refresh"></i> Update</button-->
			 
    		 <input type="button" value="Get Value Using Parent Tag" id="buttonParentDemo" class="samplebutton">
		</div>
	</div>
</div>		  
	  */
	  ?>
	  
 <script>
     $(document).ready(function () {
	 //alert('jq ok');
          
/*
					$("#btn_update").click(function(e){
		var number_of_checked_checkbox= $("input[id=checkbox-03]:checked").length;
		if(number_of_checked_checkbox==0){
		alert("select any one");
		else{
		$("#qmp_form").submit();
						}
		});

					
		$("input[type='checkbox']").click(function() {
		$("#btn_update").attr("disabled", !$("input[type='checkbox']").is(":checked"));
		});
          */
		$("#btn_update").click(function(e){
		 
		//var number_of_checked_checkbox= $("input[name='checkbox-03[]']:checked").length;
		var nbox= $('input[id^="ccamp"]:checked').length;
				 //var nbox= $('[name="checkbox-03[]"]:checked').length;
		var count_ = 0;
		 
		//var allCheckBox = $("[id^='checkbox-03']");
		//var count_checked = allCheckBox.filter(":checked").length; 
/*
			nbox.each(function() {
		count++;
				});
		
*/
	      
/*
			if($("input[name='checkbox-03[]']:checked").length > 0)) {
            alert("At least 1 checkbox checked!");
			 }			
			*/
            //alert(nbox+' Should be chosen');
			
			if(nbox < 10) {
            //alert('You\'ve chosen '+ nbox+' questions.  At least 10 is required to continue.');
            alert('You did not make any selection.');
			
			return false;

			}
			
//return false;
		});
					 
     });
</script>
    <?php $base_url = base_url(); ?>
	<script src='<?php echo $base_url; ?>web/js/print_lib.js' type='text/javascript'></script>
	<script src='<?php echo $base_url; ?>web/js/calendar-setup.js' type='text/javascript'></script>
	<script src='<?php echo $base_url; ?>web/js/calendar.js' type='text/javascript'></script>
	<script src='<?php echo $base_url; ?>web/js/calendar-core.js' type='text/javascript'></script>
	<script type='text/javascript' src='<?php echo $base_url; ?>web/js/calender/mycal-en.js'></script>
	<link rel='stylesheet' type='text/css' media='screen' href='<?php echo $base_url; ?>web/css/mycal.css' />


    <script type="text/javascript" src="<?php echo $base_url; ?>assets/data-tables/jquery.dataTables.js"></script>
    <script type="text/javascript" src="<?php echo $base_url; ?>assets/data-tables/DT_bootstrap.js"></script>	

      <!--script for this page only-->
      <script src="<?php echo $base_url; ?>js/editable-table.js"></script>

      <!-- END JAVASCRIPTS -->
      <script>
          jQuery(document).ready(function() {
              EditableTable.init();
          });
      </script>
	
	<?php
	/*
	
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/advanced-datatable/media/js/jquery.js"></script>	
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>assets/advanced-datatable/media/js/jquery.dataTables.js"></script>	
     */
	 ?>
  
	
         <?php 
            //calls the stylesheet for this particular data table to be displayed correctly   
              //include('templates/datatablestyle.php'); ?>



<?php //include('templates/footer.php'); ?>