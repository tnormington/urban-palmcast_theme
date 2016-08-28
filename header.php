<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">

		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">

		<meta property="og:url"           content="<?php echo get_bloginfo('url'); ?>" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="<?php echo get_bloginfo('name'); ?>" />
		<meta property="og:description"   content="<?php echo get_bloginfo('description'); ?>" />
		<meta property="og:image"         content="<?php echo get_template_directory_uri(); ?>/assets/images/logo_on-dark@2x.png" />

		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
			<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#f01d4f">
			<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
	    	<meta name="theme-color" content="#121212">
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

		<script src="https://use.typekit.net/dpt0qod.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

	</head>

	<!-- Uncomment this line if using the Off-Canvas Menu -->

	<body <?php body_class(); ?>>
		<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<div class="off-canvas-wrapper">

			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

				<div class="off-canvas-content" data-off-canvas-content>

					<header class="header" role="banner">
						<div class="menu-area">
							<button class="menu-toggle" id="js-menu-toggle">Menu</button>
							<div class="menu-overlay" id="js-menu-overlay"></div>
							<?php wp_nav_menu(); ?>
						</div>
						<div class="site-title-wrapper">
							<div class="title">
								<img src="<?php bloginfo('url');?>/wp-content/themes/urban-palmcast_theme/assets/images/up_header_text.png">
							</div>
							<div class="logo-area">
								<a href="/">
									<img class="up-logo" src="<?php bloginfo('url');?>/wp-content/themes/urban-palmcast_theme/assets/images/logo_on-dark.png">
								</a>
								<div class="ring outer">
									<div class="ring middle">
										<div class="ring inner">
										</div>
									</div>
								</div>
							</div>
						 </div>
					</header> <!-- end .header -->
