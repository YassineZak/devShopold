<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'easyadmin.form.type' shared service.

$a = ${($_ = isset($this->services['easyadmin.config.manager']) ? $this->services['easyadmin.config.manager'] : $this->getEasyadmin_Config_ManagerService()) && false ?: '_'};

return $this->services['easyadmin.form.type'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType($a, array(5 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\AutocompleteTypeConfigurator(), 4 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CollectionTypeConfigurator(), 3 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CheckboxTypeConfigurator(), 2 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TypeConfigurator($a), 1 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\EntityTypeConfigurator(), 0 => new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\FOSCKEditorTypeConfigurator()));
