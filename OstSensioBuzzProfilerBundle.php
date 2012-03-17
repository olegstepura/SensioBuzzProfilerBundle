<?php

namespace Ost\SensioBuzzProfilerBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Ost\SensioBuzzProfilerBundle\DependencyInjection\Compiler\AddTagPass;

class OstSensioBuzzProfilerBundle extends Bundle
{
	public function build(ContainerBuilder $container)
	{
		parent::build($container);

		$container->addCompilerPass(new AddTagPass());
	}
}
