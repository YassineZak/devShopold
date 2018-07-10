<?php

namespace YZ\EcommerceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\Session;

class OrderController extends Controller
{
  public function summaryAction(Request $request)
  {
    $session = $request->getSession();
    if (!$session->has('panier')) {
    throw new NotFoundHttpException("Cette page n'existe pas.");
    }
    else{
      $panier = $session->get('panier');
    }
    $totalprixTva = array();
    $repository = $this->getDoctrine()
    ->getManager()
    ->getRepository('YZEcommerceBundle:Product');
    $cartProducts = $repository->findByArray(array_keys($panier));
    $sommeTva = $this->container->get('yz_somme_tva');
    $sommeTva = $sommeTva->somme($request, $cartProducts);
    $sommePrix = $this->container->get('yz_somme_prix');
    $sommePrix = $sommePrix->somme($request, $cartProducts);
    $repository = $this->getDoctrine()
    ->getManager()
    ->getRepository('YZEcommerceBundle:Category');
    $categories = $repository->findAll();
    return $this->render('YZEcommerceBundle:Ecommerce:orderSummary.html.twig', array('cartProducts' => $cartProducts, 'categories' => $categories, 'sommeTva' => $sommeTva, 'sommePrix' => $sommePrix));
  }


}
