<?php

$get_menu = wp_get_nav_menu_items(get_nav_menu_locations()['main_menu']);

?>
<ul class="menu__list dropbox">
    <?php echo tplMenu(multi_menu($get_menu)); ?>
</ul>