<?php

namespace YZ\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EcommerceController extends Controller
{
    public function indexAction()
    {
        return $this->render('YZEcommerceBundle:Ecommerce:index.html.twig');
    }

    public function shopAction()
    {
      return $this->render('YZEcommerceBundle:Ecommerce:shop.html.twig');
    }
}
