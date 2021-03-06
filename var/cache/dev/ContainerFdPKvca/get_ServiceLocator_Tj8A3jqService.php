<?php

namespace ContainerFdPKvca;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Tj8A3jqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Tj8A3jq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Tj8A3jq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\DashboardController::edit' => ['privates', '.service_locator.qH9NJFW', 'get_ServiceLocator_QH9NJFWService', true],
            'App\\Controller\\HomeController::categorie' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\HomeController::recherche' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\HomeController::shop' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.ryfJKh6', 'get_ServiceLocator_RyfJKh6Service', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
            'App\\Controller\\DashboardController:edit' => ['privates', '.service_locator.qH9NJFW', 'get_ServiceLocator_QH9NJFWService', true],
            'App\\Controller\\HomeController:categorie' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\HomeController:recherche' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\HomeController:shop' => ['privates', '.service_locator..eHqkeB', 'get_ServiceLocator__EHqkeBService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.ryfJKh6', 'get_ServiceLocator_RyfJKh6Service', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:terminate' => ['privates', '.service_locator.bRdave9', 'get_ServiceLocator_BRdave9Service', true],
        ], [
            'App\\Controller\\DashboardController::edit' => '?',
            'App\\Controller\\HomeController::categorie' => '?',
            'App\\Controller\\HomeController::recherche' => '?',
            'App\\Controller\\HomeController::shop' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\DashboardController:edit' => '?',
            'App\\Controller\\HomeController:categorie' => '?',
            'App\\Controller\\HomeController:recherche' => '?',
            'App\\Controller\\HomeController:shop' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
