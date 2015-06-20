<div class="well">
    <div class="errorresponse">
         
    </div>
    <form class="form" id="frmupdate" role="form" action="<?=site_url('admin/menu/update')?>" method="POST">
    <?php foreach($query->result() as $row):?>
                         
                            <div class="form-group">
                            <label for="exampleInputEmail2">Description</label>
                            <input type="text" name="description" class="form-control" value="<?php echo $row->description?>">
                          </div>
                          <div class="form-group">
                            <label for="exampleInputEmail2">Page Link</label>
                            <input class="form-control" name="pagelink" type="text" value="<?php echo $row->pagelink?>" >
                          </div>
                          <div class="form-group">
                            <label for="exampleInputPassword2">Menu Order</label>
                            <input type="text" class="form-control" name="menuorder" value="<?php echo $row->menuorder?>">
                          </div>
                            <div class="form-group">
                            <label for="exampleInputPassword2">Parent Menu</label>
                            <input type="text" name="menu_parent_id" class="form-control" value="<?php echo $row->menu_parent_id?>">
                          </div>
                            <div class="form-group">
                                <input type="hidden" name="hidden" value="<?php echo $id ?>"/>
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