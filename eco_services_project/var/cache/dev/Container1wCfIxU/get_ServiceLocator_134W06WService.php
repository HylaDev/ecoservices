<?php

namespace Container1wCfIxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_134W06WService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.134W06W' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.134W06W'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'user' => ['privates', '.errored..service_locator.134W06W.App\\Entity\\Users', NULL, 'Cannot autowire service ".service_locator.134W06W": it needs an instance of "App\\Entity\\Users" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'user' => 'App\\Entity\\Users',
        ]);
    }
}
