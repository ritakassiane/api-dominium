<?php

function api_get_testimonial ($request) {
    $slug = sanitize_text_field($request->get_param('slug'));
    $page_object = get_page_by_path($slug, OBJECT, 'testimonials');

    $id = $page_object->ID;
    $title = $page_object->post_title;
    $acf = get_fields($id);


    $testimonial = array(
        'slug' => $slug,
        'id' => $id,
        'title' => $title,
        'acf' => $acf,
    );

    return rest_ensure_response( $testimonial );
}

function api_register_testimonials_routes(){
    register_rest_route('dominium/testimonials', '/testimonial/(?P<slug>[-\w]+)', array(
        'methods' => 'GET',
        'callback' => 'api_get_testimonial',
    ));
}

add_action('rest_api_init', 'api_register_testimonials_routes');


?>