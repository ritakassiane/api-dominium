<?php 
function api_get_funcionarios (){
    $posts = array();
    $args = array('post_type' => 'funcionarios', 'post_per_page' => -1);
    $loop = new WP_Query($args);
    while ($loop -> have_posts()) : $loop->the_post();
        $id = get_the_ID();
        $slug = get_post_field('post_name', $id);
        $titulo = get_the_title();
        $acf = get_fields($id);

        $post = array(
            'id' => $id,
            'slug' => $slug,
            'titulo' => $titulo,
            'acf' => $acf,
        );

        $posts[$slug] = $post;
    endwhile;

    return rest_ensure_response( $posts );
}

function api_register_funcionarios (){
    register_rest_route('dominium/equipe', '/funcionarios', array(
        'methods' => 'GET',
        'callback' => 'api_get_funcionarios',
    ));
}


add_action('rest_api_init', 'api_register_funcionarios');


?>