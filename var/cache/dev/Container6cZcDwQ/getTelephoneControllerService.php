<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Admin\Controller\ProductManagement\TelephoneController' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\ControllerTrait.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\framework-bundle\\Controller\\AbstractController.php';
include_once $this->targetDirs[3].'\\src\\Common\\Controller\\BaseController.php';
include_once $this->targetDirs[3].'\\src\\Admin\\Controller\\AdminBaseController.php';
include_once $this->targetDirs[3].'\\src\\Admin\\Controller\\ProductManagement\\TelephoneController.php';

$this->services['App\Admin\Controller\ProductManagement\TelephoneController'] = $instance = new \App\Admin\Controller\ProductManagement\TelephoneController(($this->privates['monolog.logger'] ?? $this->getMonolog_LoggerService()));

$instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'App\\Admin\\Controller\\AdminBaseController::adminLogMgr' => array('privates', 'App\\Admin\\Service\\AdminOperatonLogManager', 'getAdminOperatonLogManagerService.php', true),
    'App\\Admin\\Controller\\ProductManagement\\TelephoneController::productManager' => array('privates', 'App\\Admin\\Service\\ProductTelephoneManager', 'getProductTelephoneManagerService.php', true),
    'App\\Common\\Controller\\BaseController::cache' => array('privates', 'cache.app.simple', 'getCache_App_SimpleService.php', true),
    'App\\Common\\Controller\\BaseController::parameters' => array('privates', 'parameter_bag', 'getParameterBagService', false),
    'App\\Common\\Controller\\BaseController::session' => array('services', 'session', 'getSessionService', false),
    'App\\Common\\Controller\\BaseController::settings' => array('privates', 'App\\Common\\Service\\SystemSetting', 'getSystemSettingService', false),
    'App\\Common\\Controller\\BaseController::translator' => array('services', 'translator', 'getTranslatorService', false),
    'http_kernel' => array('services', 'http_kernel', 'getHttpKernelService', false),
    'parameter_bag' => array('privates', 'parameter_bag', 'getParameterBagService', false),
    'request_stack' => array('services', 'request_stack', 'getRequestStackService', false),
    'router' => array('services', 'router', 'getRouterService', false),
    'security.authorization_checker' => array('services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false),
    'security.csrf.token_manager' => array('services', 'security.csrf.token_manager', 'getSecurity_Csrf_TokenManagerService.php', true),
    'security.token_storage' => array('services', 'security.token_storage', 'getSecurity_TokenStorageService', false),
    'session' => array('services', 'session', 'getSessionService', false),
    'twig' => array('services', 'twig', 'getTwigService', false),
)))->withContext('App\\Admin\\Controller\\ProductManagement\\TelephoneController', $this));

return $instance;
