<?php
function registrar_cpt_direcao() {
  register_post_type('direcao', array(
    'label' => 'Direcao',
    'description' => 'Direcao',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'direcao', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'publicly_queryable' => true
  ));
}
add_action('init', 'registrar_cpt_direcao');

?>