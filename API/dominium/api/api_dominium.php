<?php 

function api_register_equipe() {
    register_rest_route('dominium/equipe', '/administracao', array(
        'methods' => 'GET',
        'callback' => 'api_get_adm'
    ));
}

add_action('rest_api_init', 'api_register_equipe');

?>