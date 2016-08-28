<article id="post-<?php the_ID(); ?>" <?php post_class('panel'); ?> role="article">
	<div class="media-object">
	  <div class="media-object-section">
	    <div class="thumbnail">
				<?php the_post_thumbnail('thumb'); ?>
	    </div>
	  </div>
	  <div class="media-object-section">
	    <a href="<?php the_permalink(); ?>"><h4><?php the_title(); ?></h4></a>
	    <p><?php the_excerpt(); ?></p>
	  </div>
	</div>
</article> <!-- end article -->
