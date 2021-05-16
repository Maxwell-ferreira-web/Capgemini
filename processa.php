<?php
session_start();
include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
$dtinic = filter_input(INPUT_POST, 'dtinic', FILTER_SANITIZE_STRING);
$dtterm = filter_input(INPUT_POST, 'dtterm', FILTER_SANITIZE_STRING);
$valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "Cliente: $cliente <br>";

$result_usuario = "INSERT INTO usuarios (nome, cliente, dtinic, dtterm, valor) VALUES ('$nome', '$cliente', '$dtinic', '$dtterm', '$valor')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
	header("Location: index.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
	header("Location: index.php");
}
