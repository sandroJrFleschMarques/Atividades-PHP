<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
if (!session_id()) {
    // Verificando se há uma sessão, caso não tenha, será criada uma.
    session_start();
}

if (!isset($_SESSION['users'][$email])) {
    //Verificando se a lista já foi setada/criada (is set)
    var_dump('Criando lista...');
    $_SESSION['users'][$email] = array();
}

if (!isset($_SESSION['id'])) {
    //Verificando se a lista já foi setada/criada (is set)
    var_dump('Criando lista...');
    $_SESSION['id'] = array();
    array_push($_SESSION['id'], 0);
}
$ii = $_SESSION['id'][0];

function geraId(){
    global $ii;
    return $ii++;
}
