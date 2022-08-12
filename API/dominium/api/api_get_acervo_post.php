<?php

function api_get_acervo_post ($request) {
    $slug = sanitize_text_field($request->get_param('slug'));

    $acervo_post = array(
        'slug' => $slug,
        'id' => $id,
        'title' => $title,
        'acf' => $acf,
    );

    return rest_ensure_response( $acervo_post );
}

function api_register_acervo_routes(){
    register_rest_route('dominium/acervo', '/acervo_post/(?P<slug>[-\w]+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_acervo_post',
    ));
}

add_action('rest_api_init', 'api_register_acervo_routes');


?>