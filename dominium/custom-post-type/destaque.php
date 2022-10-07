<?php
function registrar_cpt_destaque() {
  register_post_type('destaque', array(
    'label' => 'Destaque',
    'description' => 'destaque',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'destaque', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'publicly_queryable' => true
  ));
}
add_action('init', 'registrar_cpt_destaque');

?>