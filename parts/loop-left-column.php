<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->
	<div class="panel">
    <section class="entry-content" itemprop="articleBody">
	    <?php the_field('left_column_content'); ?>
	</section> <!-- end article section -->
</div>
<div class="panel">
	<section class="entry-content" itemprop="articleBody">
		<?php the_field('right_column_content'); ?>
</section> <!-- end article section -->
</div>
	<footer class="article-footer">

	</footer> <!-- end article footer -->

</article> <!-- end article -->
