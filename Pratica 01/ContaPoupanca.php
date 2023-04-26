<?php 
include 'Banco.php';

Class ContaPoupanca extends Banco
{
    public $aniversario;

    public function __construct($agencia, $codigo, $dataCriacao, $titular, $senha, $cancelada, $saldo, $aniverasio)
    {
        parent::__construct($agencia, $codigo, $dataCriacao, $titular, $senha, $cancelada, $saldo);

        $this->aniversario = $aniverasio;
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

    public function getAniversario()
    {
        return $this->aniversario;
    }

    public function setAniversario($aniversario)
    {
        $this->aniversario = $aniversario;
    }
}

?>