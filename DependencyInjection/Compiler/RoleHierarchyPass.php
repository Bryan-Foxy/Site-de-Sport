<?php

namespace SymfonyBro\ErpCoreBundle\DependencyInjection\Compiler;

/**
 * Class RoleHierarchyPass
 *
 * @author Artem Dekhtyar <m@artemd.ru>
 * @author Pavel Stepanets <pahhan.ne@gmail.com>
 */
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class RoleHierarchyPass implements CompilerPassInterface
{

    private $parameterName;

    public function __construct($parameterName)
    {
        $this->parameterName = $parameterName;
    }

    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container)
    {
        $roles = [];
        if ($container->hasParameter('security.role_hierarchy.roles')) {
            $roles = $container->getParameter('security.role_hierarchy.roles');
        }

        $injectedRoles = [];
        if (null !== $this->parameterName && $container->hasParameter($this->parameterName)) {
            $injectedRoles = $container->getParameter($this->parameterName);
        }

        foreach ($injectedRoles as $injectedRole => $injectedRoleValue) {
            $injectedRoleValue = (array)$injectedRoleValue;
            if (isset($roles[$injectedRole])) {
                $existedRoleValue = (array)$roles[$injectedRole];
                $roles[$injectedRole] = array_merge($existedRoleValue, $injectedRoleValue);
            } else {
                $roles[$injectedRole] = $injectedRoleValue;
            }
        }

        $container->setParameter('security.role_hierarchy.roles', $roles);
    }
}
