<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main-left" class="large-6 small-12 columns" role="main">
					<!-- <img class="title" src="<?php bloginfo('url');?>/wp-content/themes/urban-palmcast_theme/assets/images/up_header_text.png"> -->
					<!-- <div class="logo-area hide-for-large-up">
						<img class="up-logo" src="<?php bloginfo('url');?>/wp-content/themes/urban-palmcast_theme/assets/images/logo_on-dark.png">
						<div class="ring outer">
							<div class="ring middle">
								<div class="ring inner">
								</div>
							</div>
						</div>
					</div> -->
					<div class="panel">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; ?>

						<?php endif; ?>
						<a href="https://itunes.apple.com/us/podcast/urban-palm-cast/id1060814978?mt=2" target="_blank" class="button button-link button-cta centered">Get It In Your Ears!</a>
					</div>

					<div class="panel">
						<a class="twitter-timeline"
						href="https://twitter.com/UrbanPalm_Cast"
						data-theme="dark"
						data-tweet-limit="3"
						data-chrome="nofooter noborders transparent">Tweets by UrbanPalm_Cast</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>

						<!-- <a class="twitter-timeline"
						href="https://twitter.com/VTMWebServices"
						data-widget-id="662682509851803650"
						data-chrome="nofooter noborders transparent">Tweets by @VTMWebServices</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script> -->

					</div>

				</main> <!-- end #main -->
				<main id="main-right" class="large-6 small-12 columns">
					<!-- <div class="logo-area">
						<a href="/">
							<img class="up-logo" src="<?php bloginfo('url');?>/wp-content/themes/urban-palmcast_theme/assets/images/logo_on-dark.png">
						</a>
						<div class="ring outer">
							<div class="ring middle">
								<div class="ring inner">
								</div>
							</div>
						</div>
					</div> -->
					<!-- <div class="menu-area">
						<button class="menu-toggle" id="js-menu-toggle">Menu</button>
						<div class="menu-overlay" id="js-menu-overlay"></div>
						<?php wp_nav_menu(); ?>
					</div> -->
					<div class="panel">

						<h2 class="social-media-header">Follow Us</h2>
						<ul class="social-media-list">
							<li><a href="https://twitter.com/UrbanPalm_Cast" target="_blank" class="twitter">Twitter</a></li>
							<li><a href="https://www.facebook.com/urbanpalmcast/" target="_blank" class="facebook">Facebook</a></li>
							<li><a href="https://www.instagram.com/urbanpalmcast/" target="_blank" class="instagram">Instagram</a></li>
						</ul>
					</div>


					<?php get_template_part( 'parts/front', 'beer-of-the-week'); ?>
				</main>
			    <?php //if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php //get_template_part( 'parts/loop', 'archive' ); ?>

				<?php //endwhile; ?>

					<?php// joints_page_navi(); ?>

				<?php// else : ?>

					<?php //get_template_part( 'parts/content', 'missing' ); ?>

				<?php// endif; ?>



		    <?php //get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
