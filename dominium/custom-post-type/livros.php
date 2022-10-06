<?php
function registrar_cpt_livros() {
  register_post_type('livros', array(
    'label' => 'Livros',
    'description' => 'livros',
    'public' => true,
    'show_ui' => true,
    'capability_type' => 'post',
    'rewrite' => array('slug' => 'livros', 'with_front' => true),
    'query_var' => true,
    'supports' => array('custom-fields', 'author', 'title'),
    'publicly_queryable' => true
  ));
}
add_action('init', 'registrar_cpt_livros');

?>