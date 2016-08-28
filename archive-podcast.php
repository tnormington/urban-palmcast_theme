<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-12 columns" role="main">

					<div class="panel">
						<h1 class="block-header">The Podcast</h1>
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-podcast' ); ?>

				<?php endwhile; ?>

					<!-- <?php joints_page_navi(); ?> -->

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>
			</div>

		    </main> <!-- end #main -->
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
