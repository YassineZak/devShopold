<?php

/* YZSearchBundle:Search:searchBar.html.twig */
class __TwigTemplate_0eecb3affc1da589d83137fe951583e370b4bcb862062b7636e8425502cac746 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZSearchBundle:Search:searchBar.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZSearchBundle:Search:searchBar.html.twig"));

        // line 1
        echo "
<div class=\"col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right\">
  <div class=\"header_search\">
    <div class=\"header_search_content\">
      <div class=\"form-group\">
          ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_handle_search"), "method" => "get", "attr" => array("class" => "header_search_form clearfix")));
        echo "
          ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), "search", array()), 'widget', array("attr" => array("class" => "header_search_input search", "name" => "search", "autocomplete" => "off", "placeholder" => "Plus de 1000 articles disponibles en stock ...")));
        echo "


          <div id=\"categorieHide\" class=\"custom_dropdown\">
            <div class=\"custom_dropdown_list\">
              <span class=\"custom_dropdown_placeholder \"></span>
              <ul class=\"custom_list clc\">
                <li>
                  <a class=\"clc\" href=\"#\">Catégories</a>
                </li>
                ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->extensions['YZ\EcommerceBundle\Extension\CategoryExtension']->getCategories());
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 18
            echo "                <li>
                      <a class=\"clc\" href=\"#\">";
            // line 19
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array())), "html", null, true);
            echo "</a>
                    </li>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "

                <li>
                  <a class=\"clc\" href=\"#\">Laptops</a>
                </li>
                <li>
                  <a class=\"clc\" href=\"#\">Cameras</a>
                </li>
                <li>
                  <a class=\"clc\" href=\"#\">Hardware</a>
                </li>
                <li>
                  <a class=\"clc\" href=\"#\">Smartphones</a>
                </li>
              </ul>
            </div>
          </div>
          <button type=\"submit\" class=\"header_search_button trans_300\" value=\"Submit\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/search.png"), "html", null, true);
        echo "\" alt=\"\"></button>
        ";
        // line 40
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), 'form_end');
        echo "
      </div>
    </div>
    <div class=\"panel panel-primary\" id=\"search-result\">
      <ul class=\"panel-content\">


      </ul>

    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "YZSearchBundle:Search:searchBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 40,  88 => 39,  69 => 22,  60 => 19,  57 => 18,  53 => 17,  40 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<div class=\"col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right\">
  <div class=\"header_search\">
    <div class=\"header_search_content\">
      <div class=\"form-group\">
          {{ form_start(form, {'action': path('yz_handle_search'), 'method': 'get', 'attr': {'class': 'header_search_form clearfix'}}) }}
          {{ form_widget(form.search, {'attr': {'class': 'header_search_input search', 'name': 'search', 'autocomplete': 'off', 'placeholder': 'Plus de 1000 articles disponibles en stock ...'}} )}}


          <div id=\"categorieHide\" class=\"custom_dropdown\">
            <div class=\"custom_dropdown_list\">
              <span class=\"custom_dropdown_placeholder \"></span>
              <ul class=\"custom_list clc\">
                <li>
                  <a class=\"clc\" href=\"#\">Catégories</a>
                </li>
                {% for category in get_categories() %}
                <li>
                      <a class=\"clc\" href=\"#\">{{category.name|capitalize}}</a>
                    </li>
                  {% endfor %}


                <li>
                  <a class=\"clc\" href=\"#\">Laptops</a>
                </li>
                <li>
                  <a class=\"clc\" href=\"#\">Cameras</a>
                </li>
                <li>
                  <a class=\"clc\" href=\"#\">Hardware</a>
                </li>
                <li>
                  <a class=\"clc\" href=\"#\">Smartphones</a>
                </li>
              </ul>
            </div>
          </div>
          <button type=\"submit\" class=\"header_search_button trans_300\" value=\"Submit\"><img src=\"{{ asset('images/search.png')}}\" alt=\"\"></button>
        {{ form_end(form) }}
      </div>
    </div>
    <div class=\"panel panel-primary\" id=\"search-result\">
      <ul class=\"panel-content\">


      </ul>

    </div>
  </div>
</div>
", "YZSearchBundle:Search:searchBar.html.twig", "/var/www/html/devShop/src/YZ/SearchBundle/Resources/views/Search/searchBar.html.twig");
    }
}
