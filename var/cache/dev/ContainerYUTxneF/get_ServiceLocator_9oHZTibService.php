<?php

namespace ContainerYUTxneF;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_9oHZTibService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9oHZTib' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9oHZTib'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'actions' => ['privates', '.errored..service_locator.9oHZTib.EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions', NULL, 'Cannot autowire service ".service_locator.9oHZTib": it references class "EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions" but no such service exists.'],
        ], [
            'actions' => 'EasyCorp\\Bundle\\EasyAdminBundle\\Config\\Actions',
        ]);
    }
}
