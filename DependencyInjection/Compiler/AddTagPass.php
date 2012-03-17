<?php

namespace Ost\SensioBuzzProfilerBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Reference;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;

/**
 * Adds tag buzz.client to service buzz.client
 * @author Oleg Stepura <github@oleg.stepura.com>
 */
class AddTagPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (false === $container->hasDefinition('buzz.client')) {
            return;
        }

        $definition = $container->getDefinition('buzz.client');
		$definition->addTag('buzz.client');
    }
}
