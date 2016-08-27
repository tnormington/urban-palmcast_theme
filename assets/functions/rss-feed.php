<?php


function my_feed_request($qv) {
if (isset($qv['feed']))
$qv['post_type'] = get_post_types();

return $qv;
}
add_filter('request', 'my_feed_request');


 ?>
