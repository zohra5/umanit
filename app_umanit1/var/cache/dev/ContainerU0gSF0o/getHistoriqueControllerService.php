<?php

namespace ContainerU0gSF0o;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getHistoriqueControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\HistoriqueController' shared autowired service.
     *
     * @return \App\Controller\HistoriqueController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/HistoriqueController.php';

        $container->services['App\\Controller\\HistoriqueController'] = $instance = new \App\Controller\HistoriqueController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\HistoriqueController', $container));

        return $instance;
    }
}
