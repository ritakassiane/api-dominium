<?php
function registrar_cpt_administracao() {
  register_post_type('administracao', array(
    'label' => 'Administracao',
    'description' => 'Administracao',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'administracao', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'publicly_queryable' => true
  ));
}
add_action('init', 'registrar_cpt_administracao');

?>