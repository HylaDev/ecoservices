<?php

namespace Container1wCfIxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQrStatusControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\QrStatusController' shared autowired service.
     *
     * @return \App\Controller\QrStatusController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/QrStatusController.php';

        $container->services['App\\Controller\\QrStatusController'] = $instance = new \App\Controller\QrStatusController();

        $instance->setContainer(($container->privates['.service_locator.jUv.zyj'] ?? $container->load('get_ServiceLocator_JUv_ZyjService'))->withContext('App\\Controller\\QrStatusController', $container));

        return $instance;
    }
}
