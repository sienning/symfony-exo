<?php

namespace ContainerQF0P95S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JoHrCttService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.joHrCtt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.joHrCtt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'commentRepository' => ['privates', 'App\\Repository\\CommentRepository', 'getCommentRepositoryService', true],
            'normalizer' => ['privates', 'serializer', 'getSerializerService', true],
        ], [
            'commentRepository' => 'App\\Repository\\CommentRepository',
            'normalizer' => '?',
        ]);
    }
}
