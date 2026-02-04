<?php
$host = 'localhost';
$usuario = 'root';
$senha = ''; // No XAMPP a senha padrão é vazia
$banco = 'adojovensdb';

$mysqli = new mysqli($host, $usuario, $senha, $banco);

if ($mysqli->connect_errno) {
  echo"Erro";
}

else{
    echo"Conectado com sucesso!";
}
?>