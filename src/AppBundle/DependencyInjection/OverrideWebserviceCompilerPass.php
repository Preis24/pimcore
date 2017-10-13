<?php
namespace AppBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

use AppBundle\Model\Webservice\Service;

class OverrideWebserviceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
//        $definition = $container->getDefinition('pimcore_admin.webservice.service');
//        $definition->setClass(Service::class);
    }
}