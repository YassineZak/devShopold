<?php

/* YZEcommerceBundle::layout.html.twig */
class __TwigTemplate_5e80ba5388aab2e3b238d8d74b0b8d5d5bd8ed722eee3f776a07065051be30da extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle::layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>
    ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        // line 7
        echo "  </title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"OneTech shop project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "  </head>
  <body>
    <div class=\"super_container\">

      <!-- Header -->

      <header class=\"header\">

        <!-- Top Bar -->

        <div class=\"top_bar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col d-flex flex-row\">
                <div class=\"top_bar_contact_item\">
                  <div class=\"top_bar_icon\"><img src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/phone.png"), "html", null, true);
        echo "\" alt=\"\"></div>+33 781 293 711</div>
                <div class=\"top_bar_contact_item\">
                  <div class=\"top_bar_icon\"><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mail.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                  <a href=\"mailto:yassine.zakari@hotmail.fr\">yassine.zakari@hotmail.fr</a>
                </div>
                <div class=\"top_bar_content ml-auto\">
                  <div class=\"top_bar_user\">
                    <div class=\"user_icon\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/user.svg"), "html", null, true);
        echo "\" alt=\"\"></div>
                    ";
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 55
            echo "                    <div>
                      <a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 56, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                    </div>
                    ";
            // line 58
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 59
                echo "                    <div>
                      <a href=\"";
                // line 60
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("easyadmin");
                echo "\">Administration</a>
                    </div>
                    ";
            }
            // line 63
            echo "                    <div>
                      <a href=\"";
            // line 64
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
                    </div>
                      ";
        } else {
            // line 67
            echo "                      <div>
                        <a href=\"";
            // line 68
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">Inscription</a>
                      </div>
                      <div>
                        <a href=\"";
            // line 71
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connexion</a>
                      </div>
                      ";
        }
        // line 74
        echo "                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Header Main -->

        <div class=\"header_main\">
          <div class=\"container\">
            <div class=\"row\">

              <!-- Logo -->
              <div class=\"col-lg-2 col-sm-3 col-3 order-1\">
                <div class=\"logo_container\">
                  <div class=\"logo\">
                    <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_homepage");
        echo "\">DevShop</a>
                  </div>
                </div>
              </div>

              <!-- Search -->
                            ";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("YZSearchBundle:Search:SearchBar"));
        echo "

              <!-- Wishlist -->
              <div class=\"col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right\">
                <div class=\"wishlist_cart d-flex flex-row align-items-center justify-content-end\">
                  <div class=\"wishlist d-flex flex-row align-items-center justify-content-end\">
                    <div class=\"wishlist_icon\"><img src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/heart.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                    <div class=\"wishlist_content\">
                      <div class=\"wishlist_text\">
                        <a href=\"#\">Wishlist</a>
                      </div>
                      <div class=\"wishlist_count\">115</div>
                    </div>
                  </div>

                  <!-- Cart -->
                  <div class=\"cart\">
                    <div class=\"cart_container d-flex flex-row align-items-center justify-content-end\">
                      <div class=\"cart_icon\">
                        <img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/cart.png"), "html", null, true);
        echo "\" alt=\"\">
                        <div class=\"cart_count\">
                          ";
        // line 118
        if ((null === $this->extensions['YZ\EcommerceBundle\Extension\UserSommeProduitsExtension']->getMySommeProduits())) {
            echo "<span>0</span></div>";
        } else {
            // line 119
            echo "                              <span>";
            echo twig_escape_filter($this->env, $this->extensions['YZ\EcommerceBundle\Extension\UserSommeProduitsExtension']->getMySommeProduits(), "html", null, true);
            echo "</span></div>
                            ";
        }
        // line 121
        echo "                      </div>
                      <div class=\"cart_content\">
                        <div class=\"cart_text\">
                          <a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_cartpage");
        echo "\">Panier</a>
                        </div>
                        <div class=\"cart_price\">";
        // line 126
        if ((null === $this->extensions['YZ\EcommerceBundle\Extension\UserSommePrixExtension']->getMySommePrix())) {
            echo "0 €";
        } else {
            // line 127
            echo "                        ";
            echo twig_escape_filter($this->env, $this->extensions['YZ\EcommerceBundle\Extension\UserSommePrixExtension']->getMySommePrix(), "html", null, true);
            echo "  €";
        }
        echo "</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Navigation -->

        <nav class=\"main_nav\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col\">

                <div class=\"main_nav_content d-flex flex-row\">

                  <!-- Categories Menu -->

                  <div class=\"cat_menu_container\">
                    <div class=\"cat_menu_title d-flex flex-row align-items-center justify-content-start\">
                      <div class=\"cat_burger\">
                        <span></span>
                        <span></span>
                        <span></span></div>

                      <a href=\"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_shoppage");
        echo "\"><div class=\"cat_menu_text\">categories</div></a>
                    </div>
                    <ul class=\"cat_menu\">
                      ";
        // line 158
        $context["cat"] = $this->extensions['YZ\EcommerceBundle\Extension\CategoryExtension']->getCategories();
        // line 159
        echo "                      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 159, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 160
            echo "                      <li>
                        <a href=\"";
            // line 161
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_categorypage", array("slug" => twig_get_attribute($this->env, $this->source, $context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array())), "html", null, true);
            echo "<i class=\"fas fa-chevron-right\"></i>
                        </a>
                      </li>
                      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 165
        echo "                  </div>

                  <!-- Main Nav Menu -->

                  <div class=\"main_nav_menu ml-auto\">
                    <ul class=\"standard_dropdown main_nav_dropdown\">
                      <li>
                        <a href=\"";
        // line 172
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_homepage");
        echo "\">Accueil<i class=\"fas fa-chevron-down\"></i>
                        </a>
                      </li>
                      <li class=\"hassubs\">
                        <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_shoppage");
        echo "\">Boutique
                        </a>
                      </li>
                      <li class=\"hassubs\">
                        <a href=\"";
        // line 180
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_promopage");
        echo "\">Promos
                        </a>
                      </li>
                      <li class=\"hassubs\">
                        <a href=\"#\">Pages<i class=\"fas fa-chevron-down\"></i>
                        </a>
                        <ul>
                          <li>
                            <a href=\"shop.html\">Shop<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"product.html\">Product<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"blog.html\">Blog<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"blog_single.html\">Blog Post<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"regular.html\">Regular Post<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"cart.html\">Cart<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"contact.html\">Contact<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href=\"blog.html\">Blog<i class=\"fas fa-chevron-down\"></i>
                        </a>
                      </li>
                      <li>
                        <a href=\"";
        // line 222
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_contact_form");
        echo "\">Contact<i class=\"fas fa-chevron-down\"></i>
                        </a>
                      </li>
                    </ul>
                  </div>

                  <!-- Menu Trigger -->

                  <div class=\"menu_trigger_container ml-auto\">
                    <div class=\"menu_trigger d-flex flex-row align-items-center justify-content-end\">
                      <div class=\"menu_burger\">
                        <div class=\"menu_trigger_text\">menu</div>
                        <div class=\"cat_burger menu_burger_inner\">
                          <span></span>
                          <span></span>
                          <span></span></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>

        <!-- Menu -->

        <div class=\"page_menu\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col\">

                <div class=\"page_menu_content\">

                  <div class=\"page_menu_search\">
                    <form action=\"#\">
                      <input type=\"search\" required=\"required\" class=\"page_menu_search_input\" placeholder=\"Search for products...\">
                    </form>
                  </div>
                  <ul class=\"page_menu_nav\">
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Language<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">English<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Italian<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Spanish<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Japanese<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Currency<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">US Dollar<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">EUR Euro<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">GBP British Pound<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">JPY Japanese Yen<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item\">
                      <a href=\"#\">Home<i class=\"fa fa-angle-down\"></i>
                      </a>
                    </li>
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Super Deals<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">Super Deals<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li class=\"page_menu_item has-children\">
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                          <ul class=\"page_menu_selection\">
                            <li>
                              <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                              </a>
                            </li>
                            <li>
                              <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                              </a>
                            </li>
                            <li>
                              <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                              </a>
                            </li>
                            <li>
                              <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Featured Brands<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">Featured Brands<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Trending Styles<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">Trending Styles<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item\">
                      <a href=\"blog.html\">blog<i class=\"fa fa-angle-down\"></i>
                      </a>
                    </li>
                    <li class=\"page_menu_item\">
                      <a href=\"contact.html\">contact<i class=\"fa fa-angle-down\"></i>
                      </a>
                    </li>
                  </ul>

                  <div class=\"menu_contact\">
                    <div class=\"menu_contact_item\">
                      <div class=\"menu_contact_icon\"><img src=\"";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/phone_white.png"), "html", null, true);
        echo "\" alt=\"\"></div>+38 068 005 3570</div>
                    <div class=\"menu_contact_item\">
                      <div class=\"menu_contact_icon\"><img src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/mail_white.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                      <a href=\"mailto:fastsales@gmail.com\">fastsales@gmail.com</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </header>
      ";
        // line 424
        $this->displayBlock('body', $context, $blocks);
        // line 425
        echo "
      <!-- Newsletter -->

      <div class=\"newsletter\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center\">
                <div class=\"newsletter_title_container\">
                  <div class=\"newsletter_icon\"><img src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/send.png"), "html", null, true);
        echo "\" alt=\"\"></div>
                  <div class=\"newsletter_title\">Sign up for Newsletter</div>
                  <div class=\"newsletter_text\">
                    <p>...and receive %20 coupon for first shopping.</p>
                  </div>
                </div>
                <div class=\"newsletter_content clearfix\">
                  <form action=\"#\" class=\"newsletter_form\">
                    <input type=\"email\" class=\"newsletter_input\" required=\"required\" placeholder=\"Enter your email address\">
                    <button class=\"newsletter_button\">Subscribe</button>
                  </form>
                  <div class=\"newsletter_unsubscribe_link\">
                    <a href=\"#\">unsubscribe</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->


      <footer class=\"footer\">
        <div class=\"container\">
          <div class=\"row\">

            <div class=\"col-lg-3 footer_col\">
              <div class=\"footer_column footer_contact\">
                <div class=\"logo_container\">
                  <div class=\"logo\">
                    <a href=\"#\">DevShop</a>
                  </div>
                </div>
                <div class=\"footer_title\">Une question ? Appelez-nous 24/7</div>
                <div class=\"footer_phone\">+33 781293711</div>
                <div class=\"footer_contact_text\">
                  <p>17 Princess Road, London</p>
                  <p>Grester London NW18JR, UK</p>
                </div>
                <div class=\"footer_social\">
                  <ul>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-facebook-f\"></i>
                      </a>
                    </li>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-twitter\"></i>
                      </a>
                    </li>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-youtube\"></i>
                      </a>
                    </li>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-google\"></i>
                      </a>
                    </li>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-vimeo-v\"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class=\"col-lg-2 offset-lg-2\">
              <div class=\"footer_column\">
                <div class=\"footer_title\">Find it Fast</div>
                <ul class=\"footer_list\">
                  <li>
                    <a href=\"#\">Computers & Laptops</a>
                  </li>
                  <li>
                    <a href=\"#\">Cameras & Photos</a>
                  </li>
                  <li>
                    <a href=\"#\">Hardware</a>
                  </li>
                  <li>
                    <a href=\"#\">Smartphones & Tablets</a>
                  </li>
                  <li>
                    <a href=\"#\">TV & Audio</a>
                  </li>
                </ul>
                <div class=\"footer_subtitle\">Gadgets</div>
                <ul class=\"footer_list\">
                  <li>
                    <a href=\"#\">Car Electronics</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-2\">
              <div class=\"footer_column\">
                <ul class=\"footer_list footer_list_2\">
                  <li>
                    <a href=\"#\">Video Games & Consoles</a>
                  </li>
                  <li>
                    <a href=\"#\">Accessories</a>
                  </li>
                  <li>
                    <a href=\"#\">Cameras & Photos</a>
                  </li>
                  <li>
                    <a href=\"#\">Hardware</a>
                  </li>
                  <li>
                    <a href=\"#\">Computers & Laptops</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-2\">
              <div class=\"footer_column\">
                <div class=\"footer_title\">Customer Care</div>
                <ul class=\"footer_list\">
                  <li>
                    <a href=\"#\">My Account</a>
                  </li>
                  <li>
                    <a href=\"#\">Order Tracking</a>
                  </li>
                  <li>
                    <a href=\"#\">Wish List</a>
                  </li>
                  <li>
                    <a href=\"#\">Customer Services</a>
                  </li>
                  <li>
                    <a href=\"#\">Returns / Exchange</a>
                  </li>
                  <li>
                    <a href=\"#\">FAQs</a>
                  </li>
                  <li>
                    <a href=\"#\">Product Support</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </footer>

      <!-- Copyright -->

      <div class=\"copyright\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col\">

              <div class=\"copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start\">
                <div class=\"copyright_content\">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy; Yassine Zakari | Site sans aucun but commercial | Aucune commande ne sera honorée | <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved.
                </div>
                <div class=\"logos ml-sm-auto\">
                  <ul class=\"logos_list\">
                    <li>
                      <a href=\"#\"><img src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos_1.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </li>
                    <li>
                      <a href=\"#\"><img src=\"";
        // line 612
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos_2.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </li>
                    <li>
                      <a href=\"#\"><img src=\"";
        // line 615
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos_3.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </li>
                    <li>
                      <a href=\"#\"><img src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logos_4.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 628
        $this->displayBlock('javascripts', $context, $blocks);
        // line 658
        echo "
  </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "DevShop By Yassine ZAKARI";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
       integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
       <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
       <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.theme.default.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/animate.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slick-1.8.0/slick.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/main_styles.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/responsive.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/shop_styles.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/shop_responsive.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/product_styles.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/product_responsive.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/cart_styles.css"), "html", null, true);
        echo "\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("styles/cart_responsive.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 424
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 628
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 629
        echo "    <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
\t\t\t  integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
\t\t\t  crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"https://js.stripe.com/v2/\"></script>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
      <script src=\"";
        // line 639
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/greensock/TweenMax.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 640
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/greensock/TimelineMax.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 641
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/scrollmagic/ScrollMagic.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 642
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/greensock/animation.gsap.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 643
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/greensock/ScrollToPlugin.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 644
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/OwlCarousel2-2.2.1/owl.carousel.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 645
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/slick-1.8.0/slick.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/easing/easing.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 647
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 648
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/product_custom.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 649
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/Isotope/isotope.pkgd.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 650
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/jquery-ui-1.12.1.custom/jquery-ui.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 651
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("plugins/parallax-js-master/parallax.min.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/shop_custom.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 653
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/cart_custom.js"), "html", null, true);
        echo "\"></script>
      <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyByCuhVLQq92vWFp5uFbmATg-kIjprl07c&libraries=places&callback=initAutocomplete\"
        async defer></script>

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "YZEcommerceBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  979 => 653,  975 => 652,  971 => 651,  967 => 650,  963 => 649,  959 => 648,  955 => 647,  951 => 646,  947 => 645,  943 => 644,  939 => 643,  935 => 642,  931 => 641,  927 => 640,  923 => 639,  911 => 629,  902 => 628,  885 => 424,  873 => 29,  869 => 28,  865 => 27,  861 => 26,  857 => 25,  853 => 24,  849 => 23,  845 => 22,  841 => 21,  837 => 20,  833 => 19,  829 => 18,  825 => 17,  819 => 13,  810 => 12,  792 => 6,  779 => 658,  777 => 628,  764 => 618,  758 => 615,  752 => 612,  746 => 609,  568 => 434,  557 => 425,  555 => 424,  541 => 413,  536 => 411,  344 => 222,  299 => 180,  292 => 176,  285 => 172,  276 => 165,  264 => 161,  261 => 160,  256 => 159,  254 => 158,  248 => 155,  214 => 127,  210 => 126,  205 => 124,  200 => 121,  194 => 119,  190 => 118,  185 => 116,  169 => 103,  160 => 97,  151 => 91,  132 => 74,  126 => 71,  120 => 68,  117 => 67,  111 => 64,  108 => 63,  102 => 60,  99 => 59,  97 => 58,  90 => 56,  87 => 55,  85 => 54,  81 => 53,  73 => 48,  68 => 46,  51 => 31,  49 => 12,  42 => 7,  40 => 6,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<!DOCTYPE html>
<html lang=\"fr\">
  <head>
    <title>
    {% block title %}DevShop By Yassine ZAKARI{% endblock %}
  </title>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"description\" content=\"OneTech shop project\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    {% block stylesheets %}
      <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css\"
       integrity=\"sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm\" crossorigin=\"anonymous\">
       <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
       <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.0.13/css/all.css\" integrity=\"sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp\" crossorigin=\"anonymous\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/slick-1.8.0/slick.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/main_styles.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/responsive.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/shop_styles.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/shop_responsive.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/product_styles.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/product_responsive.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/cart_styles.css') }}\">
      <link rel=\"stylesheet\" type=\"text/css\" href=\"{{ asset('styles/cart_responsive.css') }}\">
    {% endblock %}
  </head>
  <body>
    <div class=\"super_container\">

      <!-- Header -->

      <header class=\"header\">

        <!-- Top Bar -->

        <div class=\"top_bar\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col d-flex flex-row\">
                <div class=\"top_bar_contact_item\">
                  <div class=\"top_bar_icon\"><img src=\"{{ asset('images/phone.png')}}\" alt=\"\"></div>+33 781 293 711</div>
                <div class=\"top_bar_contact_item\">
                  <div class=\"top_bar_icon\"><img src=\"{{ asset('images/mail.png')}}\" alt=\"\"></div>
                  <a href=\"mailto:yassine.zakari@hotmail.fr\">yassine.zakari@hotmail.fr</a>
                </div>
                <div class=\"top_bar_content ml-auto\">
                  <div class=\"top_bar_user\">
                    <div class=\"user_icon\"><img src=\"{{ asset('images/user.svg')}}\" alt=\"\"></div>
                    {% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
                    <div>
                      <a href=\"{{ path ('fos_user_profile_show')}}\">{{ app.user.username }}</a>
                    </div>
                    {% if is_granted('ROLE_SUPER_ADMIN')  %}
                    <div>
                      <a href=\"{{ path ('easyadmin')}}\">Administration</a>
                    </div>
                    {% endif %}
                    <div>
                      <a href=\"{{ path ('fos_user_security_logout')}}\">Déconnexion</a>
                    </div>
                      {% else %}
                      <div>
                        <a href=\"{{ path ('fos_user_registration_register')}}\">Inscription</a>
                      </div>
                      <div>
                        <a href=\"{{ path ('fos_user_security_login')}}\">Connexion</a>
                      </div>
                      {% endif %}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Header Main -->

        <div class=\"header_main\">
          <div class=\"container\">
            <div class=\"row\">

              <!-- Logo -->
              <div class=\"col-lg-2 col-sm-3 col-3 order-1\">
                <div class=\"logo_container\">
                  <div class=\"logo\">
                    <a href=\"{{ path ('yz_ecommerce_homepage')}}\">DevShop</a>
                  </div>
                </div>
              </div>

              <!-- Search -->
                            {{render(controller('YZSearchBundle:Search:SearchBar'))}}

              <!-- Wishlist -->
              <div class=\"col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right\">
                <div class=\"wishlist_cart d-flex flex-row align-items-center justify-content-end\">
                  <div class=\"wishlist d-flex flex-row align-items-center justify-content-end\">
                    <div class=\"wishlist_icon\"><img src=\"{{ asset('images/heart.png')}}\" alt=\"\"></div>
                    <div class=\"wishlist_content\">
                      <div class=\"wishlist_text\">
                        <a href=\"#\">Wishlist</a>
                      </div>
                      <div class=\"wishlist_count\">115</div>
                    </div>
                  </div>

                  <!-- Cart -->
                  <div class=\"cart\">
                    <div class=\"cart_container d-flex flex-row align-items-center justify-content-end\">
                      <div class=\"cart_icon\">
                        <img src=\"{{ asset('images/cart.png')}}\" alt=\"\">
                        <div class=\"cart_count\">
                          {% if get_somme_produit() is null %}<span>0</span></div>{% else %}
                              <span>{{get_somme_produit()}}</span></div>
                            {% endif %}
                      </div>
                      <div class=\"cart_content\">
                        <div class=\"cart_text\">
                          <a href=\"{{path('yz_ecommerce_cartpage')}}\">Panier</a>
                        </div>
                        <div class=\"cart_price\">{% if get_somme_prix() is null %}0 €{% else %}
                        {{get_somme_prix()}}  €{% endif %}</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Navigation -->

        <nav class=\"main_nav\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col\">

                <div class=\"main_nav_content d-flex flex-row\">

                  <!-- Categories Menu -->

                  <div class=\"cat_menu_container\">
                    <div class=\"cat_menu_title d-flex flex-row align-items-center justify-content-start\">
                      <div class=\"cat_burger\">
                        <span></span>
                        <span></span>
                        <span></span></div>

                      <a href=\"{{ path('yz_ecommerce_shoppage')}}\"><div class=\"cat_menu_text\">categories</div></a>
                    </div>
                    <ul class=\"cat_menu\">
                      {% set cat = get_categories() %}
                      {% for category in cat %}
                      <li>
                        <a href=\"{{ path('yz_ecommerce_categorypage', {'slug': category.slug}) }}\">{{category.name|capitalize}}<i class=\"fas fa-chevron-right\"></i>
                        </a>
                      </li>
                      {% endfor %}
                  </div>

                  <!-- Main Nav Menu -->

                  <div class=\"main_nav_menu ml-auto\">
                    <ul class=\"standard_dropdown main_nav_dropdown\">
                      <li>
                        <a href=\"{{ path('yz_ecommerce_homepage') }}\">Accueil<i class=\"fas fa-chevron-down\"></i>
                        </a>
                      </li>
                      <li class=\"hassubs\">
                        <a href=\"{{ path('yz_ecommerce_shoppage') }}\">Boutique
                        </a>
                      </li>
                      <li class=\"hassubs\">
                        <a href=\"{{ path('yz_ecommerce_promopage') }}\">Promos
                        </a>
                      </li>
                      <li class=\"hassubs\">
                        <a href=\"#\">Pages<i class=\"fas fa-chevron-down\"></i>
                        </a>
                        <ul>
                          <li>
                            <a href=\"shop.html\">Shop<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"product.html\">Product<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"blog.html\">Blog<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"blog_single.html\">Blog Post<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"regular.html\">Regular Post<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"cart.html\">Cart<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                          <li>
                            <a href=\"contact.html\">Contact<i class=\"fas fa-chevron-down\"></i>
                            </a>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <a href=\"blog.html\">Blog<i class=\"fas fa-chevron-down\"></i>
                        </a>
                      </li>
                      <li>
                        <a href=\"{{ path('yz_contact_form') }}\">Contact<i class=\"fas fa-chevron-down\"></i>
                        </a>
                      </li>
                    </ul>
                  </div>

                  <!-- Menu Trigger -->

                  <div class=\"menu_trigger_container ml-auto\">
                    <div class=\"menu_trigger d-flex flex-row align-items-center justify-content-end\">
                      <div class=\"menu_burger\">
                        <div class=\"menu_trigger_text\">menu</div>
                        <div class=\"cat_burger menu_burger_inner\">
                          <span></span>
                          <span></span>
                          <span></span></div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </nav>

        <!-- Menu -->

        <div class=\"page_menu\">
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col\">

                <div class=\"page_menu_content\">

                  <div class=\"page_menu_search\">
                    <form action=\"#\">
                      <input type=\"search\" required=\"required\" class=\"page_menu_search_input\" placeholder=\"Search for products...\">
                    </form>
                  </div>
                  <ul class=\"page_menu_nav\">
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Language<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">English<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Italian<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Spanish<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Japanese<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Currency<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">US Dollar<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">EUR Euro<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">GBP British Pound<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">JPY Japanese Yen<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item\">
                      <a href=\"#\">Home<i class=\"fa fa-angle-down\"></i>
                      </a>
                    </li>
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Super Deals<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">Super Deals<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li class=\"page_menu_item has-children\">
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                          <ul class=\"page_menu_selection\">
                            <li>
                              <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                              </a>
                            </li>
                            <li>
                              <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                              </a>
                            </li>
                            <li>
                              <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                              </a>
                            </li>
                            <li>
                              <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Featured Brands<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">Featured Brands<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item has-children\">
                      <a href=\"#\">Trending Styles<i class=\"fa fa-angle-down\"></i>
                      </a>
                      <ul class=\"page_menu_selection\">
                        <li>
                          <a href=\"#\">Trending Styles<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                        <li>
                          <a href=\"#\">Menu Item<i class=\"fa fa-angle-down\"></i>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li class=\"page_menu_item\">
                      <a href=\"blog.html\">blog<i class=\"fa fa-angle-down\"></i>
                      </a>
                    </li>
                    <li class=\"page_menu_item\">
                      <a href=\"contact.html\">contact<i class=\"fa fa-angle-down\"></i>
                      </a>
                    </li>
                  </ul>

                  <div class=\"menu_contact\">
                    <div class=\"menu_contact_item\">
                      <div class=\"menu_contact_icon\"><img src=\"{{ asset('images/phone_white.png')}}\" alt=\"\"></div>+38 068 005 3570</div>
                    <div class=\"menu_contact_item\">
                      <div class=\"menu_contact_icon\"><img src=\"{{ asset('images/mail_white.png')}}\" alt=\"\"></div>
                      <a href=\"mailto:fastsales@gmail.com\">fastsales@gmail.com</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </header>
      {% block body %}{% endblock %}

      <!-- Newsletter -->

      <div class=\"newsletter\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center\">
                <div class=\"newsletter_title_container\">
                  <div class=\"newsletter_icon\"><img src=\"{{ asset('images/send.png')}}\" alt=\"\"></div>
                  <div class=\"newsletter_title\">Sign up for Newsletter</div>
                  <div class=\"newsletter_text\">
                    <p>...and receive %20 coupon for first shopping.</p>
                  </div>
                </div>
                <div class=\"newsletter_content clearfix\">
                  <form action=\"#\" class=\"newsletter_form\">
                    <input type=\"email\" class=\"newsletter_input\" required=\"required\" placeholder=\"Enter your email address\">
                    <button class=\"newsletter_button\">Subscribe</button>
                  </form>
                  <div class=\"newsletter_unsubscribe_link\">
                    <a href=\"#\">unsubscribe</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->


      <footer class=\"footer\">
        <div class=\"container\">
          <div class=\"row\">

            <div class=\"col-lg-3 footer_col\">
              <div class=\"footer_column footer_contact\">
                <div class=\"logo_container\">
                  <div class=\"logo\">
                    <a href=\"#\">DevShop</a>
                  </div>
                </div>
                <div class=\"footer_title\">Une question ? Appelez-nous 24/7</div>
                <div class=\"footer_phone\">+33 781293711</div>
                <div class=\"footer_contact_text\">
                  <p>17 Princess Road, London</p>
                  <p>Grester London NW18JR, UK</p>
                </div>
                <div class=\"footer_social\">
                  <ul>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-facebook-f\"></i>
                      </a>
                    </li>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-twitter\"></i>
                      </a>
                    </li>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-youtube\"></i>
                      </a>
                    </li>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-google\"></i>
                      </a>
                    </li>
                    <li>
                      <a href=\"#\">
                        <i class=\"fab fa-vimeo-v\"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>

            <div class=\"col-lg-2 offset-lg-2\">
              <div class=\"footer_column\">
                <div class=\"footer_title\">Find it Fast</div>
                <ul class=\"footer_list\">
                  <li>
                    <a href=\"#\">Computers & Laptops</a>
                  </li>
                  <li>
                    <a href=\"#\">Cameras & Photos</a>
                  </li>
                  <li>
                    <a href=\"#\">Hardware</a>
                  </li>
                  <li>
                    <a href=\"#\">Smartphones & Tablets</a>
                  </li>
                  <li>
                    <a href=\"#\">TV & Audio</a>
                  </li>
                </ul>
                <div class=\"footer_subtitle\">Gadgets</div>
                <ul class=\"footer_list\">
                  <li>
                    <a href=\"#\">Car Electronics</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-2\">
              <div class=\"footer_column\">
                <ul class=\"footer_list footer_list_2\">
                  <li>
                    <a href=\"#\">Video Games & Consoles</a>
                  </li>
                  <li>
                    <a href=\"#\">Accessories</a>
                  </li>
                  <li>
                    <a href=\"#\">Cameras & Photos</a>
                  </li>
                  <li>
                    <a href=\"#\">Hardware</a>
                  </li>
                  <li>
                    <a href=\"#\">Computers & Laptops</a>
                  </li>
                </ul>
              </div>
            </div>

            <div class=\"col-lg-2\">
              <div class=\"footer_column\">
                <div class=\"footer_title\">Customer Care</div>
                <ul class=\"footer_list\">
                  <li>
                    <a href=\"#\">My Account</a>
                  </li>
                  <li>
                    <a href=\"#\">Order Tracking</a>
                  </li>
                  <li>
                    <a href=\"#\">Wish List</a>
                  </li>
                  <li>
                    <a href=\"#\">Customer Services</a>
                  </li>
                  <li>
                    <a href=\"#\">Returns / Exchange</a>
                  </li>
                  <li>
                    <a href=\"#\">FAQs</a>
                  </li>
                  <li>
                    <a href=\"#\">Product Support</a>
                  </li>
                </ul>
              </div>
            </div>

          </div>
        </div>
      </footer>

      <!-- Copyright -->

      <div class=\"copyright\">
        <div class=\"container\">
          <div class=\"row\">
            <div class=\"col\">

              <div class=\"copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start\">
                <div class=\"copyright_content\">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy; Yassine Zakari | Site sans aucun but commercial | Aucune commande ne sera honorée | <script>
                    document.write(new Date().getFullYear());
                  </script>
                  All rights reserved.
                </div>
                <div class=\"logos ml-sm-auto\">
                  <ul class=\"logos_list\">
                    <li>
                      <a href=\"#\"><img src=\"{{ asset('images/logos_1.png')}}\" alt=\"\"></a>
                    </li>
                    <li>
                      <a href=\"#\"><img src=\"{{ asset('images/logos_2.png')}}\" alt=\"\"></a>
                    </li>
                    <li>
                      <a href=\"#\"><img src=\"{{ asset('images/logos_3.png')}}\" alt=\"\"></a>
                    </li>
                    <li>
                      <a href=\"#\"><img src=\"{{ asset('images/logos_4.png')}}\" alt=\"\"></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    {% block javascripts %}
    <script
\t\t\t  src=\"https://code.jquery.com/jquery-3.3.1.min.js\"
\t\t\t  integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
\t\t\t  crossorigin=\"anonymous\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js\" integrity=\"sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl\" crossorigin=\"anonymous\"></script>
    <script src=\"https://js.stripe.com/v2/\"></script>
    <script src=\"https://js.stripe.com/v3/\"></script>
    <script src=\"https://code.jquery.com/ui/1.12.1/jquery-ui.js\"></script>
      <script src=\"{{ asset('plugins/greensock/TweenMax.min.js')}}\"></script>
      <script src=\"{{ asset('plugins/greensock/TimelineMax.min.js')}}\"></script>
      <script src=\"{{ asset('plugins/scrollmagic/ScrollMagic.min.js')}}\"></script>
      <script src=\"{{ asset('plugins/greensock/animation.gsap.min.js')}}\"></script>
      <script src=\"{{ asset('plugins/greensock/ScrollToPlugin.min.js')}}\"></script>
      <script src=\"{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}\"></script>
      <script src=\"{{ asset('plugins/slick-1.8.0/slick.js')}}\"></script>
      <script src=\"{{ asset('plugins/easing/easing.js')}}\"></script>
      <script src=\"{{ asset('js/custom.js')}}\"></script>
      <script src=\"{{ asset('js/product_custom.js')}}\"></script>
      <script src=\"{{ asset('plugins/Isotope/isotope.pkgd.min.js')}}\"></script>
      <script src=\"{{ asset('plugins/jquery-ui-1.12.1.custom/jquery-ui.js')}}\"></script>
      <script src=\"{{ asset('plugins/parallax-js-master/parallax.min.js')}}\"></script>
      <script src=\"{{ asset('js/shop_custom.js')}}\"></script>
      <script src=\"{{ asset('js/cart_custom.js')}}\"></script>
      <script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyByCuhVLQq92vWFp5uFbmATg-kIjprl07c&libraries=places&callback=initAutocomplete\"
        async defer></script>

    {% endblock %}

  </body>
</html>
", "YZEcommerceBundle::layout.html.twig", "/var/www/html/devShop/src/YZ/EcommerceBundle/Resources/views/layout.html.twig");
    }
}
