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

					<div class="panel show-for-large">
						<a class="twitter-timeline"
						href="https://twitter.com/UrbanPalm_Cast"
						data-theme="dark"
						data-tweet-limit="3"
						data-chrome="nofooter noborders transparent">Tweets by UrbanPalm_Cast</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>

					<div class="panel">

						<h2 class="social-media-header">Follow Us</h2>
						<ul class="social-media-list">
							<li><a href="https://twitter.com/UrbanPalm_Cast" target="_blank" class="twitter">Twitter</a></li>
							<li><a href="https://www.facebook.com/urbanpalmcast/" target="_blank" class="facebook">Facebook</a></li>
							<li><a href="https://www.instagram.com/urbanpalmcast/" target="_blank" class="instagram">Instagram</a></li>
						</ul>
					</div>

				</main> <!-- end #main -->
				<main id="main-middle" class="large-4 small-12 columns">
					<?php get_template_part('parts/front', 'podcast'); ?>
				</main>
				<main id="main-right" class="large-4 small-12 columns">
					<?php get_template_part( 'parts/front', 'beer-of-the-week'); ?>
					<div class="panel hide-for-large">
						<a class="twitter-timeline"
						href="https://twitter.com/UrbanPalm_Cast"
						data-theme="dark"
						data-tweet-limit="3"
						data-chrome="nofooter noborders transparent">Tweets by UrbanPalm_Cast</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
					</div>
				</main>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
