<?php
function registrar_cpt_acervo() {
  register_post_type('acervo', array(
    'labels' => array(
      'name' => 'Acervo',
      'singular_name' => 'Postagem'
    ),
    'public' => true,
    'has_archive' => true,
  ));
}
add_action('init', 'registrar_cpt_acervo');

?>