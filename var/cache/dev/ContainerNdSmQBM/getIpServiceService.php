<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Passport\Service\IpService' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Service\\ServiceSubscriberTrait.php';
include_once $this->targetDirs[3].'\\src\\Common\\Service\\BaseService.php';
include_once $this->targetDirs[3].'\\src\\Passport\\Service\\IpService.php';

$this->privates['App\Passport\Service\IpService'] = $instance = new \App\Passport\Service\IpService(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

$instance->setContainer(($this->privates['.service_locator.fleq5MM'] ?? $this->load('get_ServiceLocator_Fleq5MMService.php'))->withContext('App\\Passport\\Service\\IpService', $this));

return $instance;
