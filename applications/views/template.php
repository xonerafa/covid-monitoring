
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

		<!-- META DATA -->
		<title><?php echo $title; ?> | Pantau Corona</title>
		
  		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  		<link rel="shortcut icon" href="<?php echo base_url('assets/'); ?>uploads/icon01.png">
		<!-- BOOTSTRAP CSS -->
		<link href="<?php echo base_url('assets/'); ?>data/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

		<!-- STYLE CSS -->
		<link href="<?php echo base_url('assets/'); ?>data/css/newstyle.css" rel="stylesheet">
		<link href="<?php echo base_url('assets/'); ?>data/css/skin-modes.css" rel="stylesheet">

		<!--HORIZONTAL CSS-->
		<link href="<?php echo base_url('assets/'); ?>data/plugins/horizontal-menu/horizontal-menu.css" rel="stylesheet">

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="<?php echo base_url('assets/'); ?>data/plugins/scroll-bar/jquery.mCustomScrollbar.css" rel="stylesheet">

		<!--- FONT-ICONS CSS -->
		<link href="<?php echo base_url('assets/'); ?>data/css/icons.css" rel="stylesheet">

		<!-- SIDEBAR CSS -->
		<link href="<?php echo base_url('assets/'); ?>data/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?php echo base_url('assets/'); ?>data/colors/color1.css">
	</head>

	<body>

		<!-- PAGE -->
		<div class="page">
			<div class="page-main">

				<!-- HEADER -->
				<div class="header hor-header">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<div class="">
								<a class="header-brand1" href="<?php echo base_url(); ?>">
									<img src="<?php echo base_url('assets/uploads/head01.png'); ?>" class="header-brand-img desktop-logo" alt="logo">
									<img src="<?php echo base_url('assets/uploads/head01.png'); ?>" class="header-brand-img light-logo" alt="logo">
								</a><!-- LOGO -->
							</div>
							<div class="d-flex  ml-auto header-right-icons header-search-icon">

								<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
								    <li aria-haspopup="true"><a href="<?php echo base_url('global'); ?>"><b>WORLDWIDE</b></a></li>
									<li aria-haspopup="true"><a href="<?php echo base_url(); ?>"><b>INDONESIA</b></a></li>
									<li aria-haspopup="true"><a href="https://www.covid19.go.id/materi-edukasi/" target="_blank"><b>EDUKASI COVID-19</b></a></li>
									
								</ul>
							</nav>
								
								
							</div>
						</div>
					</div>
				</div>
				<!-- End HEADER -->


				<!-- Mobile Header -->
				<div class="mobile-header hor-mobile-header">
					<div class="container">
						<div class="d-flex">
							<a class="animated-arrow hor-toggle horizontal-navtoggle"><span></span></a>
							<a class="header-brand" href="<?php echo base_url(); ?>">
								<img src="<?php echo base_url('assets/uploads/head01.png'); ?>" class="header-brand-img desktop-logo" alt="logo">
								<img src="<?php echo base_url('assets/uploads/head01.png'); ?>" class="header-brand-img desktop-logo mobile-light" alt="logo">
							</a>
							<div class="d-flex order-lg-2 ml-auto header-right-icons">
								
								
								<div class="dropdown d-md-flex">
								<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true"><a href="<?php echo base_url('global'); ?>"><b>WORLDWIDE</b></a></li>
									<li aria-haspopup="true"><a href="<?php echo base_url(); ?>"><b>INDONESIA</b></a></li>
									<li aria-haspopup="true"><a href="https://www.covid19.go.id/materi-edukasi/" target="_blank"><b>EDUKASI COVID-19</b></a></li>
									
								</ul>
							</nav>	
							</div>
							</div>
						</div>
					</div>
				</div>
				
				<!-- /Mobile Header -->

            <?php echo $_content; ?>

			<!-- FOOTER -->
			<footer>
			<div class="footer border-top-0 footer-1">
										<div class="container">
											<div class="row align-items-center">
												<div class="col-lg-12 col-sm-12 mt-3 mt-lg-0 text-center">
												Data Penyebaran Covid-19 © <?php echo date('Y'); ?><br/>
												Updated by <a href="https://www.sarjanakomedi.com">SarjanaKomedi.com</a>
												</div>
											</div>
										</div>
									</div>
								</footer></div>
							</div><!-- COL-END -->
						
			
			<!-- FOOTER END -->
		

		<!-- JQUERY JS -->
		<script src="<?php echo base_url('assets/'); ?>data/js/jquery-3.4.1.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="<?php echo base_url('assets/'); ?>data/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="<?php echo base_url('assets/'); ?>data/plugins/bootstrap/js/popper.min.js"></script>

		<!-- INPUT MASK JS -->
		<script src="<?php echo base_url('assets/'); ?>data/plugins/input-mask/jquery.mask.min.js"></script>

        <!-- CUSTOM SCROLLBAR JS -->
		<script src="<?php echo base_url('assets/'); ?>data/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js"></script>

		<!-- SIDE-MENU JS -->
		<script src="<?php echo base_url('assets/'); ?>data/plugins/horizontal-menu/horizontal-menu.js"></script>

		<!-- SIDEBAR JS -->
		<script src="<?php echo base_url('assets/'); ?>data/plugins/sidebar/sidebar.js"></script>

		<!-- INDEX JS -->
        <script src="<?php echo base_url('assets/'); ?>data/js/index21.js"></script>
		
		<!-- STICKY JS -->
		<script src="<?php echo base_url('assets/'); ?>data/js/stiky.js"></script>

		<!--CUSTOM JS -->
		<script src="<?php echo base_url('assets/'); ?>data/js/custom.js"></script>

	<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="396f5e0f54dcc4033c0fcc31-|49" defer=""></script></body>
</html>