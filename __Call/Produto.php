<?php 
Class Produto
{
    public $Codigo;
    public $Descricao;
    public $Quantidade;
    private $Preco;
    const MARGEM = 10;

    #Método construtor de um produto
    function __construct($Codigo, $Descricao, $Quantidade, $Preco)
    {
        $this->Codigo = $Codigo;
        $this->Descricao = $Descricao;
        $this->Quantidade = $Quantidade;
        $this->Preco = $Preco;
    }
    
    #Intercepta a chamada à métodos
    function __call($metodo, $parametros)
    {
        echo "Você executou o método: {$metodo} \n";
        foreach ($parametros as $key => $parametro)
        {
            echo "\tParâmetro $key; $parametro \n";
        }
    }
}