<?php

function api_usuario_post($request) {
    $email = sanitize_email($request['email']);
    $senha = sanitize_text_field($request['senha']);
    $nome = sanitize_text_field($request['nome']);
    $response = array(
        'first_name' => $nome,
        'email' => $email
    );
  return rest_ensure_response($response);
}

function registrar_api_usuario_post() {
  register_rest_route('api', '/usuario', array(
    array(
      'methods' => WP_REST_Server::CREATABLE,
      'callback' => 'api_usuario_post',
    ),
  ));
}

add_action('rest_api_init', 'registrar_api_usuario_post');


?>