<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>My Blog</title>

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
		width:500px; 
		height:41px; 
		position:absolute; 
		margin:11px 0 0; 
		padding:0 29px 0 0; 
		border-style:solid;
		left: 120px;
	}
ul li{
	float:left; 
	font:12px/36px "Trebuchet MS",Arial, Helvetica, sans-serif; 
	font-weight:bold;
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
</head>
<body>

<div id="container">
	<h1>Welcome <?php echo $username; ?> to my blog</h1>

	<ul>
	<li><a href="#">Home</a></li>
	<li><a href="<?php echo base_url('index.php/clogin'); ?>">Login</a></li>
	<li><a href="#">About us</a></li>
	<li><a href="#">Contact</a></li>
	<li><a href="cblog/logout">Logout</a></li>
	</ul>
	<div id="body">
	
</div>

</body>
</html>


