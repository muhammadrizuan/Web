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
	ul li{
		float: left;
		list-style: none;
		padding: 5px;
	}
	#dform{
		text-align: left;
		padding: 15px;
		border-style:solid;
	}

	ul{
		display:block; 
		width:350px; 
		height:41px; 
		position:absolute; 
		margin:11px 0 0; 
		padding:0 29px 0 0; 
		border-style:solid;
		left: 120px;

	}
ul li a{
	width:74px; 
	height:36px; 
	display:block; 
	padding:0; 
	color:#555; 
	background:#fff; 
	text-decoration:none; 
	text-align:center; 
	margin:0 1px 0 0; 
	top:0px; 
	left:0px;
}
ul li a:hover{
	width:74px; 
	height:36px; 
	text-decoration:none; 
	background:url(images/button.gif) 
	no-repeat 0 0 #AEAEAE; 
	color:#fff;
}
ul li.active{
	width:74px; 
	display:block; 
	height:36px; 
	background:url(images/button.gif) no-repeat 0 0 #AEAEAE; 
	color:#fff; 
	text-align:center; 
	margin:0 1px 0 0;
}


	</style>
	<script language="javascript" src="js/bootstrap_new.js"></script>
	<script language="javascript" src="js/bootsrap_new.min.js"></script>
</head>
<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<a class="navbar-brand" href="#">My Blog</a>
<div class="btn-group pull-right">
<a href="#" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  create note
</a>

</div>
</div>
<br/>
<div id="container">
	<h1>Welcome to Login</h1>

	<div id="body">
 
		<div id="dform">
		<?php echo validation_errors(); ?>

		<?php echo form_open('verifylogin'); ?>

		<h5>Username</h5>
		<input type="text" name="username" value="" size="50" />

		<h5>Password</h5>
		<input type="password" name="password" value="" size="50" />
		<br/><br/>
		
		<input type="submit" value="Login" class="btn btn-success">
		<a href="<?php echo site_url('/clogin/register');?>" value="Register" class="btn btn-primary">Register</a>
		</form>
		</div>
	</div>

	<p class="footer">Created by W@N</p>

</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Modal title</h4>
      </div>
      <div class="modal-body">
        <p>One fine body&hellip;</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

</body>
</html>
