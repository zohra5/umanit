<?php

namespace ContainerXpIbQW2;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBilanCompetencesRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\BilanCompetencesRepository' shared autowired service.
     *
     * @return \App\Repository\BilanCompetencesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/collections/lib/Doctrine/Common/Collections/Selectable.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityRepository.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/doctrine-bundle/Repository/ServiceEntityRepository.php';
        include_once \dirname(__DIR__, 4).'/src/Repository/BilanCompetencesRepository.php';

        return $container->privates['App\\Repository\\BilanCompetencesRepository'] = new \App\Repository\BilanCompetencesRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
