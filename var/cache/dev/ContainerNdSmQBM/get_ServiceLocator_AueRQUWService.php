<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.AueRQUW' shared service.

return $this->privates['.service_locator.AueRQUW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'form' => array('privates', 'App\\Common\\Form\\UserForm', 'getUserFormService.php', true),
));
