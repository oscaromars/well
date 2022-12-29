<?php

/* FactelBundle:Producto:index.html.twig */
class __TwigTemplate_cdd11fa1e1b2d2e854c42b3650e236835fc0cea74435039fe6073b20185fac77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Producto:index.html.twig", 1);
        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'panel_title' => array($this, 'block_panel_title'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
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
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- DataTables CSS -->
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- DataTables Responsive CSS -->
    <link href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-responsive/css/dataTables.responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
    }

    // line 8
    public function block_panel_title($context, array $blocks = array())
    {
        // line 9
        echo "    <i class=\"fa fa-bar-chart-o fa-fw\"></i> Productos
    <div class=\"pull-right\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_new");
        echo "\">
            <button class=\"btn btn-primary link-boton\">
                <i class=\"fa fa-plus-circle\"></i>
                Nuevo
            </button>
        </a>
    </div>
";
    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "        <div class=\"col-sm-12 alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <h4><strong>Carga Exitosa</strong></h4>
            <p>";
            // line 24
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 28
            echo "        <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <h4><strong>Ha ocurrido un error!</strong></h4>
            <p>";
            // line 31
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
        <table class=\"table table-striped table-bordered table-hover\" id=\"data-table\">
            <thead>
                <tr>
                    <th>Nombre</th>
                        ";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "                        <th>Emisor</th>
                        ";
        }
        // line 42
        echo "                    <th>C&oacute;digo Principal</th>
                    <th>C&oacute;digo Auxiliar</th>
                    <th>Precio Unitario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 50
            echo "                    <tr>
                        <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_show", array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "nombre", array()), "html", null, true);
            echo "</a></td>
                            ";
            // line 52
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
                // line 53
                echo "                            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "razonSocial", array()), "html", null, true);
                echo "</td>
                        ";
            }
            // line 55
            echo "                        <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "codigoPrincipal", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "codigoAuxiliar", array()), "html", null, true);
            echo "</td>

                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "precioUnitario", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_edit", array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))), "html", null, true);
            echo "\" title=\"Editar\">
                                <button class=\"btn btn-primary link-boton\">
                                    <i class=\"fa fa-pencil-square-o\"></i>
                                </button>
                            </a>

                            <button class=\"btn btn-danger link-boton accion\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()), "html", null, true);
            echo "\">
                                <i class=\"glyphicon glyphicon-trash icon-white\"></i>
                            </button>
                            ";
            // line 69
            echo             $this->env->getExtension('form')->renderer->renderBlock($this->getAttribute(($context["deleteForms"] ?? null), $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()), array(), "array"), 'form', array("attr" => array("id" => $this->getAttribute($this->getAttribute($context["entity"], 0, array(), "array"), "id", array()))));
            echo "
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "            </tbody>
        </table>
    </div>
";
    }

    // line 77
    public function block_javascript($context, array $blocks = array())
    {
        // line 78
        echo "    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Producto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 81,  208 => 80,  204 => 79,  201 => 78,  198 => 77,  191 => 73,  181 => 69,  175 => 66,  166 => 60,  161 => 58,  156 => 56,  151 => 55,  145 => 53,  143 => 52,  137 => 51,  134 => 50,  130 => 49,  121 => 42,  117 => 40,  115 => 39,  108 => 34,  99 => 31,  94 => 28,  89 => 27,  80 => 24,  75 => 21,  70 => 20,  67 => 19,  55 => 11,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Producto:index.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Producto/index.html.twig");
    }
}
