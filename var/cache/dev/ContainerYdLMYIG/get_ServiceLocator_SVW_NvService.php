<?php

namespace ContainerYdLMYIG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_SVW_NvService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.SV_w.nv' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.SV_w.nv'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'request' => ['privates', '.errored.QYVbeIw', NULL, 'Cannot determine controller argument for "App\\Controller\\TodoController::index()": the $request argument is type-hinted with the non-existent class or interface: "App\\Controller\\Request". Did you forget to add a use statement?'],
        ], [
            'request' => '?',
        ]);
    }
}
