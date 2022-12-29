<?php

/* FactelBundle:Factura:cargarFactura.html.twig */
class __TwigTemplate_06b40e5e9460ec83853ad24efd21d2a535cc3e5a371a1babdd24b9355c745f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Factura:cargarFactura.html.twig", 1);
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

    // line 9
    public function block_panel_title($context, array $blocks = array())
    {
        // line 10
        echo "    <i class=\"fa fa-bar-chart-o fa-fw\"></i> Carga Masiva Factura
    <div class=\"pull-right\">

    </div>
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "        <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <h4><strong>Ha ocurrido un error!</strong></h4>
            <p>";
            // line 21
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "confirm"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "        <div class=\"col-sm-12 alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <p>";
            // line 27
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    <div class=\"col-md-12\">
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
        ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
    <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
        <table class=\"table table-striped table-bordered table-hover\" id=\"data-table\">
            <thead>
                <tr>
                    <th>ID Carga</th>
                    <th>Fecha Creacion</th>
                    <th>Estado</th>
                    <th>Inicio Procesamiento</th>
                    <th>Fin Procesamiento</th>
                    <th>Proceso Automatico?</th>
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
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "createdAt", array()), "m/d/Y H:i:s"), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            if ($this->getAttribute($context["entity"], "inicioProcesamiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "inicioProcesamiento", array()), "m/d/Y H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 55
            if ($this->getAttribute($context["entity"], "finProcesamiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "finProcesamiento", array()), "m/d/Y H:i:s"), "html", null, true);
            }
            echo "</td>
                        <td>";
            // line 56
            if ($this->getAttribute($context["entity"], "procesoAutomatico", array())) {
                echo "SI";
            } else {
                echo "NO";
            }
            echo "</td>
                        <td>
                            ";
            // line 58
            if (($this->getAttribute($context["entity"], "estado", array()) == "CARGADO")) {
                // line 59
                echo "                                ";
                if (($this->getAttribute($context["entity"], "procesoAutomatico", array()) == false)) {
                    // line 60
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_procesar_masivo_auto", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" title=\"Proceso Automatico\">
                                        <button class=\"btn btn-success link-boton\">
                                            <i class=\"fa fa-rocket\"></i>
                                        </button>
                                    </a>
                                ";
                } else {
                    // line 66
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_procesar_masivo_auto", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" title=\"Quitar Proceso Automatico\">
                                        <button class=\"btn btn-warning link-boton\">
                                            <i class=\"fa fa-ban\"></i>
                                        </button>
                                    </a>
                                ";
                }
                // line 72
                echo "                                
                                ";
                // line 73
                if (($this->getAttribute($context["entity"], "procesoAutomatico", array()) == false)) {
                    // line 74
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_procesar_masivo", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\" title=\"Procesar\">
                                        <button class=\"btn btn-primary link-boton\">
                                            <i class=\"fa fa-play\"></i>
                                        </button>
                                    </a>
                                ";
                }
                // line 80
                echo "                            ";
            } else {
                // line 81
                echo "                                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facturas_load_errors", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\" title=\"Ver Errores\">
                                    <button class=\"btn btn-danger link-boton\">
                                        <i class=\"fa fa-eye\"></i>
                                    </button>
                                </a>
                            ";
            }
            // line 87
            echo "

                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            </tbody>
        </table>
        ";
        // line 94
        if (array_key_exists("errors", $context)) {
            // line 95
            echo "            <ul class=\"list-group\">
                ";
            // line 96
            if ((twig_length_filter($this->env, ($context["errors"] ?? null)) > 0)) {
                // line 97
                echo "                    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 98
                    echo "                        <li class=\"list-group-item list-group-item-danger\">";
                    echo twig_escape_filter($this->env, $context["error"], "html", null, true);
                    echo "</li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                    ";
            } else {
                // line 101
                echo "                    <li class=\"list-group-item list-group-item-success\">Archivo procesado sin errores</li>
                    ";
            }
            // line 103
            echo "            </ul>
        ";
        }
        // line 105
        echo "    </div>
";
    }

    // line 107
    public function block_javascript($context, array $blocks = array())
    {
        // line 108
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Factura:cargarFactura.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 110,  281 => 109,  276 => 108,  273 => 107,  268 => 105,  264 => 103,  260 => 101,  257 => 100,  248 => 98,  243 => 97,  241 => 96,  238 => 95,  236 => 94,  232 => 92,  222 => 87,  212 => 81,  209 => 80,  199 => 74,  197 => 73,  194 => 72,  184 => 66,  174 => 60,  171 => 59,  169 => 58,  160 => 56,  154 => 55,  148 => 54,  144 => 53,  140 => 52,  136 => 51,  133 => 50,  129 => 49,  110 => 33,  106 => 32,  102 => 31,  99 => 30,  90 => 27,  86 => 25,  81 => 24,  72 => 21,  67 => 18,  62 => 17,  59 => 16,  51 => 10,  48 => 9,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Factura:cargarFactura.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Factura/cargarFactura.html.twig");
    }
}
