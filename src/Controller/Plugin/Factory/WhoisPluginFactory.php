<?php
/**
 * Created by PhpStorm.
 * User: semihs
 * Date: 10/12/2016
 * Time: 11:58
 */

namespace Whois\Controller\Plugin\Factory;

use Whois\Controller\Plugin\WhoisPlugin;
use Whois\Service\WhoisService;
use Interop\Container\ContainerInterface;
use Interop\Container\Exception\ContainerException;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Zend\ServiceManager\Exception\ServiceNotFoundException;
use Zend\ServiceManager\Factory\FactoryInterface;

class WhoisPluginFactory implements FactoryInterface
{
    /**
     * Create an object
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     * @return object
     * @throws ServiceNotFoundException if unable to resolve the service.
     * @throws ServiceNotCreatedException if an exception is raised when creating a service.
     * @throws ContainerException if any other error occurs
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $whoisService = $container->get(WhoisService::class);

        return new WhoisPlugin($whoisService);
    }
}