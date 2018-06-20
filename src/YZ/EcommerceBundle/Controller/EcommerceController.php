<?php

namespace YZ\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use YZ\EcommerceBundle\Form\ProductType;
use YZ\EcommerceBundle\Entity\Product;

class EcommerceController extends Controller
{
    public function indexAction(Request $request)
    {
      $session = $request->getSession();
      if (!$session->has('panier')) {
      $panier = $session->set('panier', array());
      }
      else{
        $panier = $session->get('panier');
      }
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Category');
      $categories = $repository->findAll();
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Product');
      $products = $repository->findAll();
      $cartProducts = $repository->findByArray(array_keys($panier));
      $sommeproduits = $this->container->get('yz_somme_produits');
      $sommeproduits = $sommeproduits->somme($request, $cartProducts);
        return $this->render('YZEcommerceBundle:Ecommerce:index.html.twig', array('categories' => $categories, 'products' => $products, 'sommeproduits'=>$sommeproduits));
    }

    public function shopAction(Request $request, $page){
      $session = $request->getSession();
      if (!$session->has('panier')) {
      $panier = $session->set('panier', array());
      }
      else{
        $panier = $session->get('panier');
      }

      if ($page < 1) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
    $repository = $this->getDoctrine()
    ->getManager()
    ->getRepository('YZEcommerceBundle:Category');
    $categories = $repository->findAll();
    $nbPerPage = 10;
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Product');
      $cartProducts = $repository->findByArray(array_keys($panier));
      $sommeProduits = $this->container->get('yz_somme_produits');
      $sommeProduits = $sommeProduits->somme($request, $cartProducts);
      $products = $repository->getProducts($page, $nbPerPage);
      $nbPages = ceil(count($products) / $nbPerPage);
      if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
      return $this->render('YZEcommerceBundle:Ecommerce:shop.html.twig', array('categories' => $categories, 'products' => $products,  'sommeproduits'=>$sommeProduits,'nbPages'=> $nbPages,'page'=> $page));
    }


    public function productAction(Request $request, $slug)
    {
      $session = $request->getSession();
      if (!$session->has('panier')) {
      $panier = $session->set('panier', array());
      }
      else{
        $panier = $session->get('panier');
      }

      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Product');
      $cartProducts = $repository->findByArray(array_keys($panier));
      $sommeProduits = $this->container->get('yz_somme_produits');
      $sommeProduits = $sommeProduits->somme($request, $cartProducts);
      $product = $repository->findProduct($slug);
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Category');
      $categories = $repository->findAll();
      if (null === $product) {
      throw new NotFoundHttpException("Erreur page");
    }
      return $this->render('YZEcommerceBundle:Ecommerce:product.html.twig', array('product' => $product, 'categories' => $categories, 'sommeproduits' => $sommeProduits));
    }

    public function categoryAction(Request $request, $slug)
    {
      $session = $request->getSession();
      if (!$session->has('panier')) {
      $panier = $session->set('panier', array());
      }
      else{
        $panier = $session->get('panier');
      }

      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Product');
      $cartProducts = $repository->findByArray(array_keys($panier));
      $products = $repository->findByCategory($slug);
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Category');
      $categories = $repository->findAll();
      $sommeProduits = $this->container->get('yz_somme_produits');
      $sommeProduits = $sommeProduits->somme($request, $cartProducts);
      if (null === $products) {
      throw new NotFoundHttpException("Erreur page");
    }
      return $this->render('YZEcommerceBundle:Ecommerce:shop.html.twig', array('products' => $products, 'categories' => $categories, 'sommeproduits' =>$sommeProduits));
    }


  
}
