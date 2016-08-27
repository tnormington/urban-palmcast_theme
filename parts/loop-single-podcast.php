<?php

$link = get_field('podcast_url');

 ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<span class="duration"><?php the_field('duration'); ?> Minutes</span>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
		<?php the_post_thumbnail('full'); ?>
		<?php the_content(); ?>
		<?php if($link !== ''): ?>
			<a class="button button-cta" href="<?php print $link; ?>">Listen Now</a>
		<?php endif; ?>
	</section> <!-- end article section -->
	<hr>

	<footer class="article-footer">
		<?php get_template_part('parts/utility', 'social-links') ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->

	<hr>
	<a href="/podcasts"><i class="fa fa-angle-double-left"></i> Back to the Podcasts</a>

	<?php //comments_template(); ?>

</article> <!-- end article -->
