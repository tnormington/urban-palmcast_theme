<?php
$company = get_field('brewing_company');
$company_url = get_field('brewing_company_link');
$style = get_the_terms(get_the_ID(), 'beer_of_the_week_styles')[0]->name;
$abv = get_field('abv', get_the_ID());
$ibu = get_field('ibu', get_the_ID());
$rating = get_field('rating');
$stars = '';
 ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header row">
		<div class="columns medium-5">
			<?php the_post_thumbnail('full'); ?>
		</div>
		<div class="columns medium-7">
			<hr class="show-for-small-only">
			<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
			<div class="single-botw-meta">
				<p><a href="<?php print $company_url; ?>" target="_blank"><?php ($company !== '') ? print $company : print $company_url; ?> <i class="fa fa-external-link"></i></a></p>
				<p>ABV: <?php print $abv; ?>%</p>
				<p>IBU: <?php print $ibu; ?></p>
				<p>Style: <?php print $style; ?></p>
					<span class="rating beer-meta">Rating:
			      <?php if(is_float($rating)) {
			        // if the rating is a float
			        // ie. 4.5, or 3.5, etc
			          for($counter = 1; $counter < $rating; $counter++) {
			            // print a star out for each
			            // rating - 1
			            print '<i class="fa fa-star"></i>';
			          }
			          // then print out a half star
			          print '<i class="fa fa-star-half-o"></i>';
			        } else {
			          // if the rating is a solid number
			          // ie. 4, or 5, etc
			          for($counter = 0; $counter < $rating; $counter++) {
			            // print out that many stars
			            print '<i class="fa fa-star"></i>';
			          }
			        } ?></span>
			</div>
		</div>
	</header> <!-- end article header -->
		<hr>
    <section class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
		</section> <!-- end article section -->

	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->

	<?php //comments_template(); ?>

</article> <!-- end article -->
