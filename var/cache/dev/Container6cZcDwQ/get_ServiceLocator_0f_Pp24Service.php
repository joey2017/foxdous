<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.0f.Pp24' shared service.

return $this->privates['.service_locator.0f.Pp24'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'editForm' => array('privates', 'App\\Admin\\Form\\VirtualNetworkOperatorEditForm', 'getVirtualNetworkOperatorEditFormService.php', true),
    'searchForm' => array('privates', 'Symfu\\SimpleFormBundle\\Form', 'getFormService.php', true),
));
