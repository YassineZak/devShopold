<?php

namespace YZ\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

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
    public function productAction()
    {
      return $this->render('YZEcommerceBundle:Ecommerce:product.html.twig');
    }
    public function cartAction()
    {
      return $this->render('YZEcommerceBundle:Ecommerce:cart.html.twig');
    }
}
