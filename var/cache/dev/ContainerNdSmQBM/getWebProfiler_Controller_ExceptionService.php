<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'web_profiler.controller.exception' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\web-profiler-bundle\\Controller\\ExceptionController.php';

return $this->services['web_profiler.controller.exception'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ExceptionController(NULL, ($this->services['twig'] ?? $this->getTwigService()), true, ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService()));
