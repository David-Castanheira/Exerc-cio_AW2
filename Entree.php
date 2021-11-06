<?php

use exe1\Ingrediente;

class Entree 
{
    private $nome;
    protected $ingredientes = array(); 

    public function getNome() 
    {
        return $this->nome;
    }

    public function __construct($nome, $ingredientes) 
    {
        //Se não for um array, uma exceção é gerada
        if (!is_array($ingredientes)) 
        {
           throw new Exception('$ingredientes must be an array'); 
        }
      $this->nome = $nome;
      $this->ingredientes = $ingredientes;  
    }

    public function hasIngrediente($ingrediente) 
    {
       return in_array($ingrediente, $this->ingredientes); 
    }
}
?>