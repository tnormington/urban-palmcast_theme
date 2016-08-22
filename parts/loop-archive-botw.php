<?php

$company = get_field('brewing_company');
$company_url = get_field('brewing_company_url');
$style = get_the_terms(get_the_ID(), 'beer_of_the_week_styles')[0]->name;
$abv = get_field('abv', get_the_ID());
$ibu = get_field('ibu', get_the_ID());

 ?>



<article id="post-<?php the_ID(); ?>" <?php post_class('panel'); ?> role="article">
	<header class="article-header">
		<h2><a class="header-link" href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<?php //get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->

	<section class="entry-content" itemprop="articleBody">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<hr>
		<div class="botw-meta">
			<span class="footer-label">ABV: <?php print $abv; ?>%</span>
			<span class="footer-label">IBU: <?php print $ibu; ?></span>
			<span class="footer-label">Style: <?php print $style; ?></span>
		</div>
		<hr>
		<p><?php the_excerpt(); ?></p>

		<!-- <a href="<?php the_permalink(); ?>" class="read-more">Read More</a> -->
	</section> <!-- end article section -->

	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
</article> <!-- end article -->
