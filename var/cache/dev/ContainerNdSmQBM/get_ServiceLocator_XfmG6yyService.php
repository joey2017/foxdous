<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.XfmG6yy' shared service.

return $this->privates['.service_locator.XfmG6yy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, array(
    'articleManager' => array('privates', 'App\\Common\\Service\\ArticleManager', 'getArticleManagerService.php', true),
));
