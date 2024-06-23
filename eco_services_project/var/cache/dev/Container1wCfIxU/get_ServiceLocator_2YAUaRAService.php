<?php

namespace Container1wCfIxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_2YAUaRAService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2YAUaRA' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2YAUaRA'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'productCategory' => ['privates', '.errored..service_locator.2YAUaRA.App\\Entity\\ProductCategory', NULL, 'Cannot autowire service ".service_locator.2YAUaRA": it needs an instance of "App\\Entity\\ProductCategory" but this type has been excluded in "config/services.yaml".'],
        ], [
            'productCategory' => 'App\\Entity\\ProductCategory',
        ]);
    }
}
