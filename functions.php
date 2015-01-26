<?php
// Registro del menú de WordPress 
add_theme_support( 'nav-menus' );
 
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main'
        )
    );
}

function new_excerpt_length($length) {
    return 15;
}
add_filter('excerpt_length', 'new_excerpt_length');

//  Main Sidebar
if(function_exists('register_sidebar'))
    register_sidebar(array(
    'name' => 'Main Sidebar',
    'before_widget' => '',
    'after_widget' => '<hr>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>',
));
 
//Habilitar thumbnails
  add_theme_support('post-thumbnails');
 
  add_image_size('ieee_thumb', 80,80, true);

  // set_post_thumbnail_size(150, 150, true);

  add_theme_support('automatic-feed-links');


// Permitir comentarios encadenados
// function enable_threaded_comments(){
//     if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
//        wp_enqueue_script('comment-reply');
//     }
// }
// add_action('get_header', 'enable_threaded_comments');


/*add_action( 'init', 'create_post_type_cursos',1 );
function create_post_type_cursos() {
    $labels = array(
        'name' => __( 'Cursos' ),
        'singular_name' => __( 'Curso' ),
        'singular_label' => __( 'Curso' ),
        'all_items' => __('Cursos'),
        'add_new_item' => __('Añadir un curso nuevo'),
        'edit_item' => __('Editar curso'),
    );
    $args = array(
        'labels'=>$labels,
        'public' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'query_var' => true,
        'menu_position' => 5,
        'rewrite' => array('slug' => 'curso'),
        'supports' => array('title','editor','thumbnail'),
    );
    register_post_type( 'curso', $args );
}

//register_taxonomy("categoria", array("curso"), array("hierarchical" => true, "label" => "Categorías", "singular_label" => "Categoría",'query_var' => true, "rewrite" => true));
register_taxonomy('Categoria', 'curso', $args);*/

/*add_action( 'init', 'create_post_type_proyectos',1 );
function create_post_type_proyectos() {
    register_post_type( 'proyecto',
        array(
            'labels' => array(
                'name' => __( 'Proyectos' ),
                'singular_name' => __( 'Proyecto' ),
                'singular_label' => __( 'Proyecto' ),
                'all_items' => __('Proyectos'),
                'add_new_item' => __('Añadir un proyecto nuevo'),
                'edit_item' => __('Editar proyecto')
            ),
        'public' => true,
        'has_archive' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'query_var' => true,
        'menu_position' => 5,
        'menu_icon' => get_stylesheet_directory_uri() . '/images/proyecto_icon.png',
        'rewrite' => array('slug' => 'proyectos'),
        'supports' => array('title','editor','thumbnail')
        )
    );
}

register_taxonomy("categoria", array("proyecto"), array("hierarchical" => true, "label" => "Categorías", "singular_label" => "Categoría",'query_var' => true, "rewrite" => true));
register_taxonomy("cliente", array("proyecto"), array("hierarchical" => true, "label" => "Clientes", "singular_label" => "Cliente",'query_var' => true, "rewrite" => true));

*/

?>


<?php 
function custom_search_widget() { 
?> 

<form method="get" id="searchform" role="form" class="form-inline" action="<?php bloginfo('url'); ?>/">
 
    <div class="form-group">
        <input type="search" placeholder="Search" class="form-search form-control" value="<?php the_search_query(); ?>" name="s" id="s" />
        
    </div>
    <hr>
</form>
 
<?php
} if (function_exists('register_sidebar_widget')) 
register_sidebar_widget(__('Search'), 'custom_search_widget');
?>

