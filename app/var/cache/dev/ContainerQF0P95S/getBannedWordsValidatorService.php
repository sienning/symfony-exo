<?php

namespace ContainerQF0P95S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBannedWordsValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Validator\BannedWordsValidator' shared autowired service.
     *
     * @return \App\Validator\BannedWordsValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/validator/ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).'/src/Validator/BannedWordsValidator.php';

        return $container->privates['App\\Validator\\BannedWordsValidator'] = new \App\Validator\BannedWordsValidator();
    }
}
