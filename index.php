<?php

use Symfony\Component\Debug\Debug;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Vox\Treinamento\Exercicio1\Cafe;
use Vox\Treinamento\Exercicio1\Exercicio1Extension;
use Vox\Treinamento\Exercicio1\PedidoRenderer;

require 'vendor/autoload.php';

Debug::enable();

$container = new ContainerBuilder();
$extension = new Exercicio1Extension();
$container->registerExtension($extension);
$container->loadFromExtension($extension->getAlias());
//$loader = new YamlFileLoader($container, new FileLocator(__DIR__ . '/Resources/config'));
//$loader->load('services.yml');

$container->setParameter('acucar.valor', 5);

$container->compile();

$pedido = $container->get('pedido');
$impressora = new PedidoRenderer();
$pedido->attach($impressora);

$cafe1 = new Cafe();
$leite = $container->get('leite');
$cafe1->addAdicional($leite);

$cafe2 = new Cafe();
$acucar = $container->get('acucar');
$cafe2->addAdicional($acucar);

$pedido->addCafe($cafe1)
        ->addCafe($cafe2);
$pedido->finalizar();
