<html>
<head>
<title>Menu Maintenance</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/style.css') ?>" />
<script src="<?php echo base_url('jscript/jquery-1.9.1.min.js') ?>" type="text/javascript"></script>
<!-- jQuery easing plugin -->
<script src="<?php echo base_url('jscript/jquery.easing.min.js') ?>" type="text/javascript"></script>


</head>
<body>

	<div id="container">
		<p id="msg"></p>
		<ul id='navigate'>
		  <li class="navi_sec active"><a id="add_user">Add User</a></li>
		  <li class="navi_sec"><a id='show_user'>All Users</a></li>
		</ul>

		<div id="add_user_sec" class="user_section">
		   <form name='signup' id='signup' action="<?=site_url('admin/users/create')?>" >
			  <div class='row'>
				   <p><label for='username'>First name</label>
					<input type='text' name='firstname' id='firstname' value='' placeholder='Enter First name' /></p>
			   </div>
			   <div class='row'>
				   <p><label for='lastname'>Last name</label>
					<input type='text' name='lastname' id='lastname' value='' placeholder='Enter Last name' /></p>
			   </div>
			   <div class='row'>
				   <p><label for='email'>Email</label>
					<input type='text' name='email' id='email' value='' placeholder='Enter Email' /></p>
			   </div>
			   
			   <input type="hidden" name="actionfunction" value="saveData" />
			   <div class='row'>
				   <input type='button' id='formsubmit' class='submit' value='Submit' />
			   </div>
		   </form>
		</div

		<div id="show_user_sec" class="user_section">
			<table id="userists" cellspacing="0">
			  <tbody>
			   <?php
			    /* //controller will take care of the looping here
				<tr class="head">
				<td>Firstname</td>
				<td>Lastname</td>
				<td>Email</td>
				<td>Favourite Job</td>
				<td></td>
				</tr>
				<tr id="2">
				<td>InfoTuts</td>
				<td>InfoTuts</td>
				<td>InfoTuts@test.com</td>
				<td>Blogging</td>
				<td><input type="button" class="ajaxedit" value="Edit" user="2"> 
				<input type="button" class="ajaxdelete" value="Delete" user="2"></td>
				</tr>
			    */
			   ?>
			  </tbody>
		  </table>
		</div>
		<div id="update_user_sec" class="user_section">

		</div>

	</div>
	<script type="text/javascript" src="<?php echo base_url('jscript/script.js') ?>"></script>	
</body>
</html>