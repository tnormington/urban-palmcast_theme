<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main-left" class="large-6 small-12 columns" role="main">
					<img class="title" src="<?php bloginfo('url');?>/wp-content/themes/urban-palmcast_theme/assets/images/up_header_text.png">

					<div class="panel">
						<?php print the_content(); ?>
						<a href="#" target="_blank" class="button button-link button-cta centered">Get It In Your Ears!</a>
					</div>

					<div class="panel">
						<a class="twitter-timeline"
						href="https://twitter.com/VTMWebServices"
						data-widget-id="662682509851803650"
						data-chrome="nofooter noborders transparent">Tweets by @VTMWebServices</a>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

					</div>

				</main> <!-- end #main -->
				<main id="main-right" class="large-6 small-12 columns">
					<div class="logo-area">
						<img class="up-logo" src="<?php bloginfo('url');?>/wp-content/themes/urban-palmcast_theme/assets/images/logo_on-dark.png">
						<div class="ring outer">
							<div class="ring middle">
								<div class="ring inner">
								</div>
							</div>
						</div>
					</div>
					<button class="menu-toggle">Menu</button>
					<?php wp_nav_menu(); ?>
					<div class="panel">
						<h2>Follow Us</h2>
						<ul class="social-media-list">
							<li><a href="#" class="twitter">Twitter</a></li>
							<li><a href="#" class="facebook">Facebook</a></li>
							<li><a href="#" cass="instagram">Instagram</a></li>
						</ul>
					</div>
					<div class="panel">
						<p>Nullam id dolor id nibh ultricies vehicula ut id elit. Curabitur blandit tempus porttitor. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec id elit non mi porta gravida at eget metus.
						</p>
					</div>
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
