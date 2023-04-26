<?php 

require('config.php');

Class Conexao
{

    private $banco = DB_NAME;
    private $db_host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    public $acesso;

    public function __construct()
    {
        if (!isset($this->acesso))
        {
            $this->setAcesso();
        }
        return $this->acesso;
    }

    private function setAcesso()
    {
        try{
            $this->acesso = new PDO ("mysql:host=".$this->db_host.";dbname=".$this->banco,$this->user,$this->pass);
            
            $this->acesso->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "ERRO no Banco de Dados" . $e->getMessage();
        } catch (Exception $e) {
            echo "ERRO generico" . $e->getMessage();
        }
    }
}


?>