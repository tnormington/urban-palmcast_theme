<?php
//setup variables

$abbys_photo_url = get_field('abbys_photo')['url'];
$abbys_desc = get_field('abbys_section');

$lukes_photo_url = get_field('lukes_photo')['url'];
$lukes_desc = get_field('lukes_section');

 ?>
<section class="individual-bio">
  <img class="abbys-photo" src="<?php print $abbys_photo_url; ?>">
  <div class="abbys-bio"><?php print $abbys_desc; ?></div>
  <img class="lukes-photo" src="<?php print $lukes_photo_url; ?>">
  <div class="lukes-bio"><?php print $lukes_desc; ?></div>
</section>

<section class="one-word">
  <h2 class="centered">One Word to Describe Luke...</h2>
<iframe class="abbys-word" width="315" height="315" src="https://www.youtube.com/embed/AlLwppEu2bI" frameborder="0" allowfullscreen></iframe>
  <h2 class="centered">One Word to Describe Abby...</h2>
<iframe width="420" height="315" src="https://www.youtube.com/embed/Eo2uz9zaYFM" frameborder="0" allowfullscreen></iframe>
