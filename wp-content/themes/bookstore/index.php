<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta charset="UTF-8">
		<meta name=viewport content="width=device-width, initial-scale=1">
		<title>Đọc Truyện Online</title>
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" />
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css" />

		<script type="text/javascript">
		    var ajax_url = "<?php echo admin_url('admin-ajax.php'); ?>";
		</script>
		<?php wp_head(); ?>
	</head>
	<body>
		<header id="header-container">
			<div class="top-header-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="top-header">
								<a href="#" class="pull-left logo"><h1>Đọc Truyện</h1></a>
								
								<div class="search-area pull-right">
									<form class="form-inline float-lg-right">
								      <input class="form-control" type="text" placeholder="Search">
								      <button class="btn btn-outline-success" type="submit">Search</button>
								    </form>
								</div>
							</div><!--end top-header-->
						</div>
					</div>
				</div>
			</div>
			
			<div class="under-header-area">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<!-- Collect the nav links, forms, and other content for toggling -->
				            <nav class="navbar navbar-default" role="navigation">
				            	<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"></button>
						        <?php
						            wp_nav_menu( array(
						                'menu'              => 'primary-menu',
						                'theme_location'    => 'primary-menu',
						                'depth'             => 2,
						                'container'         => 'div',
						                'container_class'   => 'collapse navbar-toggleable-md',
						        		'container_id'      => 'navbarResponsive',
						                'menu_class'        => 'nav navbar-nav',
						                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						                'walker'            => new wp_bootstrap_navwalker())
						            );
						        ?>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<div id="slider-container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8">
						<div class="main-slider sliders">
							<a href="#"><img src="<?php bloginfo('template_url') ;?>/images/slider1.jpg" alt="main slider" /></a>
						</div><!--end main-slider-->
					</div>
					<div class="col-lg-4">
						<a href="#" class="slider-child">
							<img src="<?php bloginfo('template_url') ;?>/images/slider1.jpg" alt="main slider" />
						</a>
						<a href="#" class="slider-child">
							<img src="<?php bloginfo('template_url') ;?>/images/slider1.jpg" alt="main slider" />
						</a>
					</div>
				</div>
			</div>
		</div><!--end slider-container-->

		<div id="main-container">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
						<div class="main-area">
							<div class="row">
								<div class="col-lg-12">
									<ul class="block-title">
										<li><h3 class="title-area">TRUYEN DE CU</h3></li>
										<li class="more-item"><a href="#">Xem Them</a></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan dasasdsadasdasdasdasdasd</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan dasasdsadasdasdasdasdasd</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

							</div>
						</div>

						<div class="main-area">
							<div class="row">
								<div class="col-lg-12">
									<ul class="block-title">
										<li><h3 class="title-area">TRUYEN MOI CAP NHAT</h3></li>
										<li class="more-item"><a href="#">Xem Them</a></li>
									</ul>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan dasasdsadasdasdasdasdasd</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan dasasdsadasdasdasdasdasd</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

								<div class="col-lg-4 col-md-4">
									<figure class="block-books">
										<div class="new-item">Hot</div>
										<a href="#">
											<img src="http://thichdoctruyen.com/images/thumb_v2/194_1444711965697-hon-trom-55-lan.jpg" />
										</a>
										<figcaption class="block-chapter">
											<hgroup>
												<h5>Hon trom 55 lan</h5>
												<h6>Chuong 32</h6>
											</hgroup>
										</figcaption>
									</figure>
								</div>

							</div>
						</div>
					</div><!--end col-lg-9 col-md-9 col-sm-12 col-xs-12-->

					<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
						<div class="sidebar-area">
							<div class="block-title">
								<span>Truyen Hot</span>
							</div>

							<ul>
								<li>
									<figure class="block-hot">
										<img class="pull-left" src="http://thichdoctruyen.com/images/thumb_v2/51_1444711965697-hon-trom-55-lan.jpg" ?>
										<figcaption><a href="#">Hon trom 55 lan</a></figcaption>
									</figure>
								</li>
								<li>
									<figure class="block-hot">
										<img class="pull-left" src="http://thichdoctruyen.com/images/thumb_v2/51_1444711965697-hon-trom-55-lan.jpg" ?>
										<figcaption><a href="#">Hon trom 55 lan</a></figcaption>
									</figure>
								</li>
								<li>
									<figure class="block-hot">
										<img class="pull-left" src="http://thichdoctruyen.com/images/thumb_v2/51_1444711965697-hon-trom-55-lan.jpg" ?>
										<figcaption><a href="#">Hon trom 55 lan</a></figcaption>
									</figure>
								</li>
							</ul>
						</div><!--end sidebar-area-->
					</div><!--end col-lg-3 col-md-3 col-sm-12 col-xs-12-->
				</div>
			</div><!--end container-fluid-->
		</div><!--end main-container-->

		<footer id="footer-container">
			<div class="container-fluid">
				<div class="row">

				</div>
			</div>
		</footer>
	</body>
</html>