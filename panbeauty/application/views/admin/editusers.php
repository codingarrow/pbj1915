<div class="well">
    <div class="errorresponse">
         
    </div>
    <form class="form" id="frmupdate" role="form" action="<?=site_url('admin/users/update')?>" method="POST">
    <?php foreach($query->result() as $row):?>

                         <?php
                             /*						 
                            <div class="form-group">
                            <label for="exampleInputEmail2">Description</label>
                            <input type="text" name="description" class="form-control" value="echo $row->description">
                           </div>
                             */						 
                         ?>
							 <div class='row'>
							 <p><label for='username'>First name</label>
							 <input type='text' name='firstname' id='firstname' value='<?php echo $row->firstname?>' placeholder='Enter First name' /></p>
							 </div>
							 
							 <div class='row'>
							 <p><label for='lastname'>Last name</label>
							 <input type='text' name='lastname' id='lastname' value='<?php echo $row->lastname?>' placeholder='Enter Last name' /></p>
							 </div>
							 
							 <div class='row'>
							 <p><label for='email'>Email</label>
							 <input type='text' name='email' id='email' value='<?php echo $row->description?>' placeholder='Enter Email' /></p>
							 </div>
	 
                            <div class="form-group">
                                <input type="hidden" name="hidden" value="<?php echo $row->id ?>"/>
                            <input type="submit" class="btn btn-success" id="idSubmit" value="update">
                          </div>
						  
        <?php endforeach;
		   //exampleInputPassword2
		?>
                        </form>
                    </div>
</div>
 
<script>
$(document).ready(function (){
    $("#frmupdate").submit(function(e){
        e.preventDefault();
        $.ajax({
            url:'<?=site_url("admin/menu/update")?>',
            type:'POST',
            dataType:'json',
            data: $("#frmupdate").serialize()
        }).done(function (data){
            window.mydata = data;
                if(mydata['error'] !=""){
                    $(".errorresponse").html(mydata['error']);
                }
                else{
                $(".errorresponse").text('');
                $('#frmupdate')[0].reset();
                $("#response").html(mydata['success']);
                 
                $.colorbox.close();
                $("#response").html(mydata['success']);
                }
        });
    });    
});
 
     
</script>
</body>
</html>