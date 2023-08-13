<?php

namespace ContainerHWxtxNM;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSession_Storage_MetadataBagService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'session.storage.metadata_bag' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag
     *
     * @deprecated Since symfony/framework-bundle 5.3: The "session.storage.metadata_bag" service is deprecated, create your own "session.storage.factory" instead.
     */
    public static function do($container, $lazyLoad = true)
    {
        trigger_deprecation('symfony/framework-bundle', '5.3', 'The "session.storage.metadata_bag" service is deprecated, create your own "session.storage.factory" instead.');

        return new \Symfony\Component\HttpFoundation\Session\Storage\MetadataBag('_sf2_meta', 0);
    }
}
