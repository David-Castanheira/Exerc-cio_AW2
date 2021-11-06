<?php

use exe1\Ingrediente;

class PricedEntree extends Entree 
{
    public function __construct($nome, $ingredientes) 
    {
        parent::__construct($nome, $ingredientes);
        foreach($this->ingredientes as $ingrediente) 
        {
            //Se o objeto $ingredientes não pertencer à classe Ingrediente 
            if(!$ingrediente instanceof \Meals\Ingrediente) 
            {
                throw new Exception('Elementos do $ingredientes não pertence à classe especificada');
            }
        }
    }

    public function getCusto() 
    {
        $custo = 0;
        foreach($this->ingredientes as $ingrediente) 
        {
            $custo += $ingrediente -> getCusto();
        } return $custo;
    }
}
?>