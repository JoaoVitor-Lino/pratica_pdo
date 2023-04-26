<?php 
Class Cesta 
{
    private $itens;

    #Adiciona Itens na cesta
    function AdicionaItem(Produto $item)
    {
        $this->itens[] = $item;
    }

    #Exibe a lista de produtos
    function ExibeLista()
    {
        foreach ($this->itens as $item)
        {
            echo 'Codigo:   ' . $item->Codigo ."\n";
            echo 'Descricao:' .$item->Descricao ."\n";
        }
    }

    #Calcula o valor total da conta
    function CalculaTotal()
    {
        foreach($this->itens as $item)
        {
            $total += $item->Preco;
        }
        return 'R$ '. $total;
    }
}