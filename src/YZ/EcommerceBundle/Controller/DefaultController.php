<?php

namespace YZ\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('YZEcommerceBundle:Default:index.html.twig');
    }
}
