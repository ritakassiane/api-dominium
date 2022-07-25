<?php
function registrar_cpt_professores_ii() {
  register_post_type('professores-ii', array(
    'label' => 'Professores-ii',
    'description' => 'Professores-ii',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'professores-ii', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'publicly_queryable' => true
  ));
}
add_action('init', 'registrar_cpt_professores-ii');

?>