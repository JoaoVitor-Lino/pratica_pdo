<?php 
    Class Banco 
    {
        public $agencia;
        public $codigo;
        public $dataCriacao;
        public $titular;
        public $senha;
        public $cancelada;
        public $saldo;
        

        public function __construct($agencia, $codigo, $dataCriacao, $titular, $senha, $cancelada, $saldo)
        {
            $this->agencia = $agencia;
            $this->codigo = $codigo;
            $this->dataCriacao = $dataCriacao;
            $this->titular = $titular;
            $this->senha = $senha;
            $this->cancelada = $cancelada;
            $this->saldo = $saldo;
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

        public function depositar($valor)
        {
            if ($valor <= 10)
            {
                echo "Tentativa de depositar menor que o permitido \n";
                die();
            }
            $this->saldo += $valor;
            return $this->saldo;
        }

        public function obterSaldo()
        {
            return $this->saldo;
        }

        public function getAgencia()
        {
            return $this->agencia;
        }

        public function setAgencia($agencia)
        {
            $this->agencia = $agencia;
        }

        public function getCodigo()
        {
            return $this->codigo;
        }

        public function setCodigo($codigo)
        {
            $this->codigo = $codigo;
        }

        public function getDataCriacao()
        {
            return $this->dataCriacao;
        }

        public function setDataCriacao($dataCriacao)
        {
            $this->dataCriacao = $dataCriacao;
        }

        public function getTitular()
        {
            return $this->titular;
        }

        public function setTitular($titular)
        {
            $this->titular = $titular;
        }

        public function getSenha()
        {
            return $this->senha;
        }

        public function setSenha($senha)
        {
            $this->senha = $senha;
        }

        public function getCancelada()
        {
            return $this->cancelada;
        }

        public function setCancelada($cancelada)
        {
            if ($this->cancelada == true)
            {
                echo "Conta do Titular $this->titular ja se encontra cancelada";
                die();
            }
            $this->cancelada = $cancelada;
        }

        public function getSaldo()
        {
            return $this->saldo;
        }

        public function setSaldo($saldo)
        {
            $this->saldo = $saldo;
        }
    }
?>