<?php

namespace Vox\Treinamento\Exercicio1;

Class Cafe {
    /**
     *
     * @var ArrayList
     */
     protected $adicionais;
     
     function __construct()
     {
         $this->adicionais = array();
     }

     public function addAdicional(AdicionalInterface $ad)
     {
         $this->adicionais[] = $ad;
         return $this;
         
     }
     
}

