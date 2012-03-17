<?php

namespace Ost\SensioBuzzProfilerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Adds tagged request.param_converter services to converter.manager service
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class AddTagPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
//        if (false === $container->hasDefinition('sensio_framework_extra.converter.manager')) {
//            return;
//        }

        $definition = $container->getDefinition('buzz.client');
		$definition->addTag('buzz.client');
    }
}
