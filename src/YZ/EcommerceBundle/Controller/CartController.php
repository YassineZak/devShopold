<?php

namespace YZ\EcommerceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\Session;

class CartController extends Controller
{
  public function cartAction(Request $request)
  {
    $session = $request->getSession();
    if (!$session->has('panier')) {
    $panier = $session->set('panier', array());
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
    $repository = $this->getDoctrine()
    ->getManager()
    ->getRepository('YZEcommerceBundle:Category');
    $categories = $repository->findAll();
    return $this->render('YZEcommerceBundle:Ecommerce:cart.html.twig', array('cartProducts' => $cartProducts, 'categories' => $categories, 'sommeTva' => $sommeTva));
  }

  public function addToCartAction($id, Request $request){
    $getRequest = Request::createFromGlobals();
    $session = $request->getSession();
    $get = $request->query->get('qte');
    if ($get == 0) {
      $get = 1;
    }
    if (!$session->has('panier')) {
    $panier = $session->set('panier', array());
    }
    else{
      $panier = $session->get('panier');
    }

    $panier[$id] = $get;

    $session->set('panier', $panier);
    return $this->redirect($this->generateUrl('yz_ecommerce_cartpage'));
  }
  public function removeCartAction($id, Request $request){
    $session = $request->getSession();
    $panier = $session->get('panier');
    if (isset($panier[$id])) {
      unset($panier[$id]);
      $session->set('panier', $panier);
    }
    return $this->redirect($this->generateUrl('yz_ecommerce_cartpage'));
  }








}
