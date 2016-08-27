<?php $botw_query = new WP_Query(
  array(
    'post_type' => 'podcast',
    'showposts'     => 1,
  )
); ?>
<div class="panel latest-podcast">
  <h2 class="block-header">Latest Podcast</h2>
  <?php if ($botw_query->have_posts()) : while ($botw_query->have_posts()) : $botw_query->the_post(); ?>
    <?php
    $image = get_the_post_thumbnail();
    $title = get_the_title();
    $excerpt = get_the_excerpt();
    $duration = get_field('duration');
    ?>
    <h3 class="title"><?php print $title; ?></h3>
    <div class="duration">
      <?php print $duration; ?> Minutes
    </div>
    <?php print $image; ?>
    <hr>
    <p><?php print $excerpt; ?></p>
    <a href="<?php the_permalink(); ?>" class="button button-link button-cta">Read More</a>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
