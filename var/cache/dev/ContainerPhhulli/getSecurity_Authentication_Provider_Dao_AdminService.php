<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.dao.admin' shared service.

return $this->services['security.authentication.provider.dao.admin'] = new \Symfony\Component\Security\Core\Authentication\Provider\DaoAuthenticationProvider(${($_ = isset($this->services['fos_user.user_provider.username']) ? $this->services['fos_user.user_provider.username'] : $this->load('getFosUser_UserProvider_UsernameService.php')) && false ?: '_'}, ${($_ = isset($this->services['security.user_checker']) ? $this->services['security.user_checker'] : $this->services['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()) && false ?: '_'}, 'admin', ${($_ = isset($this->services['security.encoder_factory']) ? $this->services['security.encoder_factory'] : $this->getSecurity_EncoderFactoryService()) && false ?: '_'}, true);