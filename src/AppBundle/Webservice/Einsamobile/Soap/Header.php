<?php

namespace AppBundle\Webservice\Einsamobile\Soap;

/**
 * Class Header
 * @package AppBundle\Webservice\Einsamobile\Soap
 */
class Header
{
    /**
     * @var string Username
     */
    public $username;

    /**
     * @var string Password
     */
    public $password;

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
}