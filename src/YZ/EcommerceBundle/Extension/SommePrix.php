<?php
namespace YZ\EcommerceBundle\Extension;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Request;


/**
 *
 */
class SommePrix
{

  function somme(Request $request, array $produits ){
    $session = $request->getSession();
    $panier = $session->get('panier');
  $totalPrix = array();
  foreach ($produits as $produit) {
    if (isset($produit->getPromoTva())) {
      $prixProduit = ($produit->getPromoTva()) * $panier[$produit->getId()];
    }
    else {
      $prixProduit = ($produit->getPrixTva()) * $panier[$produit->getId()];
    }
    array_push($totalPrix, $prixProduit);
  }
  $totalPrix = array_sum($totalPrix);
  return $totalPrix;
  }

}
