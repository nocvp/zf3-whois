<?php
/**
 * Created by PhpStorm.
 * User: semihs
 * Date: 10/12/2016
 * Time: 11:58
 */

namespace Whois\Controller\Plugin;

use Whois\Service\WhoisService;
use Zend\Mvc\Controller\Plugin\AbstractPlugin;

/**
 * Class WhoisPlugin
 * @package Whois\Controller\Plugin
 */
class WhoisPlugin extends AbstractPlugin
{
    /**
     * @var WhoisService
     */
    protected $whois_service;

    /**
     * WhoisPlugin constructor.
     * @param WhoisService $whoisService
     */
    public function __construct(WhoisService $whoisService)
    {
        $this->whois_service = $whoisService;
    }

    /**
     * @param $domain
     * @return string
     */
    public function __invoke($domain)
    {
        return $this->getWhoisService()->query($domain);
    }

    /**
     * @return WhoisService
     */
    public function getWhoisService()
    {
        return $this->whois_service;
    }

    /**
     * @param WhoisService $whois_service
     */
    public function setWhoisService($whois_service)
    {
        $this->whois_service = $whois_service;
    }
}