<?php
get_header();

$term = get_queried_object();
$inc = [
    10 => 'services.php',
    11 => 'services.php',
];
$category_id = get_the_category($term->term_id)[0]->term_id;

if(array_key_exists($category_id, $inc)){
    include(TEMPLATEPATH . '/template/single/'.$inc[$category_id]);
}


get_footer();
?>