<?php

function api_get_historia_single ($request) {
    $slug = sanitize_text_field($request->get_param('slug'));
    $page_object = get_page_by_path($slug, OBJECT, 'historia');

    $id = $page_object->ID;
    $title = $page_object->post_title;
    $acf = get_fields($id);


    $historia_single = array(
        'slug' => $slug,
        'id' => $id,
        'title' => $title,
        'acf' => $acf,
    );

    return rest_ensure_response( $historia_single );
}

function api_register_historia_singles_routes(){
    register_rest_route('dominium/historia', '/historia_single/(?P<slug>[-\w]+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_historia_single',
    ));
}

add_action('rest_api_init', 'api_register_historia_singles_routes');


?>