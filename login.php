<?php
require 'fb.php';
//ajudador especial
$helper = $fb->getRedirectLoginHelper();
//salvando a permissao, pedir o email do usuario, o nome e id já vem por padrão
//o email não é padrão então temos que pedir ele
$permissions = array('email');
//pegando a url do facebook, entrou ele vai entrar em callback
$loginurl = $helper->getLoginUrl('http://localhost/fb/callback.php', $permissions);
?>

<a href="<?php echo htmlspecialchars($loginurl); ?>">Fazer login com Facebook</a>