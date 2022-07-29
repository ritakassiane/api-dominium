<?php
function registrar_cpt_noticias() {
  register_post_type('noticias', array(
    'label' => 'noticias',
    'description' => 'noticias',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'noticias', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'publicly_queryable' => true
  ));
}
add_action('init', 'registrar_cpt_noticias');

?>