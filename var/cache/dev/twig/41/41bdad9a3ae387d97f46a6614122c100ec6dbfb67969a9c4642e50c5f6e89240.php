<?php

/* YZEcommerceBundle:Ecommerce:userOrders.html.twig */
class __TwigTemplate_81546be235dc5671bde5edb387db03421e1f9c998524fdc102cec010639ce53c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("YZEcommerceBundle::layout.html.twig", "YZEcommerceBundle:Ecommerce:userOrders.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:userOrders.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "YZEcommerceBundle:Ecommerce:userOrders.html.twig"));

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
        $context["totalTva"] = array();
        // line 8
        echo "

<!-- Cart -->

<div class=\"cart_section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"cart_container\">
          <div class=\"login_title\">Historique de vos commandes</div>
          </div>
          <table class=\"table table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\">Numéro de commande</th>
      <th scope=\"col\">Montant</th>
      <th scope=\"col\">Date commande</th>
    </tr>
  </thead>
  <tbody>
      ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userOrders"]) || array_key_exists("userOrders", $context) ? $context["userOrders"] : (function () { throw new Twig_Error_Runtime('Variable "userOrders" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["userOrder"]) {
            // line 29
            echo "      <tr>
        <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userOrder"], "reference", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userOrder"], "amount", array()), "html", null, true);
            echo " €</td>
        <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("yz_ecommerce_orderpdf", array("id" => twig_get_attribute($this->env, $this->source, $context["userOrder"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["userOrder"], "dateCommande", array()), "Y-m-d"), "html", null, true);
            echo "</a></td>
      </tr>

      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userOrder'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  </tbody>
</table>

          <!-- Order Total -->

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
        return "YZEcommerceBundle:Ecommerce:userOrders.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 36,  115 => 32,  111 => 31,  107 => 30,  104 => 29,  100 => 28,  78 => 8,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"YZEcommerceBundle::layout.html.twig\" %}

{% block title %}
Panier - {{ parent() }}
{% endblock %}
{% block body %}
{% set totalTva = [] %}


<!-- Cart -->

<div class=\"cart_section\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-12\">
        <div class=\"cart_container\">
          <div class=\"login_title\">Historique de vos commandes</div>
          </div>
          <table class=\"table table-bordered\">
  <thead>
    <tr>
      <th scope=\"col\">Numéro de commande</th>
      <th scope=\"col\">Montant</th>
      <th scope=\"col\">Date commande</th>
    </tr>
  </thead>
  <tbody>
      {% for userOrder in userOrders %}
      <tr>
        <td>{{userOrder.reference }}</td>
        <td>{{userOrder.amount }} €</td>
        <td><a href=\"{{path('yz_ecommerce_orderpdf', {'id':userOrder.id})}}\">{{userOrder.dateCommande|date('Y-m-d') }}</a></td>
      </tr>

      {% endfor %}
  </tbody>
</table>

          <!-- Order Total -->

        </div>
      </div>
    </div>
  </div>
</div>
{% endblock %}
", "YZEcommerceBundle:Ecommerce:userOrders.html.twig", "/var/www/html/devShop/src/YZ/EcommerceBundle/Resources/views/Ecommerce/userOrders.html.twig");
    }
}
