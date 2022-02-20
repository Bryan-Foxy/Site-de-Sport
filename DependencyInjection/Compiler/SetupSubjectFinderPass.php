<?php
namespace SymfonyBro\ErpCoreBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * Class SetupSubjectUrlProviderPass
 *
 * @package SymfonyBro\ErpCoreBundle\DependencyInjection\Compiler
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
class SetupSubjectFinderPass implements CompilerPassInterface
{
    private $tag = 'symfony_bro.subject_finder_resolver';

    private $providerId = 'symfony_bro_erp_core.model.subject_finder';

    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->providerId)) {
            return;
        }

        $finder = $container->findDefinition($this->providerId);

        $resolvers = $container->findTaggedServiceIds($this->tag);

        foreach ($resolvers as $id => $tags) {
            $finder->addMethodCall('addResolver', [$container->getDefinition($id)]);
        }
    }
}
