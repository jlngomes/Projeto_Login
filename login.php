<?php

$nome = $_POST['nome_login'];
$senha = $_POST['senha_login'];

if($nome == "administrador" && $senha == "123"){
   header('location:restrito.php') ;
}