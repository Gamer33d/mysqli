<?php


#Inclui uma vez a conexao 
include_once('conexao.php');

#Verifica se o botão com o nome "Enviar" foi apertado
if(isset($_POST['enviar'])){
$email = mysqli_real_escape_string($conexao, $_POST['email']);

$username = mysqli_real_escape_string($conexao, $_POST['username']);

$senha = mysqli_real_escape_string($conexao, $_POST['senha']);
}


#Aqui e oque vai ser colocado na query 
$query = "INSERT INTO login (email, username, senha, data_cadastro) VALUES ('$email', '$username', '$senha', NOW())";

#Aqui executa a query
mysqli_query($conexao, $query);

#Redireciona para o index.html
header('Location: index.html');
exit;