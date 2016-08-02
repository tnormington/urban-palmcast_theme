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

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<header class="article-header">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</header> <!-- end article header -->

					<?php get_template_part( 'parts/loop', 'left-column' ); ?>

				<?php endwhile; endif; ?>

			</div>

			</main> <!-- end #main -->

			<main id="main-right" class="large-6 small-12 columns">
				<div class="panel">


				</div>

			</main>

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
