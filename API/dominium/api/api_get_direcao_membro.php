<?php

function api_get_direcao_membro ($request) {
    $slug = sanitize_text_field($request->get_param('slug'));
    $page_object = get_page_by_path($slug, OBJECT, 'direcao');

    $id = $page_object->ID;
    $title = $page_object->post_title;
    $acf = get_fields($id);


    $direcao_membro = array(
        'slug' => $slug,
        'id' => $id,
        'title' => $title,
        'acf' => $acf,
    );

    return rest_ensure_response( $direcao_membro );
}

function api_register_direcao_membros_routes(){
    register_rest_route('dominium/direcao', '/direcao_membro/(?P<slug>[-\w]+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_direcao_membro',
    ));
}

add_action('rest_api_init', 'api_register_direcao_membros_routes');


?>