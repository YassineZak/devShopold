<?php
  namespace Application\Sonata\UserBundle\Form\Handler;

  use FOS\UserBundle\Form\Handler\RegistrationFormHandler as BaseHandler;
  use FOS\UserBundle\Model\UserInterface;

  class RegistrationFormHandler extends BaseHandler
{
  public function process($confirmation = false)
    {
        $user = $this->userManager->createUser();
        $this->form->setData($user);
        dump($user);
        die;

        if ('POST' == $this->request->getMethod()) {
            $this->form->bind($this->request);
            if ($this->form->isValid()) {

                // do your custom logic here

                return true;
            }
        }

        return false;
    }
}




 ?>
