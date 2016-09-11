<?php
require 'fb.php';
// ele faz o login do facebook e retorna um codigo que é o token
$helper = $fb->getRedirectLoginHelper();

try {
	$_SESSION['fb_access_token'] = (string) $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
	echo "ERRO SDK: ".$e->getMessage();
	exit;
}

header("Location: index.php");