<?php

/* YZEcommerceBundle:Ecommerce:product.html.twig */
class __TwigTemplate_136e6275c54dcea2f625fc48a669ea8ba4f5682f95cdad33e0b64aa0ef345b7e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("YZEcommerceBundle::layout.html.twig", "YZEcommerceBundle:Ecommerce:product.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:product.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:product.html.twig"));

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
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 4, $this->source); })()), "titre", array())), "html", null, true);
        echo " - ";
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
        echo "
<!-- Single Product -->

<div class=\"single_product\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Images -->
      <div class=\"col-lg-2 order-lg-1 order-2\">
        <ul class=\"image_list\">
            ";
        // line 17
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "environment", array()) == "dev")) {
            // line 18
            echo "        ";
            $context["image1"] = ("/devShop/web" . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 18, $this->source); })()), "imageFile"));
            // line 19
            echo "        ";
            $context["image2"] = ("/devShop/web" . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 19, $this->source); })()), "imageFile2"));
            // line 20
            echo "        ";
            $context["image3"] = ("/devShop/web" . $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 20, $this->source); })()), "imageFile3"));
            // line 21
            echo "            ";
        } else {
            // line 22
            echo "        ";
            $context["image1"] = $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 22, $this->source); })()), "imageFile");
            // line 23
            echo "        ";
            $context["image2"] = $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 23, $this->source); })()), "imageFile2");
            // line 24
            echo "        ";
            $context["image3"] = $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 24, $this->source); })()), "imageFile3");
            // line 25
            echo "            ";
        }
        // line 26
        echo "          <li data-image=\"";
        echo twig_escape_filter($this->env, (isset($context["image1"]) || array_key_exists("image1", $context) ? $context["image1"] : (function () { throw new Twig_Error_Runtime('Variable "image1" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\">
          ";
        // line 27
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 27, $this->source); })()), "environment", array()) == "dev")) {
            // line 28
            echo "            <img src=\"/devShop/web";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 28, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" />
          ";
        } else {
            // line 30
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 30, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" />
          ";
        }
        // line 32
        echo "          </li>
          ";
        // line 33
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 33, $this->source); })()), "imageProduit2", array()) != null)) {
            // line 34
            echo "          <li data-image=\"";
            echo twig_escape_filter($this->env, (isset($context["image2"]) || array_key_exists("image2", $context) ? $context["image2"] : (function () { throw new Twig_Error_Runtime('Variable "image2" does not exist.', 34, $this->source); })()), "html", null, true);
            echo "\">
          ";
            // line 35
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 35, $this->source); })()), "environment", array()) == "dev")) {
                // line 36
                echo "            <img src=\"/devShop/web";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 36, $this->source); })()), "imageFile2"), "html", null, true);
                echo "\" />
          ";
            } else {
                // line 38
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 38, $this->source); })()), "imageFile2"), "html", null, true);
                echo "\" />
          ";
            }
            // line 40
            echo "          </li>
          ";
        }
        // line 42
        echo "          ";
        if ((twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 42, $this->source); })()), "imageProduit3", array()) != null)) {
            // line 43
            echo "          <li data-image=\"";
            echo twig_escape_filter($this->env, (isset($context["image3"]) || array_key_exists("image3", $context) ? $context["image3"] : (function () { throw new Twig_Error_Runtime('Variable "image3" does not exist.', 43, $this->source); })()), "html", null, true);
            echo "\">
          ";
            // line 44
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 44, $this->source); })()), "environment", array()) == "dev")) {
                // line 45
                echo "            <img src=\"/devShop/web";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 45, $this->source); })()), "imageFile3"), "html", null, true);
                echo "\" />
          ";
            } else {
                // line 47
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 47, $this->source); })()), "imageFile3"), "html", null, true);
                echo "\" />
          ";
            }
            // line 49
            echo "          </li>
          ";
        }
        // line 51
        echo "        </ul>
      </div>

      <!-- Selected Image -->
      <div class=\"col-lg-5 order-lg-2 order-1\">
        <div class=\"image_selected\">
        ";
        // line 57
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 57, $this->source); })()), "environment", array()) == "dev")) {
            // line 58
            echo "            <img src=\"/devShop/web";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 58, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" />
        ";
        } else {
            // line 60
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Vich\UploaderBundle\Twig\Extension\UploaderExtension']->asset((isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 60, $this->source); })()), "imageFile"), "html", null, true);
            echo "\" />
        ";
        }
        // line 62
        echo "        </div>
      </div>

      <!-- Description -->
      <div class=\"col-lg-5 order-3\">
        <div class=\"product_description\">
          <div class=\"product_category\">";
        // line 68
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 68, $this->source); })()), "category", array()), "name", array()), "html", null, true);
        echo "</div>
          <div class=\"product_name\">";
        // line 69
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 69, $this->source); })()), "titre", array())), "html", null, true);
        echo "</div>
            <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
          <div class=\"product_text\"><p>";
        // line 71
        echo twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 71, $this->source); })()), "description", array());
        echo "</p></div>
          <div class=\"order_info d-flex flex-row\">
            <form action=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_addcart", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 73, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method=\"get\">

              <div class=\"clearfix\" style=\"z-index: 1000;\">

                <!-- Product Quantity -->
                <div class=\"product_quantity clearfix\">
                  <span>Quantity: </span>
                  <input id=\"quantity_input\" type=\"text\" name=\"qte\" pattern=\"[1-9]*\" value=\"1\">
                  <div class=\"quantity_buttons\">
                    <div id=\"quantity_inc_button\" class=\"quantity_inc quantity_control\"><i class=\"fas fa-chevron-up\"></i></div>
                    <div id=\"quantity_dec_button\" class=\"quantity_dec quantity_control\"><i class=\"fas fa-chevron-down\"></i></div>
                  </div>
                </div>
              </div>

              <div class=\"product_price\">
                ";
        // line 89
        if ((null === twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 89, $this->source); })()), "promo", array()))) {
            // line 90
            echo "                ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 90, $this->source); })()), "prixTtc", array()), "html", null, true);
            echo " €
              ";
        } else {
            // line 92
            echo "                  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 92, $this->source); })()), "promoTtc", array()), "html", null, true);
            echo " €<span class=\"promo\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new Twig_Error_Runtime('Variable "product" does not exist.', 92, $this->source); })()), "prixTtc", array()), "html", null, true);
            echo " €</span>
              ";
        }
        // line 94
        echo "            </div>
              <div class=\"button_container\">
                <button type=\"submit\" class=\"button cart_button\" >Ajouter au panier</button>
              </div>

            </form>
          </div>
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
        return "YZEcommerceBundle:Ecommerce:product.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 94,  259 => 92,  253 => 90,  251 => 89,  232 => 73,  227 => 71,  222 => 69,  218 => 68,  210 => 62,  204 => 60,  198 => 58,  196 => 57,  188 => 51,  184 => 49,  178 => 47,  172 => 45,  170 => 44,  165 => 43,  162 => 42,  158 => 40,  152 => 38,  146 => 36,  144 => 35,  139 => 34,  137 => 33,  134 => 32,  128 => 30,  122 => 28,  120 => 27,  115 => 26,  112 => 25,  109 => 24,  106 => 23,  103 => 22,  100 => 21,  97 => 20,  94 => 19,  91 => 18,  89 => 17,  77 => 7,  68 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"YZEcommerceBundle::layout.html.twig\" %}

{% block title %}
{{product.titre|capitalize}} - {{ parent() }}
{% endblock %}
{% block body %}

<!-- Single Product -->

<div class=\"single_product\">
  <div class=\"container\">
    <div class=\"row\">

      <!-- Images -->
      <div class=\"col-lg-2 order-lg-1 order-2\">
        <ul class=\"image_list\">
            {% if app.environment == 'dev' %}
        {% set image1 = \"/devShop/web\" ~ vich_uploader_asset(product, 'imageFile') %}
        {% set image2 = \"/devShop/web\" ~ vich_uploader_asset(product, 'imageFile2') %}
        {% set image3 = \"/devShop/web\" ~ vich_uploader_asset(product, 'imageFile3') %}
            {% else %}
        {% set image1 = vich_uploader_asset(product, 'imageFile') %}
        {% set image2 = vich_uploader_asset(product, 'imageFile2') %}
        {% set image3 = vich_uploader_asset(product, 'imageFile3') %}
            {% endif %}
          <li data-image=\"{{image1}}\">
          {% if app.environment == 'dev' %}
            <img src=\"/devShop/web{{ vich_uploader_asset(product, 'imageFile') }}\" />
          {% else %}
            <img src=\"{{ vich_uploader_asset(product, 'imageFile') }}\" />
          {% endif %}
          </li>
          {% if product.imageProduit2 != null  %}
          <li data-image=\"{{image2}}\">
          {% if app.environment == 'dev' %}
            <img src=\"/devShop/web{{ vich_uploader_asset(product, 'imageFile2') }}\" />
          {% else %}
            <img src=\"{{ vich_uploader_asset(product, 'imageFile2') }}\" />
          {% endif %}
          </li>
          {% endif %}
          {% if product.imageProduit3 != null  %}
          <li data-image=\"{{image3}}\">
          {% if app.environment == 'dev' %}
            <img src=\"/devShop/web{{ vich_uploader_asset(product, 'imageFile3') }}\" />
          {% else %}
            <img src=\"{{ vich_uploader_asset(product, 'imageFile3') }}\" />
          {% endif %}
          </li>
          {% endif %}
        </ul>
      </div>

      <!-- Selected Image -->
      <div class=\"col-lg-5 order-lg-2 order-1\">
        <div class=\"image_selected\">
        {% if app.environment == 'dev' %}
            <img src=\"/devShop/web{{ vich_uploader_asset(product, 'imageFile') }}\" />
        {% else %}
            <img src=\"{{ vich_uploader_asset(product, 'imageFile') }}\" />
        {% endif %}
        </div>
      </div>

      <!-- Description -->
      <div class=\"col-lg-5 order-3\">
        <div class=\"product_description\">
          <div class=\"product_category\">{{product.category.name}}</div>
          <div class=\"product_name\">{{product.titre|capitalize}}</div>
            <div class=\"fontawesome-star\"><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i><i class=\"fa fa-star\"></i></div>
          <div class=\"product_text\"><p>{% autoescape false %}{{product.description}}{% endautoescape %}</p></div>
          <div class=\"order_info d-flex flex-row\">
            <form action=\"{{ path('yz_ecommerce_addcart', {'id': product.id}) }}\" method=\"get\">

              <div class=\"clearfix\" style=\"z-index: 1000;\">

                <!-- Product Quantity -->
                <div class=\"product_quantity clearfix\">
                  <span>Quantity: </span>
                  <input id=\"quantity_input\" type=\"text\" name=\"qte\" pattern=\"[1-9]*\" value=\"1\">
                  <div class=\"quantity_buttons\">
                    <div id=\"quantity_inc_button\" class=\"quantity_inc quantity_control\"><i class=\"fas fa-chevron-up\"></i></div>
                    <div id=\"quantity_dec_button\" class=\"quantity_dec quantity_control\"><i class=\"fas fa-chevron-down\"></i></div>
                  </div>
                </div>
              </div>

              <div class=\"product_price\">
                {% if product.promo is null %}
                {{product.prixTtc}} €
              {% else %}
                  {{product.promoTtc}} €<span class=\"promo\">{{product.prixTtc}} €</span>
              {% endif %}
            </div>
              <div class=\"button_container\">
                <button type=\"submit\" class=\"button cart_button\" >Ajouter au panier</button>
              </div>

            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
{% endblock %}
", "YZEcommerceBundle:Ecommerce:product.html.twig", "/var/www/html/devShop/src/YZ/EcommerceBundle/Resources/views/Ecommerce/product.html.twig");
    }
}
