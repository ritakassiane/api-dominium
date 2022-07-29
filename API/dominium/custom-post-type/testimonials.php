<?php
function registrar_cpt_testimonials() {
  register_post_type('testimonials', array(
    'label' => 'testimonials',
    'description' => 'testimonials',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'testimonials', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'publicly_queryable' => true
  ));
}
add_action('init', 'registrar_cpt_testimonials');

?>