<?php

/* YZEcommerceBundle:Ecommerce:orderPdf.html.twig */
class __TwigTemplate_d37a044f1821abcb93009cff904e9982037d5099c5d69ebc8e2da106f3cf3eb3 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("YZEcommerceBundle::layout.html.twig", "YZEcommerceBundle:Ecommerce:orderPdf.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:orderPdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:orderPdf.html.twig"));

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
        echo "Panier - ";
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

<!-- Cart -->

<div class=\"cart_section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            echo "          <div class=\"alert alert-success\" role=\"alert\">
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        <div class=\"col-lg-6\">
          <h2>Devshop</h2>
          <p>123, rue des écoles<br>
          75003, Paris<br>
          Devshop@contact.fr<br>
          Tel 01 02 03 04 05<br>
          Fax 01 02 03 04 05</p>
        </div>
          <div class=\"col-lg-6\">
            <h3>Facture</h3>
            <p>Numéro de facture: ";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 30, $this->source); })()), "reference", array()), "html", null, true);
        echo " <br>
              Date de Facturation: ";
        // line 31
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 31, $this->source); })()), "dateCommande", array()), "none", "none", null, null, "d MMMM Y"), "html", null, true);
        echo "
            </p>
            </div>
            <div class=\"containerExpedition\">
            <div class=\"col-lg-6\">
              <h4>Facturer à:</h4>
              <p>
                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 38, $this->source); })()), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 38, $this->source); })()), "user", array()), "prenom", array()), "html", null, true);
        echo "<br>
                ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 39, $this->source); })()), "user", array()), "adresseFacturation", array()), "html", null, true);
        echo "<br>
                ";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 40, $this->source); })()), "user", array()), "email", array()), "html", null, true);
        echo "<br>
              +33";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 41, $this->source); })()), "user", array()), "telephone", array()), "html", null, true);
        echo "<br>
              </p>
            </div>

            <div class=\"col-lg-6\">
              <h4>Expédier à:</h4>
              <p>
                ";
        // line 48
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 48, $this->source); })()), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 48, $this->source); })()), "user", array()), "prenom", array()), "html", null, true);
        echo "<br>
                ";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 49, $this->source); })()), "user", array()), "adresseLivraison", array()), "html", null, true);
        echo "<br>
                ";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 50, $this->source); })()), "user", array()), "email", array()), "html", null, true);
        echo "<br>
                +33";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 51, $this->source); })()), "user", array()), "telephone", array()), "html", null, true);
        echo "<br>
              </p>
            </div>
            </div>
            <table class=\"table table-striped\">
              <thead>
                <tr class=\"table-primary\">
                  <th scope=\"col\" class=\"text-center\">Déscription</th>
                </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <td class=\"text-right table-success\">Montant TTC: ";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 63, $this->source); })()), "amount", array()), "html", null, true);
        echo "€</td>
                    </tr>
                  </tfoot>
                  <tbody>
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 67, $this->source); })()), "qteProduct", array()));
        foreach ($context['_seq'] as $context["qte"] => $context["key"]) {
            // line 68
            echo "                    <tr>
                    <td> ";
            // line 69
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " x ";
            echo twig_escape_filter($this->env, $context["qte"], "html", null, true);
            echo " <br> </td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['qte'], $context['key'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                  </tbody>
                  </table>
          </div>
          <div class=\"cart_buttons\">
            <a href=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_pdf", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 76, $this->source); })()), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"button cart_button_checkout\">Téléchargement de la facture</button></a>
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
        return "YZEcommerceBundle:Ecommerce:orderPdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 76,  206 => 72,  195 => 69,  192 => 68,  188 => 67,  181 => 63,  166 => 51,  162 => 50,  158 => 49,  152 => 48,  142 => 41,  138 => 40,  134 => 39,  128 => 38,  118 => 31,  114 => 30,  102 => 20,  93 => 17,  90 => 16,  86 => 15,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"YZEcommerceBundle::layout.html.twig\" %}

{% block title %}
Panier - {{ parent() }}
{% endblock %}
{% block body %}


<!-- Cart -->

<div class=\"cart_section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        {% for message in app.session.flashbag.get('success') %}
          <div class=\"alert alert-success\" role=\"alert\">
            {{ message }}
          </div>
        {% endfor %}
        <div class=\"col-lg-6\">
          <h2>Devshop</h2>
          <p>123, rue des écoles<br>
          75003, Paris<br>
          Devshop@contact.fr<br>
          Tel 01 02 03 04 05<br>
          Fax 01 02 03 04 05</p>
        </div>
          <div class=\"col-lg-6\">
            <h3>Facture</h3>
            <p>Numéro de facture: {{order.reference}} <br>
              Date de Facturation: {{order.dateCommande|localizeddate('none', 'none', null, null, 'd MMMM Y')}}
            </p>
            </div>
            <div class=\"containerExpedition\">
            <div class=\"col-lg-6\">
              <h4>Facturer à:</h4>
              <p>
                {{order.user.nom}} {{order.user.prenom}}<br>
                {{order.user.adresseFacturation}}<br>
                {{order.user.email}}<br>
              +33{{order.user.telephone}}<br>
              </p>
            </div>

            <div class=\"col-lg-6\">
              <h4>Expédier à:</h4>
              <p>
                {{order.user.nom}} {{order.user.prenom}}<br>
                {{order.user.adresseLivraison}}<br>
                {{order.user.email}}<br>
                +33{{order.user.telephone}}<br>
              </p>
            </div>
            </div>
            <table class=\"table table-striped\">
              <thead>
                <tr class=\"table-primary\">
                  <th scope=\"col\" class=\"text-center\">Déscription</th>
                </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <td class=\"text-right table-success\">Montant TTC: {{order.amount}}€</td>
                    </tr>
                  </tfoot>
                  <tbody>
                    {% for qte, key in order.qteProduct %}
                    <tr>
                    <td> {{key}} x {{qte}} <br> </td>
                    </tr>
                    {% endfor %}
                  </tbody>
                  </table>
          </div>
          <div class=\"cart_buttons\">
            <a href=\"{{path('yz_ecommerce_pdf', {'id': order.id})}}\"><button type=\"button\" class=\"button cart_button_checkout\">Téléchargement de la facture</button></a>
            </div>
          </div>

      </div>
    </div>
  </div>
</div>
{% endblock %}
", "YZEcommerceBundle:Ecommerce:orderPdf.html.twig", "/var/www/html/devShop/src/YZ/EcommerceBundle/Resources/views/Ecommerce/orderPdf.html.twig");
    }
}
