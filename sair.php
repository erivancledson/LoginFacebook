<?php
session_start();
//saindo da sessão do usuario, nome da sessao fb_access_token
unset($_SESSION['fb_access_token']);
header("Location: index.php");