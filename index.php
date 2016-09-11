<?php
require 'fb.php';
//verificar se existe a sessão e tiver preenchida quer dizer que estamos logado
if(isset($_SESSION['fb_access_token']) && !empty($_SESSION['fb_access_token'])) {
         //pega a informação do usuario pegar dele email, nome, id, imagem
	$res = $fb->get('/me?fields=email,name,id,picture,birthday', $_SESSION['fb_access_token']);
          //pega a resposta que é um json e transformamos em um array de objetos
	$r = json_decode($res->getBody());
         //imagem do perfil
	$img = $r->picture->data->url;

	echo "<img src='".$img."' border='0' />";

	echo "Meu nome: ".$r->name."<br/>";
        echo "Meu email: ".$r->email."<br/>";
        echo "Meu aniversario: ".$r->birthday;
       
	echo "<br/><a href='sair.php'>Sair</a>";

} else {
	header("Location: login.php");
}