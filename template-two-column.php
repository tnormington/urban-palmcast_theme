<?php
/*
Template Name: Two Column (even)
*/
?>

<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main-left" class="llarge-6 small-12 columns">
					<div class="panel">
						<h1 class="block-header"><?php the_title(); ?></h1>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'left-column' ); ?>

				<?php endwhile; endif; ?>

				<?php if(is_page('about-us')) : ?>

					<?php get_template_part('parts/loop', 'about-us'); ?>

				<?php endif; ?>

			</div>

			</main> <!-- end #main -->

			<main id="main-right" class="large-6 small-12 columns">
				<?php //var_dump(get_field('right_column_content')); ?>
				<?php if('' !== get_field('right_column_content')): ?>
					<div class="panel">
						<?php get_template_part( 'parts/loop', 'right-column' ); ?>
					</div>
				<?php endif; ?>

			</main>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
