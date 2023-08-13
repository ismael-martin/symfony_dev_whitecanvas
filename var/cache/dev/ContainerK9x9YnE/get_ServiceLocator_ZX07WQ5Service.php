<?php

namespace ContainerK9x9YnE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZX07WQ5Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ZX07WQ5' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZX07WQ5'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pswdEncoder' => ['services', '.container.private.security.password_encoder', 'get_Container_Private_Security_PasswordEncoderService', true],
        ], [
            'pswdEncoder' => '?',
        ]);
    }
}
