<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HowFrameWork</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
    	<meta name="author" content="">

		<link href="<?php echo base_url('css/bootstrap.css');?>" rel="stylesheet">
		<link href="<?php echo base_url('css/style.css');?>" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	    
	</head>

	<body>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</a>
					
					<a class="brand" href="<?php echo site_url(); ?>">HowFramework</a>
					
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="<?php echo site_url(); ?>">Visit Site</a></li>
						</ul>
					</div><!--/.nav-collapse -->

					<?php if (isset($user['username']) && ($user['username'] != '')) { ?>
					  <div class="btn-group pull-right">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
						  <i class="icon-user"></i> <?php echo $user['username']; ?>
						  <span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
						  <li><a href="#">Profile</a></li>
						  <li class="divider"></li>
						  <li><a href="<?php echo site_url('logout'); ?>">Sign Out</a></li>
						</ul>
					  </div>
					<?php } ?>
				</div>
			</div>
		</div>

		<div id="body">
			<div class="container">
				<div class="row">