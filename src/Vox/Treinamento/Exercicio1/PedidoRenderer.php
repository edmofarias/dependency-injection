<?php

namespace Vox\Treinamento\Exercicio1;

Class PedidoRenderer implements \SplObserver{
    
    public static function printPedido(Pedido $pedido)
    {
        return print_r($pedido,1);
    }

    public function update(\SplSubject $pedido)
    {
        print_r($pedido->getCafes());
    }

}
