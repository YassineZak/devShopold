<?php
namespace YZ\UserBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use FOS\UserBundle\Util\LegacyFormHelper;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('gender', ChoiceType::class, array(
          'choices' =>array(
            'homme' => 'm',
            'femme' => 'f'
          ),
          'label' => 'Civilité'))
        ->add('firstname', null, array('label' => 'Prénom'))
        ->add('lastname', null, array('label' => 'Nom'))
        ->add('phone', null, array('label' => 'Téléphone'));
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'yz_user_registration';
    }
}



 ?>
