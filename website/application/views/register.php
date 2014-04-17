<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Blog</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('/css/bootstrap.css');?>">
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	

	</style>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<a class="navbar-brand" href="<?php echo base_url('index.php');?>">My Blog</a>
</div>
<br/>
<div id="container">
	<h1>Welcome to registration</h1>

	<div id="body">
	<?php echo validation_errors('<p class="error">'); ?>
	<?php echo form_open('clogin/register'); ?>

			<table>
            <tr>
                <td><label for="user_name">User name</label></td>
                <td><input type="text" id="user_name" name="user_name" value="<?php echo set_value('username'); ?>" /></td>
                <?php echo form_error('username'); ?>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="password" /></td>
                <?php echo form_error('password'); ?>
            </tr>
            <tr>
                <td><label for="con_password">Password Confirmation</label></td>
                <td><input type="password" id="con_password" name="con_password" /></td>
                <?php echo form_error('password'); ?>
            </tr>
            <tr>
                <td><label for="email_address">Your Email</label></td>
                <td><input type="text" id="email_address" name="email_address" value="<?php echo set_value('email'); ?>" /></td>
                <?php echo form_error('email'); ?>
            </tr>
            <tr>
            <td><input type="submit" value="Register" class="btn btn-primary"></td>
      		</tr>
      		</table>
       
</form>
		
	</div>

	<p class="footer">Created by W@N</p>

</div>
</body>
</html>
