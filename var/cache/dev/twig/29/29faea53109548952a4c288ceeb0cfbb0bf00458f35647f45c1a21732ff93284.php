<?php

/* YZEcommerceBundle:Ecommerce:index.html.twig */
class __TwigTemplate_3bf56089f762a1218bbf68737c55fb32f8fd7a7f1de89754371211534b2aad3d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("YZEcommerceBundle::layout.html.twig", "YZEcommerceBundle:Ecommerce:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "YZEcommerceBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "<!-- Banner -->

<div class=\"banner\">
  <div class=\"banner_background\" style=\"background-image:url(";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner_background.jpg"), "html", null, true);
        echo " )\"></div>
  <div class=\"container fill_height\">
    <div class=\"row fill_height\">
      <div class=\"banner_product_image\">
          ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 14, $this->source); })()), "environment", array()) == "dev")) {
            // line 15
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/devShop/web/images/banner_product.png"), "html", null, true);
            echo "\" alt=\"\">
          ";
        } else {
            // line 17
            echo "          <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner_product.png"), "html", null, true);
            echo "\" alt=\"\">
          ";
        }
        // line 19
        echo "



      </div>
      <div class=\"col-lg-5 offset-lg-4 fill_height\">
        <div class=\"banner_content\">
          <div class=\"banner_price\"><span>938€</span>838€</div>
          <div class=\"banner_product_name\">Apple Iphone 8</div>
          <div class=\"button banner_button\"><a href=\"#\">Achetez maintenant</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Characteristics -->

<div class=\"characteristics\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Char. Item -->
      <div class=\"col-lg-3 col-md-6 char_col\">

        <div class=\"char_item d-flex flex-row align-items-center justify-content-start\">
          <div class=\"char_icon\"><img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/char_1.png"), "html", null, true);
        echo "\" alt=\"\"></div>
          <div class=\"char_content\">
            <div class=\"char_title\">Free Delivery</div>
            <div class=\"char_subtitle\">from \$50</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class=\"col-lg-3 col-md-6 char_col\">

        <div class=\"char_item d-flex flex-row align-items-center justify-content-start\">
          <div class=\"char_icon\"><img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/char_2.png"), "html", null, true);
        echo "\" alt=\"\"></div>
          <div class=\"char_content\">
            <div class=\"char_title\">Free Delivery</div>
            <div class=\"char_subtitle\">from \$50</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class=\"col-lg-3 col-md-6 char_col\">

        <div class=\"char_item d-flex flex-row align-items-center justify-content-start\">
          <div class=\"char_icon\"><img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/char_3.png"), "html", null, true);
        echo "\" alt=\"\"></div>
          <div class=\"char_content\">
            <div class=\"char_title\">Free Delivery</div>
            <div class=\"char_subtitle\">from \$50</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class=\"col-lg-3 col-md-6 char_col\">

        <div class=\"char_item d-flex flex-row align-items-center justify-content-start\">
          <div class=\"char_icon\"><img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/char_4.png"), "html", null, true);
        echo "\" alt=\"\"></div>
          <div class=\"char_content\">
            <div class=\"char_title\">Free Delivery</div>
            <div class=\"char_subtitle\">from \$50</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Popular Categories -->

<div class=\"popular_categories\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <div class=\"popular_categories_content\">
          <div class=\"popular_categories_title\">Categories populaires</div>
          <div class=\"popular_categories_slider_nav\">
            <div class=\"popular_categories_prev popular_categories_nav\"><i class=\"fas fa-angle-left ml-auto\"></i></div>
            <div class=\"popular_categories_next popular_categories_nav\"><i class=\"fas fa-angle-right ml-auto\"></i></div>
          </div>
          <div class=\"popular_categories_link\"><a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_shoppage");
        echo "\">Catalogue complet</a></div>
        </div>
      </div>

      <!-- Popular Categories Slider -->

      <div class=\"col-lg-9\">
        <div class=\"popular_categories_slider_container\">
          <div class=\"owl-carousel owl-theme popular_categories_slider\">

            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_categorypage", array("slug" => "telephonie"));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/popular_1.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Telephonie</div>
              </div>
            </div>


            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_categorypage", array("slug" => "ordinateur-bureau"));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/popular_2.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Ordinateur bureau</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_categorypage", array("slug" => "accessoires"));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/popular_3.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Accessoires</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_categorypage", array("slug" => "console-jeux-videos"));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/popular_4.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Jeux vidéos & consoles</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"";
        // line 151
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_categorypage", array("slug" => "casque-sono"));
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/popular_5.png"), "html", null, true);
        echo "\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Casques</div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Banner -->

<div class=\"banner_2\">
  <div class=\"banner_2_background\" style=\"background-image:url(images/banner_2_background.jpg)\"></div>
  <div class=\"banner_2_container\">
    <div class=\"banner_2_dots\"></div>
    <!-- Banner 2 Slider -->

    <div class=\"owl-carousel owl-theme banner_2_slider\">


      <!-- Banner 2 Slider Item -->
      <div class=\"owl-item\">
        <div class=\"banner_2_item\">
          <div class=\"container fill_height\">
            <div class=\"row fill_height\">
              <div class=\"col-lg-4 col-md-6 fill_height\">
                <div class=\"banner_2_content\">
                  <div class=\"banner_2_category\">Laptops</div>
                  <div class=\"banner_2_title\">Casque Beats By Dre</div>
                  <div class=\"banner_2_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                  <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
                  <div class=\"button banner_2_button\"><a href=\"";
        // line 185
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_productpage", array("slug" => "casque-beats-by-dre"));
        echo "\">Découvrir</a></div>
                </div>

              </div>
              <div class=\"col-lg-8 col-md-6 fill_height\">
                <div class=\"banner_2_image_container\">
                  <div class=\"banner_2_image\"><img src=\"https://blogue.bestbuy.ca/wp-content/uploads/sites/3/2017/09/Beats-Studio-3.jpg\" alt=\"\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Banner 2 Slider Item -->
      <div class=\"owl-item\">
        <div class=\"banner_2_item\">
          <div class=\"container fill_height\">
            <div class=\"row fill_height\">
              <div class=\"col-lg-4 col-md-6 fill_height\">
                <div class=\"banner_2_content\">
                  <div class=\"banner_2_category\">Ordinateur portable</div>
                  <div class=\"banner_2_title\">Mac Book Air Pro</div>
                  <div class=\"banner_2_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
                  <div class=\"button banner_2_button\"><a href=\"";
        // line 211
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_productpage", array("slug" => "apple-mac-book-pro-1"));
        echo "\">Découvrir</a></div>
                </div>

              </div>
              <div class=\"col-lg-8 col-md-6 fill_height\">
                <div class=\"banner_2_image_container\">
                  <div class=\"banner_2_image\"><img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/banner_2_product.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Banner 2 Slider Item -->
      <div class=\"owl-item\">
        <div class=\"banner_2_item\">
          <div class=\"container fill_height\">
            <div class=\"row fill_height\">
              <div class=\"col-lg-4 col-md-6 fill_height\">
                <div class=\"banner_2_content\">
                  <div class=\"banner_2_category\">Console & jeux vidéos</div>
                  <div class=\"banner_2_title\">Playstation 4 Pro</div>
                  <div class=\"banner_2_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
                  <div class=\"button banner_2_button\"><a href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_productpage", array("slug" => "playstation-4-pro"));
        echo "\">Découvrir</a></div>
                </div>

              </div>
              <div class=\"col-lg-8 col-md-6 fill_height\">
                <div class=\"banner_2_image_container\">
                  <div class=\"banner_2_image\"><img src=\"https://cdn.wccftech.com/wp-content/uploads/2016/10/ps4pro_art_large.jpg\" alt=\"\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Best Sellers -->

<div class=\"best_sellers\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"tabbed_container\">
          <div class=\"tabs clearfix tabs-right\">
            <div class=\"new_arrivals_title\">Meilleurs ventes</div>
            <ul class=\"clearfix\">
              <li class=\"active\">Top 20</li>
              <li>Audio & Video</li>
              <li>Laptops & Computers</li>
            </ul>
            <div class=\"tabs_line\"><span></span></div>
          </div>

          <div class=\"bestsellers_panel panel active\">

            <!-- Best Sellers Slider -->

            <div class=\"bestsellers_slider slider\">

              <!-- Best Sellers Item -->
              ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 277, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 278
            echo "              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\">
                      ";
            // line 281
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 281, $this->source); })()), "environment", array()) == "dev")) {
                // line 282
                echo "                      <img src=\"/devShop/web";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["product"], "imageFile"), "html", null, true);
                echo "\" alt=\"\">
                      ";
            } else {
                // line 284
                echo "                      <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset($context["product"], "imageFile"), "html", null, true);
                echo "\" alt=\"\">
                      ";
            }
            // line 286
            echo "                  </div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"";
            // line 288
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_categorypage", array("slug" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "category", array()), "name", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"bestsellers_name\"><a href=\"";
            // line 289
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_productpage", array("slug" => twig_get_attribute($this->env, $this->source, $context["product"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "titre", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
                    <div class=\"bestsellers_price discount\">";
            // line 291
            if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "promo", array()))) {
                // line 292
                echo "                    ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prixTtc", array()), "html", null, true);
                echo " €
                  ";
            } else {
                // line 294
                echo "                      ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "promoTtc", array()), "html", null, true);
                echo " €<span>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "prixTtc", array()), "html", null, true);
                echo " €</span>
                  ";
            }
            // line 296
            echo "                    </div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fa fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  ";
            // line 301
            if ((null === twig_get_attribute($this->env, $this->source, $context["product"], "promo", array()))) {
                // line 302
                echo "                  <li class=\"bestsellers_mark bestsellers_discount\" style=\"background: #42b6f4;\">new</li>
                  ";
            } else {
                // line 304
                echo "                  <li class=\"bestsellers_mark bestsellers_discount\">-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["product"], "promoAvg", array()), "html", null, true);
                echo "%</li>
                  ";
            }
            // line 306
            echo "                </ul>
              </div>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        echo "            </div>
          </div>

          <div class=\"bestsellers_panel panel\">

            <!-- Best Sellers Slider -->

            <div class=\"bestsellers_slider slider\">

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_1.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_2.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_3.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_4.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_5.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_6.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_1.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_2.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_3.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_4.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_5.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_6.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

            </div>
          </div>

          <div class=\"bestsellers_panel panel\">

            <!-- Best Sellers Slider -->

            <div class=\"bestsellers_slider slider\">

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_1.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_2.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_3.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_4.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_5.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_6.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_1.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_2.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_3.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_4.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_5.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_6.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Adverts -->

<div class=\"adverts\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-lg-4 advert_col\">

        <!-- Advert Item -->

        <div class=\"advert d-flex flex-row align-items-center justify-content-start\">
          <div class=\"advert_content\">
            <div class=\"advert_title\"><a href=\"#\">Trends 2018</a></div>
            <div class=\"advert_text\">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
          </div>
          <div class=\"ml-auto\"><div class=\"advert_image\"><img src=\"images/adv_1.png\" alt=\"\"></div></div>
        </div>
      </div>

      <div class=\"col-lg-4 advert_col\">

        <!-- Advert Item -->

        <div class=\"advert d-flex flex-row align-items-center justify-content-start\">
          <div class=\"advert_content\">
            <div class=\"advert_subtitle\">Trends 2018</div>
            <div class=\"advert_title_2\"><a href=\"#\">Sale -45%</a></div>
            <div class=\"advert_text\">Lorem ipsum dolor sit amet, consectetur.</div>
          </div>
          <div class=\"ml-auto\"><div class=\"advert_image\"><img src=\"images/adv_2.png\" alt=\"\"></div></div>
        </div>
      </div>

      <div class=\"col-lg-4 advert_col\">

        <!-- Advert Item -->

        <div class=\"advert d-flex flex-row align-items-center justify-content-start\">
          <div class=\"advert_content\">
            <div class=\"advert_title\"><a href=\"#\">Trends 2018</a></div>
            <div class=\"advert_text\">Lorem ipsum dolor sit amet, consectetur.</div>
          </div>
          <div class=\"ml-auto\"><div class=\"advert_image\"><img src=\"images/adv_3.png\" alt=\"\"></div></div>
        </div>
      </div>

    </div>
  </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "YZEcommerceBundle:Ecommerce:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  497 => 309,  489 => 306,  483 => 304,  479 => 302,  477 => 301,  470 => 296,  462 => 294,  456 => 292,  454 => 291,  447 => 289,  441 => 288,  437 => 286,  431 => 284,  425 => 282,  423 => 281,  418 => 278,  414 => 277,  370 => 236,  348 => 217,  339 => 211,  310 => 185,  271 => 151,  258 => 143,  245 => 135,  232 => 127,  218 => 118,  202 => 105,  175 => 81,  160 => 69,  145 => 57,  130 => 45,  102 => 19,  96 => 17,  90 => 15,  88 => 14,  81 => 10,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"YZEcommerceBundle::layout.html.twig\" %}

{% block title %}
Accueil - {{ parent() }}
{% endblock %}
{% block body %}
<!-- Banner -->

<div class=\"banner\">
  <div class=\"banner_background\" style=\"background-image:url({{ asset('images/banner_background.jpg')}} )\"></div>
  <div class=\"container fill_height\">
    <div class=\"row fill_height\">
      <div class=\"banner_product_image\">
          {% if app.environment == 'dev' %}
          <img src=\"{{ asset('/devShop/web/images/banner_product.png')}}\" alt=\"\">
          {% else %}
          <img src=\"{{ asset('images/banner_product.png')}}\" alt=\"\">
          {% endif %}




      </div>
      <div class=\"col-lg-5 offset-lg-4 fill_height\">
        <div class=\"banner_content\">
          <div class=\"banner_price\"><span>938€</span>838€</div>
          <div class=\"banner_product_name\">Apple Iphone 8</div>
          <div class=\"button banner_button\"><a href=\"#\">Achetez maintenant</a></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Characteristics -->

<div class=\"characteristics\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Char. Item -->
      <div class=\"col-lg-3 col-md-6 char_col\">

        <div class=\"char_item d-flex flex-row align-items-center justify-content-start\">
          <div class=\"char_icon\"><img src=\"{{ asset('images/char_1.png')}}\" alt=\"\"></div>
          <div class=\"char_content\">
            <div class=\"char_title\">Free Delivery</div>
            <div class=\"char_subtitle\">from \$50</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class=\"col-lg-3 col-md-6 char_col\">

        <div class=\"char_item d-flex flex-row align-items-center justify-content-start\">
          <div class=\"char_icon\"><img src=\"{{ asset('images/char_2.png')}}\" alt=\"\"></div>
          <div class=\"char_content\">
            <div class=\"char_title\">Free Delivery</div>
            <div class=\"char_subtitle\">from \$50</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class=\"col-lg-3 col-md-6 char_col\">

        <div class=\"char_item d-flex flex-row align-items-center justify-content-start\">
          <div class=\"char_icon\"><img src=\"{{ asset('images/char_3.png')}}\" alt=\"\"></div>
          <div class=\"char_content\">
            <div class=\"char_title\">Free Delivery</div>
            <div class=\"char_subtitle\">from \$50</div>
          </div>
        </div>
      </div>

      <!-- Char. Item -->
      <div class=\"col-lg-3 col-md-6 char_col\">

        <div class=\"char_item d-flex flex-row align-items-center justify-content-start\">
          <div class=\"char_icon\"><img src=\"{{ asset('images/char_4.png')}}\" alt=\"\"></div>
          <div class=\"char_content\">
            <div class=\"char_title\">Free Delivery</div>
            <div class=\"char_subtitle\">from \$50</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Popular Categories -->

<div class=\"popular_categories\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-3\">
        <div class=\"popular_categories_content\">
          <div class=\"popular_categories_title\">Categories populaires</div>
          <div class=\"popular_categories_slider_nav\">
            <div class=\"popular_categories_prev popular_categories_nav\"><i class=\"fas fa-angle-left ml-auto\"></i></div>
            <div class=\"popular_categories_next popular_categories_nav\"><i class=\"fas fa-angle-right ml-auto\"></i></div>
          </div>
          <div class=\"popular_categories_link\"><a href=\"{{ path('yz_ecommerce_shoppage')}}\">Catalogue complet</a></div>
        </div>
      </div>

      <!-- Popular Categories Slider -->

      <div class=\"col-lg-9\">
        <div class=\"popular_categories_slider_container\">
          <div class=\"owl-carousel owl-theme popular_categories_slider\">

            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"{{ path('yz_ecommerce_categorypage', {'slug': 'telephonie'}) }}\"><img src=\"{{asset('images/popular_1.png')}}\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Telephonie</div>
              </div>
            </div>


            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"{{ path('yz_ecommerce_categorypage', {'slug': 'ordinateur-bureau'}) }}\"><img src=\"{{asset('images/popular_2.png')}}\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Ordinateur bureau</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"{{ path('yz_ecommerce_categorypage', {'slug': 'accessoires'}) }}\"><img src=\"{{asset('images/popular_3.png')}}\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Accessoires</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"{{ path('yz_ecommerce_categorypage', {'slug': 'console-jeux-videos'}) }}\"><img src=\"{{asset('images/popular_4.png')}}\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Jeux vidéos & consoles</div>
              </div>
            </div>

            <!-- Popular Categories Item -->
            <div class=\"owl-item\">
              <div class=\"popular_category d-flex flex-column align-items-center justify-content-center\">
                <div class=\"popular_category_image\"><a href=\"{{ path('yz_ecommerce_categorypage', {'slug': 'casque-sono'}) }}\"><img src=\"{{asset('images/popular_5.png')}}\" alt=\"\"></a></div>
                <div class=\"popular_category_text\">Casques</div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Banner -->

<div class=\"banner_2\">
  <div class=\"banner_2_background\" style=\"background-image:url(images/banner_2_background.jpg)\"></div>
  <div class=\"banner_2_container\">
    <div class=\"banner_2_dots\"></div>
    <!-- Banner 2 Slider -->

    <div class=\"owl-carousel owl-theme banner_2_slider\">


      <!-- Banner 2 Slider Item -->
      <div class=\"owl-item\">
        <div class=\"banner_2_item\">
          <div class=\"container fill_height\">
            <div class=\"row fill_height\">
              <div class=\"col-lg-4 col-md-6 fill_height\">
                <div class=\"banner_2_content\">
                  <div class=\"banner_2_category\">Laptops</div>
                  <div class=\"banner_2_title\">Casque Beats By Dre</div>
                  <div class=\"banner_2_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                  <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
                  <div class=\"button banner_2_button\"><a href=\"{{ path('yz_ecommerce_productpage', {'slug': 'casque-beats-by-dre'}) }}\">Découvrir</a></div>
                </div>

              </div>
              <div class=\"col-lg-8 col-md-6 fill_height\">
                <div class=\"banner_2_image_container\">
                  <div class=\"banner_2_image\"><img src=\"https://blogue.bestbuy.ca/wp-content/uploads/sites/3/2017/09/Beats-Studio-3.jpg\" alt=\"\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Banner 2 Slider Item -->
      <div class=\"owl-item\">
        <div class=\"banner_2_item\">
          <div class=\"container fill_height\">
            <div class=\"row fill_height\">
              <div class=\"col-lg-4 col-md-6 fill_height\">
                <div class=\"banner_2_content\">
                  <div class=\"banner_2_category\">Ordinateur portable</div>
                  <div class=\"banner_2_title\">Mac Book Air Pro</div>
                  <div class=\"banner_2_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
                  <div class=\"button banner_2_button\"><a href=\"{{ path('yz_ecommerce_productpage', {'slug': 'apple-mac-book-pro-1'}) }}\">Découvrir</a></div>
                </div>

              </div>
              <div class=\"col-lg-8 col-md-6 fill_height\">
                <div class=\"banner_2_image_container\">
                  <div class=\"banner_2_image\"><img src=\"{{ asset('images/banner_2_product.png') }}\" alt=\"\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Banner 2 Slider Item -->
      <div class=\"owl-item\">
        <div class=\"banner_2_item\">
          <div class=\"container fill_height\">
            <div class=\"row fill_height\">
              <div class=\"col-lg-4 col-md-6 fill_height\">
                <div class=\"banner_2_content\">
                  <div class=\"banner_2_category\">Console & jeux vidéos</div>
                  <div class=\"banner_2_title\">Playstation 4 Pro</div>
                  <div class=\"banner_2_text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fermentum laoreet.</div>
                    <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
                  <div class=\"button banner_2_button\"><a href=\"{{ path('yz_ecommerce_productpage', {'slug': 'playstation-4-pro'}) }}\">Découvrir</a></div>
                </div>

              </div>
              <div class=\"col-lg-8 col-md-6 fill_height\">
                <div class=\"banner_2_image_container\">
                  <div class=\"banner_2_image\"><img src=\"https://cdn.wccftech.com/wp-content/uploads/2016/10/ps4pro_art_large.jpg\" alt=\"\"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- Best Sellers -->

<div class=\"best_sellers\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col\">
        <div class=\"tabbed_container\">
          <div class=\"tabs clearfix tabs-right\">
            <div class=\"new_arrivals_title\">Meilleurs ventes</div>
            <ul class=\"clearfix\">
              <li class=\"active\">Top 20</li>
              <li>Audio & Video</li>
              <li>Laptops & Computers</li>
            </ul>
            <div class=\"tabs_line\"><span></span></div>
          </div>

          <div class=\"bestsellers_panel panel active\">

            <!-- Best Sellers Slider -->

            <div class=\"bestsellers_slider slider\">

              <!-- Best Sellers Item -->
              {% for product in products %}
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\">
                      {% if app.environment == 'dev' %}
                      <img src=\"/devShop/web{{ vich_uploader_asset(product, 'imageFile') }}\" alt=\"\">
                      {% else %}
                      <img src=\"{{ vich_uploader_asset(product, 'imageFile') }}\" alt=\"\">
                      {% endif %}
                  </div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"{{ path('yz_ecommerce_categorypage', {'slug': product.category.slug}) }}\">{{product.category.name}}</a></div>
                    <div class=\"bestsellers_name\"><a href=\"{{ path('yz_ecommerce_productpage', {'slug': product.slug}) }}\">{{product.titre}}</a></div>
                    <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
                    <div class=\"bestsellers_price discount\">{% if product.promo is null %}
                    {{product.prixTtc}} €
                  {% else %}
                      {{product.promoTtc}} €<span>{{product.prixTtc}} €</span>
                  {% endif %}
                    </div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fa fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  {% if product.promo is null %}
                  <li class=\"bestsellers_mark bestsellers_discount\" style=\"background: #42b6f4;\">new</li>
                  {% else %}
                  <li class=\"bestsellers_mark bestsellers_discount\">-{{product.promoAvg}}%</li>
                  {% endif %}
                </ul>
              </div>
              {% endfor %}
            </div>
          </div>

          <div class=\"bestsellers_panel panel\">

            <!-- Best Sellers Slider -->

            <div class=\"bestsellers_slider slider\">

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_1.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_2.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_3.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_4.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_5.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_6.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_1.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_2.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_3.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_4.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_5.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_6.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

            </div>
          </div>

          <div class=\"bestsellers_panel panel\">

            <!-- Best Sellers Slider -->

            <div class=\"bestsellers_slider slider\">

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_1.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_2.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_3.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_4.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_5.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_6.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_1.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_2.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_3.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_4.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item discount\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_5.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

              <!-- Best Sellers Item -->
              <div class=\"bestsellers_item\">
                <div class=\"bestsellers_item_container d-flex flex-row align-items-center justify-content-start\">
                  <div class=\"bestsellers_image\"><img src=\"images/best_6.png\" alt=\"\"></div>
                  <div class=\"bestsellers_content\">
                    <div class=\"bestsellers_category\"><a href=\"#\">Headphones</a></div>
                    <div class=\"bestsellers_name\"><a href=\"product.html\">Xiaomi Redmi Note 4</a></div>
                    <div class=\"rating_r rating_r_4 bestsellers_rating\"><i></i><i></i><i></i><i></i><i></i></div>
                    <div class=\"bestsellers_price discount\">\$225<span>\$300</span></div>
                  </div>
                </div>
                <div class=\"bestsellers_fav active\"><i class=\"fas fa-heart\"></i></div>
                <ul class=\"bestsellers_marks\">
                  <li class=\"bestsellers_mark bestsellers_discount\">-25%</li>
                  <li class=\"bestsellers_mark bestsellers_new\">new</li>
                </ul>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<!-- Adverts -->

<div class=\"adverts\">
  <div class=\"container\">
    <div class=\"row\">

      <div class=\"col-lg-4 advert_col\">

        <!-- Advert Item -->

        <div class=\"advert d-flex flex-row align-items-center justify-content-start\">
          <div class=\"advert_content\">
            <div class=\"advert_title\"><a href=\"#\">Trends 2018</a></div>
            <div class=\"advert_text\">Lorem ipsum dolor sit amet, consectetur adipiscing Donec et.</div>
          </div>
          <div class=\"ml-auto\"><div class=\"advert_image\"><img src=\"images/adv_1.png\" alt=\"\"></div></div>
        </div>
      </div>

      <div class=\"col-lg-4 advert_col\">

        <!-- Advert Item -->

        <div class=\"advert d-flex flex-row align-items-center justify-content-start\">
          <div class=\"advert_content\">
            <div class=\"advert_subtitle\">Trends 2018</div>
            <div class=\"advert_title_2\"><a href=\"#\">Sale -45%</a></div>
            <div class=\"advert_text\">Lorem ipsum dolor sit amet, consectetur.</div>
          </div>
          <div class=\"ml-auto\"><div class=\"advert_image\"><img src=\"images/adv_2.png\" alt=\"\"></div></div>
        </div>
      </div>

      <div class=\"col-lg-4 advert_col\">

        <!-- Advert Item -->

        <div class=\"advert d-flex flex-row align-items-center justify-content-start\">
          <div class=\"advert_content\">
            <div class=\"advert_title\"><a href=\"#\">Trends 2018</a></div>
            <div class=\"advert_text\">Lorem ipsum dolor sit amet, consectetur.</div>
          </div>
          <div class=\"ml-auto\"><div class=\"advert_image\"><img src=\"images/adv_3.png\" alt=\"\"></div></div>
        </div>
      </div>

    </div>
  </div>
</div>

{% endblock %}
", "YZEcommerceBundle:Ecommerce:index.html.twig", "/var/www/html/devShop/src/YZ/EcommerceBundle/Resources/views/Ecommerce/index.html.twig");
    }
}
