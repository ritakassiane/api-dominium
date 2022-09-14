<?php
function registrar_cpt_funcionarios() {
  register_post_type('funcionarios', array(
    'label' => 'Funcionarios',
    'description' => 'Funcionarios',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'funcionarios', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'publicly_queryable' => true
  ));
}
add_action('init', 'registrar_cpt_funcionarios');

?>