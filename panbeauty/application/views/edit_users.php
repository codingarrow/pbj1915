<!DOCTYPE html>
<html lang="en">
<head>
    <title>Welcome</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <style>
        html, body {height: 100%;}
        *{margin: 0px;padding: 0;}
        .container{
            width: 1000px;
            margin-left: auto;
            margin-right: auto;
            clear: both;
        }
        #header{
            height: 40px;
            background: #658CBF;
        }
        #content{
            padding: 10px;min-height:80%;
        }
        .logo{padding: 3px 0px;font-size: 25px;color: #ffffff;}
        a{text-decoration: none;}
        input{
            padding:3px;
            color:#333333;
            border:1px solid #96A6C5;
            margin-top:2px;
            width:180px;
            font-size:11px;
        }
        input[type='radio']{
            width:30px;
        }
        #register_form input[type='submit']
        {
            margin-left: 108px;
        }
        #register_form{
            width: 400px;
            float: left;
        }
        #register_form label{
            font-weight: bold;
            float: left;
            width: 108px;
        }
        #login_form
        {   float: right;
            position: relative;
            margin-top: 8px !important;
        }
        .error{
            float:left;
            border: 1px solid #FF607D;
            padding: 10px;
        }
    </style>
</head>

<body>

<div id="header" >
    <div class="container">
        <a class="logo" style="float: left;" href<span style="">Ryan Carlo E. Carpio <span style="font-size:10px;">Edit Users</span></a>
        <div id="login_form">

        </div>
    </div>
</div>

<div id="content" class="container">
    <div id="register_form">
        <h1>Sign Up</h1>
        <form accept-charset="utf-8" class="form-horizontal" id="signupForm" method="post" action="<?php echo site_url()?>/user/save_user/">
            <input type="hidden" name="id" value="<?php echo $entry->id; ?>"/>
            <label for="username">User Name</label>
            <input type="text" name="username" value="<?php echo $entry->username; ?>"/>
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php echo $entry->email; ?>" />
            <label for="password">Password</label>
            <!--input type="password" name="password"/-->
            <div>
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="male" <?php if($entry->gender == "male") { echo "CHECKED"; } ?>/>Male
                <input type="radio" name="gender" value="female" <?php if($entry->gender == "female") { echo "CHECKED"; } ?>/>Female
            </div>

            <input style="width:80px;" type="submit" value="Update" name="register"/>
            <a href="<?=site_url('user/showusers')?>"><input style="width:80px;" type="button" value="Cancel" name="cancel"/></a>

        </form>
    </div>
    <br />
    <div class="error">
        <?php echo validation_errors(); ?>
    </div>
</div>
<div id="footer" class="container">
    <hr />
</div>
</body>
</html>