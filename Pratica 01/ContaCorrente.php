<?php 
include 'Banco.php';

Class ContaCorrente extends Banco
{
    public $limite;

    public function __construct($agencia, $codigo, $dataCriacao, $titular, $senha, $cancelada, $saldo,$limite)
    {
        parent::__construct($agencia, $codigo, $dataCriacao, $titular, $senha ,$cancelada , $saldo);
        $this->limite = $limite;
    }

    public function retirar($valor)
    {
        if ($valor > $this->saldo)
        {
            echo "Saldo insuficente para saque \n";
            die();
        }
        $this->saldo -= $valor;
        return $this->saldo;
    }
    public function setLimite($limite)
    {
        $this->limite = $limite;
    }

    public function getLimite()
    {
        return $this->limite;
    }
}

?> 