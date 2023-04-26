<?php 
Class Contato
{
    public $Nome;
    public $Telefone;
    public $Email;

    #Grava informações de contato
    function setContato($Nome, $Telefone, $Email)
    {
        $this->Nome = $Nome;
        $this->Telefone = $Telefone;
        $this->Email = $Email;
    }

    #Obtém informações de contato
    function getContato()
    {
        return "Nome: {$this->Nome}, Telefone: {$this->Telefone}, Email: {$this->Telefone}";
    }
}