<?php
namespace SymfonyBro\ErpCoreBundle\DependencyInjection\Compiler;

use LogicException;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\DependencyInjection\Reference;
use SymfonyBro\ErpCoreBundle\Model\ProvidersAggregator;

/**
 * Class SetupReportTaskAggregatorPass
 *
 * @package SymfonyBro\ErpCoreBundle\DependencyInjection\Compiler
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
class SetupReportTaskAggregatorPass implements CompilerPassInterface
{
    private $factoryTag = 'symfony_bro.report_task_provider';

    private $builderClass = ProvidersAggregator::class;

    private $prefix = 'symfony_bro.report_aggregator.';

    public function process(ContainerBuilder $container)
    {
        $factories = $container->findTaggedServiceIds($this->factoryTag);

        foreach ($factories as $id => $tags) {
            foreach ($tags as $attributes) {
                if (!isset($attributes['report'])) {
                    throw new LogicException("'report' is required attribute for tag $this->factoryTag");
                }

                $report = $attributes['report'];

                $aggregator = $this->prefix.$report;
                if (!$container->hasDefinition($aggregator)) {
                    $definition = new Definition($this->builderClass);
                    $container->setDefinition($aggregator, $definition);
                } else {
                    $definition = $container->getDefinition($aggregator);
                }
                $definition->addMethodCall('addProvider', [$container->getDefinition($id)]);
            }
        }
    }
}
