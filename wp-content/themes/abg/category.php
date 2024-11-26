<?php
get_header();

$term = get_queried_object();
$inc = [
    10 => 'services.php',
    11 => 'services.php',
    12 => 'obekty.php',
    13 => 'obekty.php',
];

if(array_key_exists($term->term_id, $inc)){
    include(TEMPLATEPATH . '/template/category/'.$inc[$term->term_id]);
}elseif(in_array($term->parent, [12, 13])){
    include(TEMPLATEPATH . '/template/category/obekty-parent.php');
}


get_footer();
?>