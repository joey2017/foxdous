<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'swiftmailer.mailer.mxhichina' shared service.

include_once $this->targetDirs[3].'\\vendor\\swiftmailer\\swiftmailer\\lib\\classes\\Swift\\Mailer.php';

return $this->services['swiftmailer.mailer.mxhichina'] = new \Swift_Mailer(($this->services['swiftmailer.transport'] ?? $this->load('getSwiftmailer_TransportService.php')));