<?php 
    defined('BASEPATH') OR exit('Você não tem para acessar esse diretorio ou não existe!!');
    function redirect_ssl() {
        $CI =& get_instance();
        $class = $CI->router->fetch_class();
        $exclude =  array('client');  // adicione mais nome do controlador para excluir ssl.
        if(!in_array($class,$exclude)) {
            // redirecionando para ssl.
            $CI->config->config['base_url'] = str_replace('http://', 'https://', $CI->config->config['base_url']);
            if ($_SERVER['SERVER_PORT'] != 443) redirect($CI->uri->uri_string());
        } else {
            // redirecionando sem ssl.
            $CI->config->config['base_url'] = str_replace('https://', 'http://', $CI->config->config['base_url']);
            if ($_SERVER['SERVER_PORT'] == 443) redirect($CI->uri->uri_string());
        }
    }
