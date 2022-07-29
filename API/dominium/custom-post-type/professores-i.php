<?php
function registrar_cpt_professores_i() {
  register_post_type('professores-i', array(
    'label' => 'Professores-i',
    'description' => 'Professores-i',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'professores-i', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'publicly_queryable' => true
  ));
}
add_action('init', 'registrar_cpt_professores_i');

?>