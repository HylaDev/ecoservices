<?php

namespace Container1wCfIxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LfCY4oQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LfCY4oQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LfCY4oQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'productRepo' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'serviceRepo' => ['privates', 'App\\Repository\\ServiceRepository', 'getServiceRepositoryService', true],
        ], [
            'productRepo' => 'App\\Repository\\ProductRepository',
            'serviceRepo' => 'App\\Repository\\ServiceRepository',
        ]);
    }
}
