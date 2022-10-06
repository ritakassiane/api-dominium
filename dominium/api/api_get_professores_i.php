<?php 

function api_get_professor_i (){
    $posts = array();
    $args = array('post_type' => 'professores-i', 'post_per_page' => -1);
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

function api_register_professores_i(){
    register_rest_route('dominium/equipe', '/professores-i', array(
        'methods' => 'GET',
        'callback' => 'api_get_professor_i',
    ));
}


add_action('rest_api_init', 'api_register_professores_i');

?>