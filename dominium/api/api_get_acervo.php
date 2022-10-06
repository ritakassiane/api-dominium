<?php 
function api_get_acervo (){
    $posts = array();
    $args = array('post_type' => 'acervo', 'post_per_page' => -1);
    $loop = new WP_Query($args);
    while ($loop -> have_posts()) : $loop->the_post();
        $id = get_the_ID();
        $slug = get_post_field('post_name', $id);
        $titulo = get_the_title();
        $resumo = get_the_excerpt($id);

        $post = array(
            'id' => $id,
            'slug' => $slug,
            'titulo' => $titulo,
            'resumo' => $resumo,
        );

        $posts[$slug] = $post;
    endwhile;

    return rest_ensure_response( $posts );
}

function api_register_acervo (){
    register_rest_route('dominium/', '/acervo', array(
        'methods' => 'GET',
        'callback' => 'api_get_acervo',
    ));
}


add_action('rest_api_init', 'api_register_acervo');


?>