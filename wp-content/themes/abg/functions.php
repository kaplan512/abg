<?php
add_image_size( 'services-category', 685, 360, true );
add_image_size( 'services-background', 1920, 427, true );
add_image_size( 'services-block-1', 645, 475, true );
add_image_size( 'services-thumb-big', 490, 320, true );
add_image_size( 'services-thumb-min', 445, 210, true );
add_image_size( 'object__image', 538, 585, true );
add_image_size( 'object__cat', 570, 300, true );

//отключение генерации всех стандартных размеров картинок
function wph_remove_all_images($sizes){
    unset($sizes['thumbnail']);
    unset($sizes['medium']);
    unset($sizes['medium_large']);
    unset($sizes['large']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'wph_remove_all_images');

// Путь к файлам верстки
function layout(){
    return get_template_directory_uri().'/dist';
}

// обработка номера
function tel($phone){
    $new = preg_replace('/[^0-9]/', '', $phone);
    return '+'.$new;
}

// Четное или нечетное
function even($var){
    return !($var & 1);
}

// ACF option page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Общие настройки',
        'menu_title'	=> 'Общие настройки',
        'menu_slug' 	=> 'theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Контакты',
        'menu_title'	=> 'Контакты',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Мы гордимся объектами',
        'menu_title'	=> 'Мы гордимся объектами',
        'parent_slug'	=> 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title' 	=> 'Бизнес партнеры',
        'menu_title'	=> 'Бизнес партнеры',
        'parent_slug'	=> 'theme-general-settings',
    ));

}

// Sidebar
register_sidebar( array(
    'name' => __( 'Переключение языка', 'theme' ),
    'id' => 'lang_select',
    'description' => __( 'Переключение языка', 'theme' ),
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
) );

// Список номеров
function get_phones(){
    $array = [];

    $type1 = get_field('главный_офис', 'options');
    $type2 = get_field('отдел_поставок', 'options');

    if($type1){
        foreach ($type1 as $key => $item){
            if($key != 'почта'){
                $array[] = $item;
            }
        }
    }
    if($type2){
        foreach ($type2 as $key => $item){
            if($key != 'почта'){
                $array[] = $item;
            }
        }
    }

    return $array;
}

// Хлебные крошки
function breadcrumbs(){

    $home = __('Главная','theme');

    // получаем номер текущей страницы
    $page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $separator = ''; //  разделяем обычным слэшем, но можете чем угодно другим

    echo '<ul class="breadcrumb__list">';

    // если главная страница сайта
    if( is_front_page() ){

        if( $page_num > 1 ) {
            echo '<li><a class="breadcrumb__link" href="' . site_url() . '">'.$home.'</a></li>' . $separator;
        }

    } else { // не главная

        echo '<li><a class="breadcrumb__link" href="' . site_url() . '">'.$home.'</a></li>' . $separator;


        if( is_single() ){ // записи

            foreach( get_the_category() as $category ){
                echo '<li>';
                echo "<a class='breadcrumb__link' href='".get_category_link($category->term_id)."'>";
                echo $category->name;
                echo "</a>";
                echo '</li>';
            }
            echo $separator;
            echo '<li class="active">'.get_the_title();

        } elseif ( is_page() ){ // страницы WordPress

            echo  '<li class="active"><span class="breadcrumb__text" aria-current="page">'.get_the_title().'</span>';

        } elseif ( is_category() ) {

            echo '<li class="active"><span class="breadcrumb__text" aria-current="page">'.single_cat_title('', 0).'</span>';

        } elseif( is_tag() ) {

            echo '<li class="active"><span class="breadcrumb__text" aria-current="page">'.single_cat_title('', 0).'</span>';

        } elseif ( is_404() ) { // если страницы не существует

            echo 'Ошибка 404';

        }

        if ( $page_num > 1 ) { // номер текущей страницы
            echo ' (' . $page_num . '-я страница)';
        }
        echo '</li>';

    }

    echo '</ul>';

}

// Меню
if(function_exists('register_nav_menus')){
    register_nav_menus(
        array(
            'main_menu' => 'Главное меню',
        )
    );
}

// Возвращаем массив многомерного меню
function multi_menu($object){
    $json = json_encode($object);
    $array = json_decode($json, true);
    $array2 = [];
    $return = [];

    foreach ($array as $item){
        $array2[$item['ID']] = $item;
    }

    foreach ($array2 as $id => &$node) {
        if (!$node['menu_item_parent']) {
            $return[$id] = &$node;
        } else {
            $array2[$node['menu_item_parent']]['childs'][$id] = &$node;
        }
    }

    return $return;
}

//Шаблон для вывода меню в виде дерева
function tplMenu($category){
    $return = '';

    foreach ($category as $item){
        if(isset($item['childs'])){
            $return .= '<li class="menu__items dropbox__li">';
            $return .= '<a href="'.$item['url'].'" class="menu__link">'.$item['title'].'</a>';
            $return .= '<div class="menu__arrow dropbox__icon"><svg><use xlink:href="'.layout().'/img/sprite.svg#arrow-abg"></use></svg></div>';

            $return .= '<nav class="menu__sub-nav dropbox__sub-list"><div class="menu__sub-items">';

            $childs = array_chunk($item['childs'], ceil(count($item['childs']) / 2));

            foreach ($childs as $child){
                $return .= '<ul class="menu__sub-list">';

                foreach ($child as $chil){
                    $return .= '<li>';
                    $return .= '<a href="'.$chil['url'].'" class="menu__link">'.$chil['title'].'</a>';
                    $return .= '</li>';
                }

                $return .= '</ul>';
            }

            $return .= '';

            $return .= '</div></nav>';

            $return .= '</li>';
        }else{
            $return .= '<li>';
            $return .= '<a href="'.$item['url'].'" class="menu__link">'.$item['title'].'</a>';
            $return .= '</li>';
        }
    }

    return $return;
}

// Вывод нужного id взавимости от языка
function gpid($name){
    $array = [
        'services' => ['ru_RU' => 10, 'uk' => 11],
        'obekty' => ['ru_RU' => 12, 'uk' => 13],
    ];

    return $array[$name][get_locale()];
}