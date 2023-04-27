<?php
Class Cachorro{
   private $Nascimento;
   
   #Método Construtor
   function __construct($nome)
   {
        $this->nome = $nome; 
   }

   #Intercepta atribuição
   function __set($propriedade, $valor)
   {
    var_dump($propriedade);
    var_dump($valor);
    die();
        if ($propriedade == 'Nascimento')
        {
            /**
             * Veridica se o valor é dividido
             * em três partes separadas por '/'
             */
            if (count(explode('/', $valor)) == 3)
            {
                echo "Dado {$valor}, atribuido à {$propriedade} \n";
                $this->propriedade = $valor;
            }
            else
            {
                echo "Dado {$valor}, não atribuido à {$propriedade} \n";
            }
        }
        else
        {
            $this->propriedade = $valor;
        }
   }
}