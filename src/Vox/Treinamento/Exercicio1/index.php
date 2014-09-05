<?php

$acucar = new Acucar(0.5);
$leite = new Leite(1.5);

//composite
$cafe = new Cafe('expresso');
$cafe->addAdicional($adicional1)
     ->addAdicional($adicional2);

$cafe2 = new Cafe('expresso2');
$cafe2->addAdicional($adicional1)
     ->addAdicional($adicional2);

$pedido = new Pedido();
$pedido->addCafe($cafe)
        ->addCafe($cafe2);