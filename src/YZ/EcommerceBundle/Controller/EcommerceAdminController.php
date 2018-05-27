<?php

namespace YZ\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class EcommerceAdminController extends BaseAdminController
{
  public function createNewProductAction(){
    $product = new product();

  }
  /*$advert = new Advert();
  $user = $this->container->get('security.token_storage')->getToken()->getUser();
  $form   = $this->get('form.factory')->create(AdvertType::class, $advert);
  if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
    $advert->setUser($user);
    $em = $this->getDoctrine()->getManager();
    $em->persist($advert);
    $em->flush();
    $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
    return $this->redirectToRoute('oc_platform_view', array('id' => $advert->getId()));
  }
  return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
    'form' => $form->createView(),
  ));*/
}
