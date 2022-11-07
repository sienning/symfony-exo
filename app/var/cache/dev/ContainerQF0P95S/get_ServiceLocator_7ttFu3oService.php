<?php

namespace ContainerQF0P95S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_7ttFu3oService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.7ttFu3o' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.7ttFu3o'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.7ttFu3o.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.7ttFu3o": it references class "App\\Entity\\Article" but no such service exists.'],
            'normalizer' => ['privates', 'serializer', 'getSerializerService', true],
        ], [
            'article' => 'App\\Entity\\Article',
            'normalizer' => '?',
        ]);
    }
}
