<?php
function registrar_cpt_historia() {
  register_post_type('historia', array(
    'labels' => array(
      'name' => 'Historia',
      'singular_name' => 'Historia'
    ),
    'public' => true,
    'has_archive' => true,
  ));
}
add_action('init', 'registrar_cpt_historia');

?>