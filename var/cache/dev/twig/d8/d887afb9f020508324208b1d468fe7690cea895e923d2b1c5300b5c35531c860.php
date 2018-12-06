<?php

/* YZEcommerceBundle:Ecommerce:pdf.html.twig */
class __TwigTemplate_490e60a94db31e5b5ffc2511044be3929f4f419f70141ef167860e108fb129df extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:pdf.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:pdf.html.twig"));

        // line 1
        echo "

<!-- Cart -->

<div class=\"cart_section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
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
            <p>Numéro de facture: ";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->source); })()), "reference", array()), "html", null, true);
        echo " <br>
              Date de Facturation: ";
        // line 20
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 20, $this->source); })()), "dateCommande", array()), "none", "none", null, null, "d MMMM Y"), "html", null, true);
        echo "
            </p>
            </div>
            <div class=\"containerExpedition\">
            <div class=\"col-lg-6\">
              <h4>Facturer à:</h4>
              <p>
                ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->source); })()), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 27, $this->source); })()), "user", array()), "prenom", array()), "html", null, true);
        echo "<br>
                ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 28, $this->source); })()), "user", array()), "adresseFacturation", array()), "html", null, true);
        echo "<br>
                ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 29, $this->source); })()), "user", array()), "email", array()), "html", null, true);
        echo "<br>
              +33";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 30, $this->source); })()), "user", array()), "telephone", array()), "html", null, true);
        echo "<br>
              </p>
            </div>

            <div class=\"col-lg-6\">
              <h4>Expédier à:</h4>
              <p>
                ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 37, $this->source); })()), "user", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 37, $this->source); })()), "user", array()), "prenom", array()), "html", null, true);
        echo "<br>
                ";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 38, $this->source); })()), "user", array()), "adresseLivraison", array()), "html", null, true);
        echo "<br>
                ";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 39, $this->source); })()), "user", array()), "email", array()), "html", null, true);
        echo "<br>
                +33";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 40, $this->source); })()), "user", array()), "telephone", array()), "html", null, true);
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
        // line 52
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 52, $this->source); })()), "amount", array()), "html", null, true);
        echo "€</td>
                    </tr>
                  </tfoot>
                  <tbody>
                    ";
        // line 56
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 56, $this->source); })()), "qteProduct", array()));
        foreach ($context['_seq'] as $context["qte"] => $context["key"]) {
            // line 57
            echo "                    <tr>
                    <td> ";
            // line 58
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
        // line 61
        echo "                  </tbody>
                  </table>
          </div>
        

      </div>
    </div>
  </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "YZEcommerceBundle:Ecommerce:pdf.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 61,  130 => 58,  127 => 57,  123 => 56,  116 => 52,  101 => 40,  97 => 39,  93 => 38,  87 => 37,  77 => 30,  73 => 29,  69 => 28,  63 => 27,  53 => 20,  49 => 19,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

<!-- Cart -->

<div class=\"cart_section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
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
        

      </div>
    </div>
  </div>
</div>
", "YZEcommerceBundle:Ecommerce:pdf.html.twig", "/var/www/html/devShop/src/YZ/EcommerceBundle/Resources/views/Ecommerce/pdf.html.twig");
    }
}
