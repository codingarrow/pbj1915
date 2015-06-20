<?php //include('templates/header.php'); ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
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

           <div class="form">
               <form accept-charset="utf-8" class="cmxform form-horizontal tasi-form" id="signupForm" method="post" action="<?php echo site_url()?>/tks/edit_employee/">

                 <div class="col-lg-6">
                     <section class="panel">
                         <header class="panel-heading">
                             Edit Employee
                         </header>
                         <div class="panel-body">

                                  <?php
                                  /*
                                     <input type="hidden" name="em_contact_person" value="--" />
                                     <input type="hidden" name="em_contact_address" value="--" />
                                     <input type="hidden" name="gumi_email" value="--" />

                                     <input type="hidden" name="position" value="--" />
                                     <input type="hidden" name="cellphone" value="--" />
                                     <input type="hidden" name="sss-no" value="--" />
                                     <input type="hidden" name="tin_no" value="--" />
                                     <input type="hidden" name="philhealthno" value="--" />
                                     <input type="hidden" name="pagibig_no" value="--" />
                                  */
                                  ?>

                                     <input type="hidden" name="id" value="<?php echo $entry->empid; ?>"/>

                                     <div class="form-group ">
                                         <label for="department" class="control-label col-lg-2">Department</label>
                                         <div class="col-lg-10">
                                             <!--input class=" form-control" id="department" name="department" type="text" /-->
                                             <!--select id="department" name="department" class="form-control m-bot15">
                                                 <option>Option 1</option>
                                                 <option>Option 2</option>
                                                 <option>Option 3</option>
                                             </select-->
                                             <?php echo form_dropdown('department', $print_department, $entry->deptid,'class="form-control m-bot15"'); ?>

                                         </div>
                                     </div>



                                     <div class="form-group "><?php //echo $entry->employment_status?>
                                         <label for="employment_status" class="control-label col-lg-2">Employment Status</label>
                                         <div class="col-lg-10">
                                             <!--input class=" form-control" id="employment_status" name="employment_status" type="text" /-->

                                             <select id="employment_status" name="employment_status" class="form-control m-bot15">
                                              <option value="probationary" <?php if($entry->employment_status == "probationary") { echo "selected"; } ?>>probationary</option>
                                              <option value="regular" <?php if($entry->employment_status == "regular") { echo "selected"; } ?>>regular</option>
                                              <option value="resigned" <?php if($entry->employment_status == "resigned") { echo "selected"; } ?>>resigned</option>
                                            </select>


                                         </div>
                                     </div>

                                     <div class="form-group ">
                                         <label for="login" class="control-label col-lg-2">Username</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->login; ?>" class=" form-control" maxlength="99" id="login" name="login" type="text" />
                                         </div>
                                     </div>

                                     <div class="form-group ">
                                         <label for="lastname" class="control-label col-lg-2">Lastname</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->lastname; ?>" class=" form-control" maxlength="250" id="lastname" name="lastname" type="text" />
                                         </div>
                                     </div>

                                     <div class="form-group ">
                                         <label for="firstname" class="control-label col-lg-2">Firstname</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->firstname; ?>" class=" form-control" maxlength="250" id="firstname" name="firstname" type="text" />
                                         </div>
                                     </div>

                                     <div class="form-group ">
                                         <label for="minit" class="control-label col-lg-2">Middle</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->minit; ?>" class=" form-control" maxlength="48" id="minit" name="minit" type="text" />
                                         </div>
                                     </div>

                                     <div class="form-group ">
                                         <label for="nickname" class="control-label col-lg-2">Nickname</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->nickname; ?>" class=" form-control" maxlength="149" id="nickname" name="nickname" type="text" />
                                         </div>
                                     </div>
                                     <div class="form-group ">
                                         <label for="skype_id" class="control-label col-lg-2">Skype ID</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->skype_id; ?>" class=" form-control" maxlength="99" id="skype_id" name="skype_id" type="text" />
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label for="date_hired" class="control-label col-md-3">Date Hired</label>
                                         <div class="col-md-3 col-xs-11">
                                             <input value="<?php echo $entry->date_hired; ?>" class="form-control form-control-inline input-medium default-date-picker"  id="date_hired" name="date_hired" size="16" type="text" value="<?php echo $this->config->item('date_MDYonly');?>" />
                                             <span class="help-block">Select date</span>
                                         </div>
                                     </div>

                                     <div class="form-group">
                                         <label for="birth_date" class="control-label col-md-3">Birth Date</label>
                                         <div class="col-md-3 col-xs-11">
                                             <input value="<?php echo $entry->dob; ?>" class="form-control form-control-inline input-medium default-date-picker"  id="birth_date" name="birth_date" size="16" type="text" value="<?php echo $this->config->item('date_MDYonly');?>" />
                                             <span class="help-block">Select date</span>
                                         </div>
                                     </div>

                                     <!--div class="form-group ">
                                         <label for="position" class="control-label col-lg-2">Position</label>
                                         <div class="col-lg-10">
                                             <input maxlength="99" class=" form-control" id="position" name="position" type="text" />
                                         </div>
                                     </div-->

                                     <div class="form-group ">
                                         <label for="gender" class="control-label col-lg-2">Gender</label>
                                         <div class="col-lg-10">
                                             <!--input class=" form-control" id="gender" name="gender" type="text" /-->

                                             <select id="gender" name="gender" class="form-control m-bot15">
                                              <option value="m" <?php if($entry->gender == "m") { echo "selected"; } ?>>M</option>
                                              <option value="f" <?php if($entry->gender == "f") { echo "selected"; } ?>>F</option>
                                            </select>

                                         </div>
                                     </div>

                                     <div class="form-group ">
                                         <label for="email" class="control-label col-lg-2">Email</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->email; ?>" maxlength="250" class="form-control " id="email" name="email" type="email" />
                                         </div>
                                     </div>

                                     <div class="form-group ">
                                         <label for="address1" class="control-label col-lg-2">Address</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->address1; ?>" maxlength="250" value="--" class="form-control " id="address1" name="address1" type="text" />
                                         </div>
                                     </div>



                            </div>
                        </section>
                     </div>


                 <div class="col-lg-6">
                         <section class="panel">
                             <header class="panel-heading">
                                 Other Details
                                 <span class="tools pull-right">
                                   <a href="javascript:;" class="fa fa-chevron-down"></a>
                                   <a href="javascript:;" class="fa fa-times"></a>
                               </span>
                             </header>


                             <div class="panel-body">
                                     <div class="form-group ">
                                         <label for="position" class="control-label col-lg-2">Position</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->position; ?>" maxlength="99" class="form-control " id="position" name="position" type="text" />
                                         </div>
                                     </div>

                                     <div class="form-group ">
                                         <label for="cellphone" class="control-label col-lg-2">Mobile</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->cellphone; ?>" maxlength="99" class="form-control " id="cellphone" name="cellphone" type="text" />
                                         </div>
                                     </div>                                  

                                     <div class="form-group ">
                                         <label for="gumi_email" class="control-label col-lg-2">Gumi Email</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->gumi_email; ?>" maxlength="100" class="form-control " id="gumi_email" name="gumi_email" type="text" />
                                         </div>
                                     </div>                                  


                                     <div class="form-group ">
                                         <label for="sss-no" class="control-label col-lg-2">SSS</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->cellphone; ?>" maxlength="49" class="form-control " id="sss-no" name="sss-no" type="text" />
                                         </div>
                                     </div>                                  

                                     <div class="form-group ">
                                         <label for="tin-no" class="control-label col-lg-2">TIN</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->tin_no; ?>" maxlength="49" class="form-control " id="tin_no" name="tin_no" type="text" />
                                         </div>
                                     </div>                                  
                                     <div class="form-group ">
                                         <label for="philhealth_no" class="control-label col-lg-2">Philhealth</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->philhealth_no; ?>" maxlength="49" class="form-control " id="philhealth_no" name="philhealth_no" type="text" />
                                         </div>
                                     </div>                                  

                                     <div class="form-group ">
                                         <label for="pagibig_no" class="control-label col-lg-2">Pagibig</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->pagibig_no; ?>" maxlength="49" class="form-control " id="pagibig_no" name="pagibig_no" type="text" />
                                         </div>
                                     </div>                                  

                                     <div class="form-group ">
                                         <label for="em_contact_no" class="control-label col-lg-2">Emergency Contact No</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->em_contact_no; ?>" maxlength="49" class="form-control " id="em_contact_no" name="em_contact_no" type="text" />
                                         </div>
                                     </div>                                  


                                     <div class="form-group ">
                                         <label for="em_contact_person" class="control-label col-lg-2">Emergency Contact Person</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->em_contact_person; ?>" maxlength="100" class="form-control " id="em_contact_person" name="em_contact_person" type="text" />
                                         </div>
                                     </div>                                  

                                     <div class="form-group ">
                                         <label for="em_contact_address" class="control-label col-lg-2">Emergency Contact Address</label>
                                         <div class="col-lg-10">
                                             <input value="<?php echo $entry->em_contact_address; ?>" maxlength="499" class="form-control " id="em_contact_address" name="em_contact_address" type="text" />
                                         </div>
                                     </div>                                  

                                        <div class="form-group">
                                            <div class="col-lg-offset-2 col-lg-10">
                                                <input class="btn btn-danger" type="submit" value="Save" />
                                                <!--button class="btn btn-danger" type="submit">Save</button-->
                                                <button class="btn btn-default" type="button">Cancel</button>
                                            </div>
                                        </div>
                             </div>
                      </section>
                  </div>

               </form>
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



<?php //include('templates/footer.php'); ?>