<?php

namespace Vox\Treinamento\Exercicio1;

Class Pedido implements \SplSubject {
    
    /**
     *
     * @var ArrayList
     */
    protected $cafes;
    
    protected $observadores;
            
    function __construct()
    {
        $this->cafes =  array();
        $this->observadores = array();
    }
    
    public function addCafe(Cafe $cafe){
        $this->cafes[] = $cafe;
        return $this;
    }
    
    public function finalizar(){
        $this->notify();
    }
    
    public function attach(\SplObserver $observer)
    {
        $this->observadores[] = $observer;
    }

    public function detach(\SplObserver $observer)
    {
        
    }

    public function notify()
    {
        foreach($this->observadores as $obs){
            $obs->update($this);
        }
    }

    public function getCafes()
    {
        return $this->cafes;
    }

    public function setCafes(ArrayList $cafes)
    {
        $this->cafes = $cafes;
    }


}

