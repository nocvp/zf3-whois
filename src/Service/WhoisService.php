<?php
/**
 * Created by PhpStorm.
 * User: semihs
 * Date: 13.08.2016
 * Time: 11:08
 */

namespace Whois\Service;
use Phois\Whois\Whois;

/**
 * Class WhoisService
 * @package Whois\Service
 */
class WhoisService
{
    /**
     * @var array
     */
    private $options = array();

    /**
     * WhoisService constructor.
     * @param array $options
     */
    public function __construct($options = array())
    {
        $this->options = $options;
    }

    /**
     * @param string $domain
     * @return string
     */
    public function query($domain)
    {
        return new Whois($domain);
    }
}