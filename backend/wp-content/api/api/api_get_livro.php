<?php

function api_get_livro ($request) {
    $slug = sanitize_text_field($request->get_param('slug'));
    $page_object = get_page_by_path($slug, OBJECT, 'livros');

    $id = $page_object->ID;
    $title = $page_object->post_title;
    $acf = get_fields($id);


    $livro = array(
        'slug' => $slug,
        'id' => $id,
        'title' => $title,
        'acf' => $acf,
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