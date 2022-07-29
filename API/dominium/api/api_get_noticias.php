<?php 
function api_get_noticias (){
    $posts = array();
    $args = array('post_type' => 'noticias', 'post_per_page' => -1);
    $loop = new WP_Query($args);
    while ($loop -> have_posts()) : $loop->the_post();
        $id = get_the_ID();
        $slug = get_post_field('post_name', $id);
        $titulo = get_the_title();

        $post = array(
            'id' => $id,
            'slug' => $slug,
            'titulo' => $titulo,
        );

        $posts[$slug] = $post;
    endwhile;

    return rest_ensure_response( $posts );
}

function api_register_noticias (){
    register_rest_route('dominium/noticias', '/noticias', array(
        'methods' => 'GET',
        'callback' => 'api_get_noticias',
    ));
}


add_action('rest_api_init', 'api_register_noticias');


?>