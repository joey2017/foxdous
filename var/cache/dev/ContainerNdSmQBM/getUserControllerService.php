<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Admin\Controller\UserController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Common\\Controller\\BaseController.php';
include_once $this->targetDirs[3].'\\src\\Admin\\Controller\\AdminBaseController.php';
include_once $this->targetDirs[3].'\\src\\Admin\\Controller\\UserController.php';

$this->services['App\Admin\Controller\UserController'] = $instance = new \App\Admin\Controller\UserController(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

$instance->setContainer(($this->privates['.service_locator.YUbLTjT'] ?? $this->load('get_ServiceLocator_YUbLTjTService.php'))->withContext('App\\Admin\\Controller\\UserController', $this));

return $instance;
