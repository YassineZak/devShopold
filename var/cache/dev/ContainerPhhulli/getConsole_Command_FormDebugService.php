<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.form_debug' shared service.

$this->services['console.command.form_debug'] = $instance = new \Symfony\Component\Form\Command\DebugCommand(${($_ = isset($this->services['form.registry']) ? $this->services['form.registry'] : $this->getForm_RegistryService()) && false ?: '_'}, array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type', 1 => 'YZ\\UserBundle\\Form\\Type', 2 => 'Symfony\\Bridge\\Doctrine\\Form\\Type', 3 => 'FOS\\UserBundle\\Form\\Type', 4 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type', 5 => 'Vich\\UploaderBundle\\Form\\Type'), array(0 => 'YZ\\UserBundle\\Form\\Type\\RegistrationFormType', 1 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType', 2 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType', 3 => 'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType', 4 => 'FOS\\UserBundle\\Form\\Type\\UsernameFormType', 5 => 'FOS\\UserBundle\\Form\\Type\\ProfileFormType', 6 => 'FOS\\UserBundle\\Form\\Type\\RegistrationFormType', 7 => 'FOS\\UserBundle\\Form\\Type\\ChangePasswordFormType', 8 => 'FOS\\UserBundle\\Form\\Type\\ResettingFormType', 9 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminFormType', 10 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminAutocompleteType', 11 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminDividerType', 12 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminSectionType', 13 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Type\\EasyAdminGroupType', 14 => 'Vich\\UploaderBundle\\Form\\Type\\VichFileType', 15 => 'Vich\\UploaderBundle\\Form\\Type\\VichImageType'), array(0 => 'Symfony\\Component\\Form\\Extension\\Core\\Type\\TransformationFailureExtension', 1 => 'Symfony\\Component\\Form\\Extension\\HttpFoundation\\Type\\FormTypeHttpFoundationExtension', 2 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\FormTypeValidatorExtension', 3 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\RepeatedTypeValidatorExtension', 4 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\SubmitTypeValidatorExtension', 5 => 'Symfony\\Component\\Form\\Extension\\Validator\\Type\\UploadValidatorExtension', 6 => 'Symfony\\Component\\Form\\Extension\\Csrf\\Type\\FormTypeCsrfExtension', 7 => 'Symfony\\Component\\Form\\Extension\\DataCollector\\Type\\DataCollectorTypeExtension', 8 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Extension\\EasyAdminExtension'), array(0 => 'Symfony\\Component\\Form\\Extension\\Validator\\ValidatorTypeGuesser', 1 => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser', 2 => 'EasyCorp\\Bundle\\EasyAdminBundle\\Form\\Guesser\\MissingDoctrineOrmTypeGuesser'));

$instance->setName('debug:form');

return $instance;
