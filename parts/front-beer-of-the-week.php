<?php $botw_query = new WP_Query(
  array(
    'post_type' => 'beer_of_the_week',
    'showposts'     => 1,
  )
); ?>
<div class="panel beer-of-the-week">
  <h2 class="block-header">Beer of the Week</h2>
  <?php if ($botw_query->have_posts()) : while ($botw_query->have_posts()) : $botw_query->the_post(); ?>
    <?php
    $image = get_the_post_thumbnail();
    $title = get_the_title();
    $company = get_field('brewing_company');
    $company_url = get_field('brewing_company_link');
    $style = get_the_terms(get_the_ID(), 'beer_of_the_week_styles')[0]->name;
    $rating = get_field('rating');
    $stars = '';
    $abv = get_field('abv');
    $ibu = get_field('ibu');

    ?>
    <?php print $image; ?>
    <h3 class="title"><?php print $title; ?></h3>
    <h4 class="company"><a href='<?php print $company_url; ?>'><?php ($company !== null) ? print $company : print 'Brewing Company'; ?></a></h4>
    <hr>
    <span class="style beer-meta"><span class="label">Style:</span><?php print $style; ?></span>
    <hr>
    <span class="ibu beer-meta"><span class="label">IBU:</span><?php print $ibu; ?></span>
    <hr>
    <span class="abv beer-meta"><span class="label">ABV:</span><?php print $abv; ?>%</span>
    <hr>
    <span class="rating beer-meta">
      <span class="label">Rating:</span>

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
    <hr>
    <a href="<?php the_permalink(); ?>" class="button button-link button-cta">Read More</a>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
