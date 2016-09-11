<?php
session_start();
//autoload da bibliotera do php
require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
    // id do aplicativo que foi criado no facebook developer
	'app_id' => '1151626044896921',
    // vai em app secret e clicia em shop, ou chave sercreta do aplicativo e clica em mostrar informa a senha
	'app_secret' => 'bbe0ae63c99b60dc3e0ede15ec760b93',
	'default_graph_version' => 'v2.7'
]);