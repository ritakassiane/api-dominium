<?php

function api_get_adm_membro ($request) {
    $slug = sanitize_text_field($request->get_param('slug'));
    $page_object = get_page_by_path($slug, OBJECT, 'administracao');

    $id = $page_object->ID;
    $title = $page_object->post_title;
    $acf = get_fields($id);


    $adm_membro = array(
        'slug' => $slug,
        'id' => $id,
        'title' => $title,
        'acf' => $acf,
    );

    return rest_ensure_response( $adm_membro );
}

function api_register_adm_membros_routes(){
    register_rest_route('dominium/equipe/administracao', '/adm_membro/(?P<slug>[-\w]+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_adm_membro',
    ));
}

add_action('rest_api_init', 'api_register_adm_membros_routes');


?>