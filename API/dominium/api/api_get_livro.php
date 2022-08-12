<?php

function api_get_livro ($request) {
    $slug = sanitize_text_field($request->get_param('slug'));

    $livro = array(
        'slug' => $slug,
    );

    return rest_ensure_response( $livro );
}

function api_register_livros_routes(){
    register_rest_route('dominium/livraria', '/livro/(?P<slug>[-\w]+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_livro',
    ));
}

add_action('rest_api_init', 'api_register_livros_routes');


?>