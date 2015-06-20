<?php //include('templates/header.php'); ?>
        <!--script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script--> 
        <!--link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/ui-lightness/jquery-ui.css" type="text/css" media="screen"/-->	

	    <!--script src="<?php //echo base_url();?>js/jquery.dataTables.min.js"></script-->

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


              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Responsive table
                          </header>
                          <div class="panel-body">
                              <section id="unseen">
                                <table class="table table-bordered table-striped table-condensed">
                                  <thead>
                                  <tr>
                                      <th>Code</th>
                                      <th>Company</th>
                                      <th class="numeric">Price</th>
                                      <th class="numeric">Change</th>
                                      <th class="numeric">Change %</th>
                                      <th class="numeric">Open</th>
                                      <th class="numeric">High</th>
                                      <th class="numeric">Low</th>
                                      <th class="numeric">Volume</th>
                                  </tr>
                                  </thead>
                                  <tbody>
                                  <tr>
                                      <td>AAC</td>
                                      <td>AUSTRALIAN AGRICULTURAL COMPANY LIMITED.</td>
                                      <td class="numeric">$1.38</td>
                                      <td class="numeric">-0.01</td>
                                      <td class="numeric">-0.36%</td>
                                      <td class="numeric">$1.39</td>
                                      <td class="numeric">$1.39</td>
                                      <td class="numeric">$1.38</td>
                                      <td class="numeric">9,395</td>
                                  </tr>
                                  <tr>
                                      <td>AAD</td>
                                      <td>ARDENT LEISURE GROUP</td>
                                      <td class="numeric">$1.15</td>
                                      <td class="numeric">  +0.02</td>
                                      <td class="numeric">1.32%</td>
                                      <td class="numeric">$1.14</td>
                                      <td class="numeric">$1.15</td>
                                      <td class="numeric">$1.13</td>
                                      <td class="numeric">56,431</td>
                                  </tr>
                                  <tr>
                                      <td>AAX</td>
                                      <td>AUSENCO LIMITED</td>
                                      <td class="numeric">$4.00</td>
                                      <td class="numeric">-0.04</td>
                                      <td class="numeric">-0.99%</td>
                                      <td class="numeric">$4.01</td>
                                      <td class="numeric">$4.05</td>
                                      <td class="numeric">$4.00</td>
                                      <td class="numeric">90,641</td>
                                  </tr>
                                  <tr>
                                      <td>ABC</td>
                                      <td>ADELAIDE BRIGHTON LIMITED</td>
                                      <td class="numeric">$3.00</td>
                                      <td class="numeric">  +0.06</td>
                                      <td class="numeric">2.04%</td>
                                      <td class="numeric">$2.98</td>
                                      <td class="numeric">$3.00</td>
                                      <td class="numeric">$2.96</td>
                                      <td class="numeric">862,518</td>
                                  </tr>
                                  <tr>
                                      <td>ABP</td>
                                      <td>ABACUS PROPERTY GROUP</td>
                                      <td class="numeric">$1.91</td>
                                      <td class="numeric">0.00</td>
                                      <td class="numeric">0.00%</td>
                                      <td class="numeric">$1.92</td>
                                      <td class="numeric">$1.93</td>
                                      <td class="numeric">$1.90</td>
                                      <td class="numeric">595,701</td>
                                  </tr>
                                  <tr>
                                      <td>ABY</td>
                                      <td>ADITYA BIRLA MINERALS LIMITED</td>
                                      <td class="numeric">$0.77</td>
                                      <td class="numeric">  +0.02</td>
                                      <td class="numeric">2.00%</td>
                                      <td class="numeric">$0.76</td>
                                      <td class="numeric">$0.77</td>
                                      <td class="numeric">$0.76</td>
                                      <td class="numeric">54,567</td>
                                  </tr>
                                  <tr>
                                      <td>ACR</td>
                                      <td>ACRUX LIMITED</td>
                                      <td class="numeric">$3.71</td>
                                      <td class="numeric">  +0.01</td>
                                      <td class="numeric">0.14%</td>
                                      <td class="numeric">$3.70</td>
                                      <td class="numeric">$3.72</td>
                                      <td class="numeric">$3.68</td>
                                      <td class="numeric">191,373</td>
                                  </tr>
                                  <tr>
                                      <td>ADU</td>
                                      <td>ADAMUS RESOURCES LIMITED</td>
                                      <td class="numeric">$0.72</td>
                                      <td class="numeric">0.00</td>
                                      <td class="numeric">0.00%</td>
                                      <td class="numeric">$0.73</td>
                                      <td class="numeric">$0.74</td>
                                      <td class="numeric">$0.72</td>
                                      <td class="numeric">8,602,291</td>
                                  </tr>
                                  <tr>
                                      <td>AGG</td>
                                      <td>ANGLOGOLD ASHANTI LIMITED</td>
                                      <td class="numeric">$7.81</td>
                                      <td class="numeric">-0.22</td>
                                      <td class="numeric">-2.74%</td>
                                      <td class="numeric">$7.82</td>
                                      <td class="numeric">$7.82</td>
                                      <td class="numeric">$7.81</td>
                                      <td class="numeric">148</td>
                                  </tr>
                                  <tr>
                                      <td>AGK</td>
                                      <td>AGL ENERGY LIMITED</td>
                                      <td class="numeric">$13.82</td>
                                      <td class="numeric">  +0.02</td>
                                      <td class="numeric">0.14%</td>
                                      <td class="numeric">$13.83</td>
                                      <td class="numeric">$13.83</td>
                                      <td class="numeric">$13.67</td>
                                      <td class="numeric">846,403</td>
                                  </tr>
                                  <tr>
                                      <td>AGO</td>
                                      <td>ATLAS IRON LIMITED</td>
                                      <td class="numeric">$3.17</td>
                                      <td class="numeric">-0.02</td>
                                      <td class="numeric">-0.47%</td>
                                      <td class="numeric">$3.11</td>
                                      <td class="numeric">$3.22</td>
                                      <td class="numeric">$3.10</td>
                                      <td class="numeric">5,416,303</td>
                                  </tr>
                                  </tbody>
                              </table>
                              </section>
                          </div>
                      </section>
                  </div>
              </div>
        */

			  ?>


             <div class="row">
              <?php
              /*
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

                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Responsive table
                          </header>
                          <div class="panel-body">
                              <section id="unseen">
                                <table class="table table-bordered table-striped table-condensed">
                                  <thead>
                                  <tr>

              */
              ?>

                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Employees
                          </header>
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-l1st1ng">
                                      <thead>
                                      <tr>                  



                                      <th>Lastname</th>
                                      <th>Firstname</th>
                                      <th>Email</th>
                                      <th>Action</th>

                                      <!--th class="numeric">Notes</th-->
                                  </tr>
                                  </thead>
                                  <tbody>
                                    <?php if ( $max_posts ) : ?>
                                        <?php foreach( $rows as $results ) : $empid=$results['empid'];?>
                                            <tr>
                                                <td><?php echo $results['lastname']; ?>&nbsp;</td>
                                                <td><?php echo $results['firstname']; ?></td>
                                                <td><?php echo $results['email']; ?></td>
                                                <td>
                                                  <div class="pull-right hidden-phone">
                                                      <!--button class="btn btn-success btn-xs"><i class="icon-ok"></i></button-->
                                                      <a title="Edit" href="<?php echo site_url("tks/edit_employeemasterlist/{$empid}")?>"><button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>
                                                      
                                                      <button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button>
                                                  </div>                                                  
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>

                                </tbody>
              </table>
              </div>
              </div>                            
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