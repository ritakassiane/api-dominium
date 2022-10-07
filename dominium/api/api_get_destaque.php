<?php 

function api_get_destaque(){
    $posts = array();
    $args = array('post_type' => 'destaque', 'post_per_page' => -1);
    $loop = new WP_Query($args);
    while ($loop -> have_posts()) : $loop->the_post();
        $id = get_the_ID();
        $slug = get_post_field('destaque', $id);
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


function api_register_destaque (){
    register_rest_route('dominium/assets', '/destaque', array(
        'methods' => 'GET',
        'callback' => 'api_get_destaque',
    ));
}


add_action('rest_api_init', 'api_register_destaque');
?>