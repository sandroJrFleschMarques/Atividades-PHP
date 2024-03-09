<?php

class Item
{
    public $valor;
    public $nome;
    public $descricao;

    public function __construct($valorP, $nomeP, $descricaoP)
    {
        $this->valor = $valorP;
        $this->nome = $nomeP;
        $this->descricao = $descricaoP;
    }
}

class Pedido
{
    public $itens = [];
    public $valorTotal;

    public function adicionar($item)
    {
        $this->itens[] = $item;
    }
    public function listar()
    {
        echo '<pre>';
        print_r($this->itens);
        echo '</pre>';
    }
}

abstract class FormatoDeElemento
{
    abstract public function desenhar();
    abstract public function redimensionar();
}
class Retangulo
{
    public $comprimento;
    public $altura;
    public function __construct($comprimentoP, $alturaP)
    {
        $this->comprimento = $comprimentoP;
        $this->altura = $alturaP;
    }
    public function desenhar()
    {
        echo "<div style='width:{$this->comprimento}; height:{$this->altura}; background-color:red'></div><br>";
    }
    public function redimensionar($novoCompr, $novaAlt)
    {
        $this->comprimento = $novoCompr;
        $this->altura = $novaAlt;
    }
}
class Circulo
{
    public $raio;
    public function __construct($raioP)
    {
        $this->raio = $raioP;
    }
    public function desenhar()
    {
        $raio2 = $this->raio * 2;
        echo "<div style='width:{$raio2}; height:{$raio2}; border-radius:50%; background-color:red'></div><br>";
    }
    public function redimensionar($novoRaio)
    {
        $this->raio = $novoRaio;
    }
}

class RevendaAuto
{
    public $nome;
    public $endereco;
    public $estoque = [];

    public function __construct($nomeP, $enderecoP)
    {
        $this->nome=$nomeP;
        $this->endereco=$enderecoP;
    }
    public function adicionarAoEstoque($estoqueP){
        $this->estoque[] = $estoqueP;

    }
    public function listarEstoque()
    {
        echo '<pre>';
        print_r($this->nome);
        echo '<br>';
        print_r($this->endereco);
        echo '<br>';
        print_r($this->estoque);
        echo '</pre>';
    }
}
class Carro {
    public $marca;
    public $modelo;
    public $valor;

    public function __construct($marcaP, $modeloP, $valorP)
    {
        $this->marca=$marcaP;
        $this->modelo=$modeloP;
        $this->valor=$valorP;
    }
}
