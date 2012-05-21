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
					<div class="nav-collapse">
						<ul class="nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div><!--/.nav-collapse -->
					
          <div class="btn-group pull-right">
            <a class="btn" href="<?php echo site_url('login'); ?>">
              <i class="icon-user"></i> Login
              <span class="caret"></span>
            </a>
          </div>					
					
				</div>
			</div>
		</div>

		<header>
			<div class="container">
				<div class="row">
					<div class="span6">
						<h1>This is my header</h1>
						<p>This is my site slogan</p>
					</div>
					<div class="span6">
						<p>Proin id libero molestie ante faucibus tincidunt sit amet ac nisi. Mauris feugiat ultricies magna eu laoreet. Nunc tincidunt tempus leo vitae gravida.
						</p>
				</div>
			</div>
		</header>

		<div id="body">
			<div class="container">
				<div class="row">
					<div id="content" class="span8">
						<ul class="posts">
							<li class="post">
								<h2>Praesent laoreet elit vel augue porttitor eu adipiscing risus egestas</h2>
								<div class="meta">April 19, 2012 12:00 am</div>
								<div class="entry">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere nisl a sem scelerisque fermentum. Fusce semper tempor lacinia. Nam dictum aliquet dictum. Ut sit amet lorem ante, a pulvinar sapien. Nam pharetra aliquet vestibulum. In cursus hendrerit purus, ut iaculis lacus vehicula vel. Duis varius, leo eu facilisis fringilla, nibh lacus mollis libero, a fringilla tortor elit non dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec a odio in mi rutrum lacinia. Ut eget elit a magna gravida pretium. Quisque sed turpis nisl. Praesent commodo malesuada egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>

									<p>Praesent laoreet elit vel augue porttitor eu adipiscing risus egestas. Donec luctus ligula nec tortor porta ut sodales neque ultrices. Sed rhoncus metus non est ullamcorper aliquet. Morbi eu blandit nibh. Donec dictum iaculis diam nec pulvinar. Morbi auctor hendrerit aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
								</div>
								<a href="#">Read More</a>
							</li>
							<li class="post">
								<h2>Praesent laoreet elit vel augue porttitor eu adipiscing risus egestas</h2>
								<div class="meta">April 19, 2012 12:00 am</div>
								<div class="entry">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere nisl a sem scelerisque fermentum. Fusce semper tempor lacinia. Nam dictum aliquet dictum. Ut sit amet lorem ante, a pulvinar sapien. Nam pharetra aliquet vestibulum. In cursus hendrerit purus, ut iaculis lacus vehicula vel. Duis varius, leo eu facilisis fringilla, nibh lacus mollis libero, a fringilla tortor elit non dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec a odio in mi rutrum lacinia. Ut eget elit a magna gravida pretium. Quisque sed turpis nisl. Praesent commodo malesuada egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>

									<p>Praesent laoreet elit vel augue porttitor eu adipiscing risus egestas. Donec luctus ligula nec tortor porta ut sodales neque ultrices. Sed rhoncus metus non est ullamcorper aliquet. Morbi eu blandit nibh. Donec dictum iaculis diam nec pulvinar. Morbi auctor hendrerit aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
								</div>
								<a href="#">Read More</a>
							</li>
							<li class="post">
								<h2>Praesent laoreet elit vel augue porttitor eu adipiscing risus egestas</h2>
								<div class="meta">April 19, 2012 12:00 am</div>
								<div class="entry">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce posuere nisl a sem scelerisque fermentum. Fusce semper tempor lacinia. Nam dictum aliquet dictum. Ut sit amet lorem ante, a pulvinar sapien. Nam pharetra aliquet vestibulum. In cursus hendrerit purus, ut iaculis lacus vehicula vel. Duis varius, leo eu facilisis fringilla, nibh lacus mollis libero, a fringilla tortor elit non dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec a odio in mi rutrum lacinia. Ut eget elit a magna gravida pretium. Quisque sed turpis nisl. Praesent commodo malesuada egestas. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>

									<p>Praesent laoreet elit vel augue porttitor eu adipiscing risus egestas. Donec luctus ligula nec tortor porta ut sodales neque ultrices. Sed rhoncus metus non est ullamcorper aliquet. Morbi eu blandit nibh. Donec dictum iaculis diam nec pulvinar. Morbi auctor hendrerit aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
								</div>
								<a href="#">Read More</a>
							</li>

						</ul>
					</div>
					<div id="sidebar" class="span4">
						<div class="widget">
							Praesent laoreet elit vel augue porttitor eu adipiscing risus egestas. Donec luctus ligula nec tortor porta ut sodales neque ultrices. Sed rhoncus metus non est ullamcorper aliquet. Morbi eu blandit nibh. Donec dictum iaculis diam nec pulvinar. Morbi auctor hendrerit aliquam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.
						</div>
					</div>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<div class="row">
					<div class="span6">&copy; Copyright 2012</div>
					<div class="span6"></div>
				</div>
			</div>
		</footer>
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
		<script src="<?php echo base_url('js/bootstrap.min.js');?>"></script>
	</body>
</html>