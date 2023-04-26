<?php
Class Fornecedor
{
    public $Codigo;
    public $RazaoSocial;
    public $Endereco;
    public $Cidade;
    public $Contato;

    #Método Construtor
    function __construct()
    {
        #Instancia um novo Contato
        $this->Contato = new Contato;
    }

    #Grava Contato
    function setContato($Nome, $Telefone, $Email)
    {
        //Delega chamada de método
        $this->Contato->setContato($Nome, $Telefone, $Email);
    }

    #Retorna contato
    function getContato()
    {
        //Delega chamada de método
        return $this->Contato->getContato();
    }
}