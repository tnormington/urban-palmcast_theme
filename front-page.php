<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main-left" class="large-4 small-12 columns" role="main">
					<div class="panel">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php the_content(); ?>

						<?php endwhile; ?>

						<?php endif; ?>
						<a href="https://itunes.apple.com/us/podcast/urban-palm-cast/id1060814978?mt=2" target="_blank" class="button button-link button-cta centered">Get It In Your Ears!</a>
					</div>
					<div class="panel">

						<h2 class="social-media-header">Follow Us</h2>
						<ul class="social-media-list">
							<li><a href="https://twitter.com/UrbanPalm_Cast" target="_blank" class="twitter">Twitter</a></li>
							<li><a href="https://www.facebook.com/urbanpalmcast/" target="_blank" class="facebook">Facebook</a></li>
							<li><a href="https://www.instagram.com/urbanpalmcast/" target="_blank" class="instagram">Instagram</a></li>
						</ul>
					</div>
					<div class="panel">
						<h2 class="block-header">Instagrams</h2>
						<!-- LightWidget WIDGET --><script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/bbeda7a7cd285dad9be640f9dd47d416.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>
					</div>

				</main> <!-- end #main -->
				<main id="main-middle" class="large-4 small-12 columns">
					<?php get_template_part('parts/front', 'podcast'); ?>
				</main>
				<main id="main-right" class="large-4 small-12 columns">
					<?php get_template_part( 'parts/front', 'beer-of-the-week'); ?>
				</main>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
