# HookSSL
Força SSL No Codeigniter

# COMO ATIVAR E USAR: 
Abra o arquivo de configuração do local application/config/config.phpe ative ou defina os hooks como true:<br />

$config['enable_hooks'] = TRUE;<br />
Em seguida, crie um novo arquivo chamado hooks.phpdentro da configpasta (por exemplo, application/config/hooks.php) e 
adicione o seguinte código:<br />
<code>
$hook['post_controller_constructor'][] = array(
    'function' => 'redirect_ssl',
    'filename' => 'ssl.php',
    'filepath' => 'hooks'
);
</code><br />
Agora crie um novo diretório chamado hooksdentro da applicationpasta (por exemplo, application/hooks) e, 
em seguida, crie um novo arquivo chamado ssl.phpdentro da hookspasta (por exemplo, application/hooks/ssl.php).
