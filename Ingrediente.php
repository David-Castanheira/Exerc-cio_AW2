<?php
namespace Meals; 
   class Ingrediente 
   {
       protected $nome;
       protected $custo; 
      
    public function __construct($nome, $custo)
    {
        $this -> nome = $nome;
        $this -> custo = $custo;
    }   
       
    public function getNome() 
    {
        return $this -> nome;
    }  
    
    public function setNome($nome) 
    {
        $this -> nome = $nome;
    }
    
    public function getCusto() 
    {
        return $this -> custo;
    }
    
    //Método que altera o custo do ingrediente
    public function setCusto($custo) 
    {
        $this -> custo = $custo;
    }
}
?>   