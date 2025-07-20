<?php

namespace Eltharin\AsServiceLocatorBundle;

use Eltharin\AsServiceLocatorBundle\DependencyInjection\Compiler\AsServiceLocatorCompilerPass;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\Yaml\Parser;

class EltharinAsServiceLocatorBundle extends AbstractBundle
{

    public function build(ContainerBuilder $container): void
    {
        parent::build($container);

        $container->addCompilerPass(new AsServiceLocatorCompilerPass());
    }
}
