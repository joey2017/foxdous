<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.Eu1D_g1' shared service.

return $this->privates['.service_locator.Eu1D_g1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'form' => array('privates', 'App\\Admin\\Form\\ArticleEditForm', 'getArticleEditFormService.php', true),
    'operatonLogManager' => array('privates', 'App\\Admin\\Service\\AdminOperatonLogManager', 'getAdminOperatonLogManagerService.php', true),
));