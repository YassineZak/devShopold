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

      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Category');
      $categories = $repository->findAll();
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Product');
      $products = $repository->findAll();
        return $this->render('YZEcommerceBundle:Ecommerce:index.html.twig', array('categories' => $categories, 'products' => $products));
    }

    public function shopAction($page){

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
      $products = $repository->getProducts($page, $nbPerPage);
      $nbPages = ceil(count($products) / $nbPerPage);
      if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
      return $this->render('YZEcommerceBundle:Ecommerce:shop.html.twig', array('categories' => $categories, 'products' => $products,'nbPages'=> $nbPages,'page'=> $page));
    }


    public function productAction($slug)
    {
      $session = $request->getSession();
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Product');
      $product = $repository->findProduct($slug);
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Category');
      $categories = $repository->findAll();
      if (null === $product) {
      throw new NotFoundHttpException("Erreur page");
    }
      return $this->render('YZEcommerceBundle:Ecommerce:product.html.twig', array('product' => $product, 'categories' => $categories));
    }

    public function categoryAction($slug)
    {
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Product');
      $products = $repository->findByCategory($slug);
      $repository = $this->getDoctrine()
      ->getManager()
      ->getRepository('YZEcommerceBundle:Category');
      $categories = $repository->findAll();
      if (null === $products) {
      throw new NotFoundHttpException("Erreur page");
    }
      return $this->render('YZEcommerceBundle:Ecommerce:shop.html.twig', array('products' => $products, 'categories' => $categories));
    }



}
