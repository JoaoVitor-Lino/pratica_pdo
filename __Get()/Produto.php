<?php
Class Produto
{
    public $Codigo;
    public $Descricao;
    public $Quantidade;
    private $Preco;

    const MARGEM = 10;
    
    #Método construtor de um Produto

    function __construct($Codigo, $Descricao, $Quantidade, $Preco)
    {
        $this->Codigo = $Codigo;
        $this->Descricao = $Descricao;
        $this->Quantidade = $Quantidade;
        $this->Preco = $Preco;
    }

    function __get($propriedade)
    {
        echo "Obtendo o valor de {$propriedade} : \n";
        if ($propriedade = 'Preco')
        {
            return $this->$propriedade * ($this->Quantidade + (self::MARGEM / 100)) ."\n";
        }
    }
}