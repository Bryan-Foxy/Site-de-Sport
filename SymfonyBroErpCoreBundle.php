<?php

namespace SymfonyBro\ErpCoreBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use SymfonyBro\ErpCoreBundle\DependencyInjection\Compiler\SetupReportTaskAggregatorPass;
use SymfonyBro\ErpCoreBundle\DependencyInjection\Compiler\SetupSubjectFinderPass;
use SymfonyBro\ErpCoreBundle\DependencyInjection\Compiler\SetupSubjectUrlProviderPass;

class SymfonyBroErpCoreBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new SetupSubjectUrlProviderPass());
        $container->addCompilerPass(new SetupSubjectFinderPass());
        $container->addCompilerPass(new SetupReportTaskAggregatorPass());
    }
}
