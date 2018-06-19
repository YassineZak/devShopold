<?php
namespace YZ\EcommerceBundle\Twig\Extension;


/**
 *
 */
class SommePrixExtension extends \Twig_Extension
{
  public function getFilters()
  {
    return array(new \Twig_SimpleFilter('tva', array($this, 'sommePrix')));
  }

  function sommePrix(array $produit,$tva ){

  $totalPrix = array()
  foreach ($produits as $produit) {
    $prixProduit = ($tva) * $panier[$produit->getId()];
    array_push($totalPrix, $prixProduit);
  }
  $totalPrix = array_sum($totalPrix);
  return $totalPrix
  }

  public function getName(){
    return 'SommePrix_extension'
  }
}
