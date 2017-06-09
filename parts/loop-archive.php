<article id="post-<?php the_ID(); ?>" <?php post_class('panel'); ?> role="article">
	<header class="article-header">
		<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<span class="duration"><?php the_field('duration'); ?> Minutes</span>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
	</header> <!-- end article header -->

	<section class="entry-content" itemprop="articleBody">
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('full'); ?></a>
		<p><?php the_excerpt(); ?></p>
		<a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
	</section> <!-- end article section -->

	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
</article> <!-- end article -->
