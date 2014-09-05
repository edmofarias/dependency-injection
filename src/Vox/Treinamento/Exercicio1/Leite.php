<?php

namespace Vox\Treinamento\Exercicio1;
use Vox\Treinamento\Exercicio1\AdicionalInterface;

Class Leite implements AdicionalInterface {
    
    protected $valor;
    
    function __construct($valor)
    {
        $this->valor = $valor;
    }

        public function getValor()
    {
        return $this->valor;
    }
    
    public function setValor($valor)
    {
        return $this->valor = $valor;
    }

}

