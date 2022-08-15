<?php 

function api_get_adm (){
    $posts = array();
    $args = array('post_type' => 'administracao', 'post_per_page' => -1);
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


function api_register_administracao (){
    register_rest_route('dominium/equipe', '/administracao', array(
        'methods' => 'GET',
        'callback' => 'api_get_adm',
    ));
}




function api_register_professores_i(){
    register_rest_route('dominium/equipe', '/professor-i', array(
        'methods' => 'GET',
        'callback' => 'api_get_professor_i',
    ));
}

function api_register_professores_ii(){
    register_rest_route('dominium/equipe', '/professor-ii', array(
        'methods' => 'GET',
        'callback' => 'api_get_professor_ii',
    ));
}


add_action('rest_api_init', 'api_register_administracao');
add_action('rest_api_init', 'api_register_professores_i');
add_action('rest_api_init', 'api_register_professores_ii');



?>