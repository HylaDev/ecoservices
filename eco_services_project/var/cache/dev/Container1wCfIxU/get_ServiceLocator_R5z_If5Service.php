<?php

namespace Container1wCfIxU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_R5z_If5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.R5z.if5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.R5z.if5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'customerRoleRepository' => ['privates', 'App\\Repository\\CustomerRoleRepository', 'getCustomerRoleRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', true],
            'mailerService' => ['privates', 'App\\Service\\MailerService', 'getMailerServiceService', true],
            'security' => ['privates', 'security.helper', 'getSecurity_HelperService', true],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'customerRoleRepository' => 'App\\Repository\\CustomerRoleRepository',
            'entityManager' => '?',
            'mailerService' => 'App\\Service\\MailerService',
            'security' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}
