<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'var_dumper.server_connection' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Server\\Connection.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\ContextProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\SourceContextProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\RequestContextProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\var-dumper\\Dumper\\ContextProvider\\CliContextProvider.php';

return $this->privates['var_dumper.server_connection'] = new \Symfony\Component\VarDumper\Server\Connection('tcp://'.$this->getEnv('string:VAR_DUMPER_SERVER'), array('source' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\SourceContextProvider('UTF-8', $this->targetDirs[3], ($this->privates['debug.file_link_formatter'] ?? $this->getDebug_FileLinkFormatterService())), 'request' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\RequestContextProvider(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()))), 'cli' => new \Symfony\Component\VarDumper\Dumper\ContextProvider\CliContextProvider()));
