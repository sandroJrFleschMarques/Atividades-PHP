<?php
require('atividade-final/usuario.php');

if (!session_id()) {
    // Verificando se há uma sessão, caso não tenha, será criada uma.
    session_start();
}

$title = $_POST['title'];
$content = $_POST['content'];

$_SESSION['recado-temp'] = array();


array_push($_SESSION['id'], $id);
array_push($_SESSION['recado-temp'], $title);
array_push($_SESSION['recado-temp'], $content);

var_dump($_SESSION['recado-temp']);

header("Location: action.php");

die();
