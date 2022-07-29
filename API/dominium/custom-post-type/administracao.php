<?php
function registrar_cpt_administracao() {
  register_post_type('Administracao', array(
    'labels' => array(
      'name' => 'Administracao',
      'singular_name' => 'Adm'
    ),
    'public' => true,
    'has_archive' => true,
  ));
}
add_action('init', 'registrar_cpt_administracao');

?>