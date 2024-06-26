<?php

namespace Container1wCfIxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1I5_PQuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1I5.PQu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1I5.PQu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'quoteRequest' => ['privates', '.errored..service_locator.1I5.PQu.App\\Entity\\QuoteRequest', NULL, 'Cannot autowire service ".service_locator.1I5.PQu": it needs an instance of "App\\Entity\\QuoteRequest" but this type has been excluded in "config/services.yaml".'],
        ], [
            'quoteRequest' => 'App\\Entity\\QuoteRequest',
        ]);
    }
}
