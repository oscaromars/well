<?php

/* FactelBundle:Establecimiento:edit.html.twig */
class __TwigTemplate_ac5284260ffba48c5ffe179a279277304794a12b21801c4cfcf32ee558e9960c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Establecimiento:edit.html.twig", 1);
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "nombre", array()), "html", null, true);
        echo "
<div class=\"pull-right\">
    <div class=\"btn-group\">
        <button class=\"btn btn-info btn-xs dropdown-toggle\"
                type=\"button\" data-toggle=\"dropdown\">
            <i class=\"fa fa-list\"></i>
            Acciones <span class=\"caret\"></span>
        </button>
        <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
            <li><a href=\"\" onclick=\"document.getElementById('submit').click();return false;\"><i class=\"fa fa-floppy-o\"></i> Guardar</a></li>
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("establecimiento_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("establecimiento");
        echo "\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
            <li class=\"divider\"></li>
            <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
        </ul>
    </div>

</div>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "
";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
   ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["edit_form"] ?? null), 'widget');
        echo "

<button class=\"hidden\" id=\"submit\" type=\"submit\"></button>
";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form');
        echo "

";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Establecimiento:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  78 => 28,  72 => 25,  68 => 24,  65 => 23,  62 => 22,  50 => 14,  46 => 13,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Establecimiento:edit.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Establecimiento/edit.html.twig");
    }
}
