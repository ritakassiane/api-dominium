<?php

function api_get_professores_i_ ($request) {
    $slug = sanitize_text_field($request->get_param('slug'));
    $page_object = get_page_by_path($slug, OBJECT, 'professores-i');

    $id = $page_object->ID;
    $title = $page_object->post_title;
    $acf = get_fields($id);


    $professores_i = array(
        'slug' => $slug,
        'id' => $id,
        'title' => $title,
        'acf' => $acf,
    );

    return rest_ensure_response( $professores_i );
}

function api_register_professores_i_routes(){
    register_rest_route('dominium/equipe', '/professores-i/(?P<slug>[-\w]+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_professores_i_',
    ));
}

add_action('rest_api_init', 'api_register_professores_i_routes');






function api_get_professores_i_i_ ($request) {
    $slug = sanitize_text_field($request->get_param('slug'));
    $page_object = get_page_by_path($slug, OBJECT, 'professores-ii');

    $id = $page_object->ID;
    $title = $page_object->post_title;
    $acf = get_fields($id);


    $professores_ii = array(
        'slug' => $slug,
        'id' => $id,
        'title' => $title,
        'acf' => $acf,
    );

    return rest_ensure_response( $professores_ii );
}

function api_register_professores_ii_routes(){
    register_rest_route('dominium/equipe', '/professores-ii/(?P<slug>[-\w]+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_professores_i_i_',
    ));
}

add_action('rest_api_init', 'api_register_professores_i_routes');
add_action('rest_api_init', 'api_register_professores_ii_routes');
?>


