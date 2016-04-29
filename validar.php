<?php

$login = $_GET['login'];
$senha = $_GET['senha'];

if(($login=='admin') and ($senha=='admin')){
	header("Location: inicio.php");
}else{
	header("Location: index.php");
}


echo $login;
echo $senha;

?>