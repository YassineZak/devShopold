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
      parent::buildForm($builder, $options);
        $builder
        ->add('prenom')
        ->add('nom')
        ->add('adresseFacturation')
        ->add('villeFacturation')
        ->add('codePostalFacturation')
        ->add('adresseLivraison')
        ->add('villeLivraison')
        ->add('codePostalLivraison')
        ->add('telephone');
    }

    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }

    public function getName()
    {
        return 'yz_user_registration';
    }
}



 ?>
