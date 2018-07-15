<?php

namespace YZ\EcommerceBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\Session;
use YZ\Userbundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use YZ\EcommerceBundle\Entity\Commande;

class OrderController extends Controller
{
  public function summaryAction(Request $request)
  {
    $session = $request->getSession();
    if (!$session->has('panier') || $session->get('panier') == null) {
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
    $repository = $this->getDoctrine()
    ->getManager()
    ->getRepository('YZUserBundle:User');
    $user = $this->container->get('security.token_storage')->getToken()->getUser();
    return $this->render('YZEcommerceBundle:Ecommerce:orderSummary.html.twig', array('cartProducts' => $cartProducts, 'categories' => $categories, 'sommeTva' => $sommeTva, 'sommePrix' => $sommePrix, 'user' => $user));
  }

  public function paymentAction() {
    return $this->render('YZEcommerceBundle:Ecommerce:orderPayment.html.twig');
  }

  public function checkoutAction(Request $request) {
    \Stripe\Stripe::setApiKey("sk_test_IC1U6xRv8IcPpKx3RRJWQstR");

        if ($request->isMethod('POST')) {
          // code...
        $token = $_POST['stripeToken'];
        $session = $request->getSession();
        if (!$session->has('panier') || $session->get('panier') == null) {
        throw new NotFoundHttpException("Cette page n'existe pas.");
        }
        else{
          $panier = $session->get('panier');
        }
        $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('YZEcommerceBundle:Product');
        $cartProducts = $repository->findByArray(array_keys($panier));
        $sommePrix = $this->container->get('yz_somme_prix');
        $sommePrix = $sommePrix->somme($request, $cartProducts);
        $user = $this->container->get('security.token_storage')->getToken()->getUser()->getNom();
        $em = $this->getDoctrine()->getManager();
        $repository = $this->getDoctrine()
        ->getManager()
        ->getRepository('YZEcommerceBundle:Commande');
        $lastCommande = $repository->findLastCommande();
        // Create a charge: this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => $sommePrix*100, // Amount in cents
                "currency" => "eur",
                "source" => $token,
                "description" => $user
            ));

            $commande = new commande;
            $commande->setUser($this->container->get('security.token_storage')->getToken()->getUser());
            $commande->setReference($lastCommande[0]['c_reference'] + 1);
            $commande->setProducts($cartProducts);
            $commande->setValidation(true);
            $commande->setAmount($sommePrix);
            $em->persist($commande);
            $em->flush();
            $this->addFlash("success","Merci pour votre achat");
            $session->remove('panier');
            return $this->redirectToRoute("yz_ecommerce_orderbills");
        } catch(\Stripe\Error\Card $e) {

            $this->addFlash("error", "Une erreur s'est produite");
            return $this->redirectToRoute("yz_ecommerce_ordersummary");
            // The card as been declined
        }
      }
      else {
        return $this->redirectToRoute("yz_ecommerce_homepage");
      }
  }
  public function billsAction(){
    $user = $this->container->get('security.token_storage')->getToken()->getUser();
    return $this->render('YZEcommerceBundle:Ecommerce:orderBills.html.twig', array('user' => $user));
    }
  public function userOrdersAction($id){
    $repository = $this->getDoctrine()
    ->getManager()
    ->getRepository('YZEcommerceBundle:Commande');
    $userOrder = $repository->findOrderByUser($id);
      return $this->render('YZEcommerceBundle:Ecommerce:userOrders.html.twig', array('userOrders'=>$userOrder));
    }
  }
