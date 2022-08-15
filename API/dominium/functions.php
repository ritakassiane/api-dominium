<?php

require_once TEMPLATEPATH . '/api/api_dominium.php';
require_once TEMPLATEPATH . '/api/api_get_professores_i.php';
require_once TEMPLATEPATH . '/api/api_get_adm.php';
require_once TEMPLATEPATH . '/api/api_get_acervo.php';
require_once TEMPLATEPATH . '/api/api_get_noticias.php';
require_once TEMPLATEPATH . '/api/api_get_livraria.php';
require_once TEMPLATEPATH . '/api/api_get_testimonials.php';
require_once TEMPLATEPATH . '/api/api_get_direcao.php';

require_once TEMPLATEPATH . '/api/api_get_livro.php';
require_once TEMPLATEPATH . '/api/api_get_acervo_post.php';
require_once TEMPLATEPATH . '/api/api_get_testimonial.php';
require_once TEMPLATEPATH . '/api/api_get_direcao_membro.php';
require_once TEMPLATEPATH . '/api/api_get_adm_membro.php';


$template_diretorio = get_template_directory();

require_once($template_diretorio . "/custom-post-type/administracao.php");
require_once($template_diretorio . "/custom-post-type/direcao.php");
require_once($template_diretorio . "/custom-post-type/funcionarios.php");
require_once($template_diretorio . "/custom-post-type/professores-i.php");
require_once($template_diretorio . "/custom-post-type/professores-ii.php");
require_once($template_diretorio . "/custom-post-type/acervo.php");
require_once($template_diretorio . "/custom-post-type/livros.php");
require_once($template_diretorio . "/custom-post-type/noticias.php");
require_once($template_diretorio . "/custom-post-type/testimonials.php");


?>