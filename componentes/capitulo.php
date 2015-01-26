<?
// POST PESRONALIZADO: Capitulo
// Defino las etiquetas de los menu y formularios
//----------------------------------------------
$capitulo_labels = array(
'name' => _x('capitulo', 'post type general name'),
'singular_name' => _x('Capitulos', 'post type singular name'),
'add_new' => _x('Nuevo capitulo', 'capitulo'),
'add_new_item' => __("Nuevo Imueble"),
'edit_item' => __("Editar capitulo"),
'new_item' => __("Nuevo capitulo"),
'view_item' => __("Ver capitulo"),
'search_items' => __("Buscar capitulo"),
'not_found' => __('No se encontraron Capitulos'),
'not_found_in_trash' => __('No hay Capitulos'),
'parent_item_colon' => ''
	
);
 
//Creo los argumentos para la base de datos
$capitulo_args = array(
'labels' => $capitulo_labels,
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'query_var' => true,
'rewrite' => true,
'hierarchical' => false,
'menu_position' => null,
'capability_type' => 'post',
'supports' => array('title', 'excerpt', 'editor', 'thumbnail'),
// 'menu_icon' => get_bloginfo('template_directory') . '/images/photo-album.png' //16x16 png if you want an icon
);
//Registro el post
register_post_type('capitulo', $capitulo_args);
?>