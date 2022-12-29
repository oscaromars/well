<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_151a015888f6552bc0af1f7aa4a81bbd6948f73a77899af37164a25e2e2a2521 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "TwigBundle:Exception:error.html.twig", 1);
        $this->blocks = array(
            'panel_title' => array($this, 'block_panel_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FactelBundle::Layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_panel_title($context, array $blocks = array())
    {
        // line 3
        echo "    <i class=\"fa fa-bar-chart-o fa-fw\"></i> Ha ocurrido un error!!
";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"col-sm-12\">
        <div style=\"text-align: center;\">
            <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/img/error.jpg"), "html", null, true);
        echo "\" alt=\"FacilFact\" />
        </div>
        <div style=\"text-align: center;\">
            ";
        // line 11
        $context["error"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", array()), "html", null, true)));
        // line 12
        echo "            ";
        if (twig_in_filter("DELETE FROM Cliente", $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", array()), "html", null, true))))) {
            // line 13
            echo "                ";
            $context["error"] = "ERROR!! No se puede eliminar un CLIENTE usado en un comprobante electronico";
            // line 14
            echo "            ";
        } elseif (twig_in_filter("DELETE FROM Producto", $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->formatFileFromText(nl2br(twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? null), "message", array()), "html", null, true))))) {
            // line 15
            echo "                ";
            $context["error"] = "ERROR!! No se puede eliminar un PRODUCTO usado en un comprobante electronico";
            // line 16
            echo "            ";
        }
        // line 17
        echo "            <h6 style=\"font-weight: bold\">";
        echo twig_escape_filter($this->env, ($context["error"] ?? null), "html", null, true);
        echo "</h6>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 17,  64 => 16,  61 => 15,  58 => 14,  55 => 13,  52 => 12,  50 => 11,  44 => 8,  40 => 6,  37 => 5,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "TwigBundle:Exception:error.html.twig", "/home/renesan1/public_html/1/app/Resources/TwigBundle/views/Exception/error.html.twig");
    }
}
