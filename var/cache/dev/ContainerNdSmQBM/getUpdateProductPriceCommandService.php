<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Admin\Command\UpdateProductPriceCommand' shared autowired service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\contracts\\Service\\ServiceSubscriberTrait.php';
include_once $this->targetDirs[3].'\\src\\Admin\\Command\\UpdateProductPriceCommand.php';

$this->privates['App\Admin\Command\UpdateProductPriceCommand'] = $instance = new \App\Admin\Command\UpdateProductPriceCommand();

$instance->setContainer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'App\\Admin\\Command\\UpdateProductPriceCommand::adminLogMgr' => array('privates', 'App\\Admin\\Service\\AdminOperatonLogManager', 'getAdminOperatonLogManagerService.php', true),
    'App\\Admin\\Command\\UpdateProductPriceCommand::logger' => array('privates', 'monolog.logger', 'getMonolog_LoggerService', false),
    'App\\Admin\\Command\\UpdateProductPriceCommand::productFlowManager' => array('privates', 'App\\Admin\\Service\\ProductFlowManager', 'getProductFlowManagerService.php', true),
    'App\\Admin\\Command\\UpdateProductPriceCommand::productMobileManager' => array('privates', 'App\\Admin\\Service\\ProductMobileManager', 'getProductMobileManagerService.php', true),
    'App\\Admin\\Command\\UpdateProductPriceCommand::productTelephoneManager' => array('privates', 'App\\Admin\\Service\\ProductTelephoneManager', 'getProductTelephoneManagerService.php', true),
    'App\\Admin\\Command\\UpdateProductPriceCommand::productTencentManager' => array('privates', 'App\\Admin\\Service\\ProductTencentManager', 'getProductTencentManagerService.php', true),
)))->withContext('App\\Admin\\Command\\UpdateProductPriceCommand', $this));
$instance->setName('product:update_price');

return $instance;