<?php
require('pratica04/classes.php');
$circle2 = new Circulo(0);
$circle2->desenhar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style='box-sizing:border-box'>
    <p><b>1. Implemente e teste o modelo de classes com base na seguinte
            imagem:</b>

    </p>
    <p>
        <img src="./pratica04/1.png">
    </p>
    <?php

    $item0 = new Item(50, 'Camisa', 'Camisa Polo M');
    $item2 = new Item(99, 'Calça', 'Calça Jeans 40');

    $pedido = new Pedido();
    $pedido->adicionar($item2);
    $pedido->adicionar($item0);
    $pedido->listar();



    ?>
    <hr>
    <p><b>2. Implemente e teste o modelo de classes com base na seguinte
            imagem:</b>

    </p>
    <p>
        <img src="./pratica04/2.png">
    </p>


    <?php
    $retangulo = new Retangulo(50, 50);
    print_r($retangulo);
    $retangulo->desenhar();

    $retangulo2 = new Retangulo(70, 120);
    $retangulo2->redimensionar(140, 120);
    print_r($retangulo2);
    $retangulo2->desenhar();



    $circle = new Circulo(50);
    print_r($circle);
    $circle->desenhar();
    $circle2 = new Circulo(120);
    $circle2->redimensionar(23);
    print_r($circle2);
    $circle2->desenhar();
    ?>
    <hr>
    <p><b>3. Crie o diagrama de classe da atividade 3 da lista de atividades
            sobre Pilares POO e Composição.</b>

    </p>
    <p>
        <img src="./pratica04/3.png">
    </p>

    <?php
    echo "<a href='https://drive.google.com/file/d/1QPQKJ9zBhXRjW_M4gxjDhwzjapr7VLFN/view?usp=sharing'>Link do Draw.io para Atividade 3</a>";
    ?>
    <hr>
    <p><b>4. Chegou a hora de mostrar o quanto você sabe colocar no papel (ou
            code) o que pensa. Você deve pensar, modelar, programar e testar
            um modelo de classes baseado em uma situação da vida real. Ex:
            Locação de livros, restaurante...</b></p>
    <?php
    $revenda = new RevendaAuto('Top Car', 'Rua Sete de Setembro, Nº:290');
    $carro1 = new Carro('GM', 'Celta', 19900);
    $carro2 = new Carro('VW', 'Gol', 15000);
    $revenda->adicionarAoEstoque($carro1);
    $revenda->adicionarAoEstoque($carro2);
    $revenda->listarEstoque();
    ?>
</body>

</html>