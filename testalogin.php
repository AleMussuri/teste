<?php

$login=$_POST['login'];
$senha=$_POST['senha'];

echo "$login e $senha";
if ($login == "admin@teste" && $senha=='123'){
    header('Location: http://localhost/Aula/menu.php');

}else{
    echo "login e senha invalidos";
    echo '<a href=login.html>Voltar</a>';
}