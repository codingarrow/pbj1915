<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
    <?php echo "Welcome ".$this->session->userdata('username');?>
     &nbsp;&nbsp;
    <a href="<?=site_url('user/logout')?>" style="float: right;">logout</a>



    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example2">
        <thead>
        <tr>

            <th>username</th>
            <th>email</th>
            <th>gender</th>
            <th>Action</th>

            <!--th class="numeric">Notes</th-->
        </tr>
        </thead>
        <tbody>
        <?php if ( $max_posts ) : ?>
            <?php foreach( $rows as $results ) : $empid=$results['id'];?>
                <tr>
                    <td><?php echo $results['username']; ?>&nbsp;</td>
                    <td><?php echo $results['email']; ?></td>
                    <td><?php echo $results['gender']; ?></td>
                    <td>
                        <div class="pull-right hidden-phone">
                            <!--button class="btn btn-success btn-xs"><i class="icon-ok"></i></button-->
                            <?php //if ($results['admin'] == 1) { ?>
                                <!--span class="badge badge-sm label-inverse">Admin</span-->
                            <?php //}?>
                            <!--i class="icon-lock"></i-->
                            <!--a title="Schedule" href="<?php //echo site_url("tks/edit_shiftsched/{$empid}")?>"><button class="btn btn-primary btn-xs"><i class="icon-calendar"></i></button></a-->

                            <a title="Edit" href="<?php echo site_url("user/edit_userlist/{$empid}")?>">Edit<button class="btn btn-primary btn-xs"><i class="icon-pencil"></i></button></a>

                            <a title="Delete" onclick="return confirm('Deleting this user will also delete the other records referenced to this, are you sure?');" href="<?php echo site_url("user/purge_userlist/{$empid}")?>">Purge<button class="btn btn-danger btn-xs"><i class="icon-trash "></i></button></a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>


</body>
</html>