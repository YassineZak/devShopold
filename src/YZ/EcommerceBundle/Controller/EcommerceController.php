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
    public function productAction($id)
    {
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Product');
      $product = $repository->find($id);
      if (null === $product) {
      throw new NotFoundHttpException("Erreur page");
    }
      return $this->render('YZEcommerceBundle:Ecommerce:product.html.twig', array('product' => $product));
    }
    public function cartAction()
    {
      return $this->render('YZEcommerceBundle:Ecommerce:cart.html.twig');
    }
}
