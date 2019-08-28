<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Reseller\Controller\OrderController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Common\\Controller\\BaseController.php';
include_once $this->targetDirs[3].'\\src\\Reseller\\Controller\\ResellerBaseController.php';
include_once $this->targetDirs[3].'\\src\\Reseller\\Controller\\OrderController.php';

$this->services['App\Reseller\Controller\OrderController'] = $instance = new \App\Reseller\Controller\OrderController(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

$instance->setContainer(($this->privates['.service_locator.0ACZ0gT'] ?? $this->load('get_ServiceLocator_0ACZ0gTService.php'))->withContext('App\\Reseller\\Controller\\OrderController', $this));

return $instance;
