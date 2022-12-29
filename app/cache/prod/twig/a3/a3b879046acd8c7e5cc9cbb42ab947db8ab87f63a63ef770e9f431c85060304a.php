<?php

/* FactelBundle:Compra:show.html.twig */
class __TwigTemplate_90c9236962a02538874427801e26e422d0d58c618c2de21c1286feeef08bf503 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Compra:show.html.twig", 1);
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
        echo "
    <i class=\"fa fa-bar-chart-o fa-fw\"></i>Factura Compra <strong>Nro: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "numeroFactura", array()), "html", null, true);
        echo "</strong>
    <div class=\"pull-right\">
        <div class=\"btn-group\">
            <button class=\"btn btn-info btn-xs dropdown-toggle\"
                    type=\"button\" data-toggle=\"dropdown\">
                <i class=\"fa fa-list\"></i>
                Acciones <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                <li><a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compra-nueva");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Cargar Compra</a></li>
                <li><a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compra");
        echo "\"><i class=\"fa fa-list\"></i> Compras</a></li>
                <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compra_edit", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
                <li class=\"divider\"></li>
                <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compra_eliminar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Eliminar Compra</a></li>  
            </ul>
        </div>

    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 25
            echo "        <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <h4><strong>Ha ocurrido un error!</strong></h4>
            <p>";
            // line 28
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "confirm"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "        <div class=\"col-sm-12 alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <p>";
            // line 34
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    <div class=\"container-fluid factura\">
        <fieldset class=\"border  col-sm-12 \">
            <legend class=\"border\">Comprobante</legend>
            <div class=\"control-group\" id=\"comprobante\">
                <div class=\"col-sm-12 col-md-6\"><strong>Factura Compra Nro: </strong>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "numeroFactura", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Fecha Emisi&oacute;n: </strong>";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "fechaEmision", array()), "d/m/Y"), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\" style=\"padding: 0 !important; margin-top: 10px;\">
                    <div class=\"col-sm-12\"><strong>N&uacute;mero Autorizaci&oacute;n</strong></div>
                    <div class=\"col-sm-12\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "numeroAutorizacion", array()), "html", null, true);
        echo "</div>
                </div>
                <div class=\"col-sm-12 col-md-6\" style=\"padding: 0 !important; margin-top: 10px;\">
                    <div class=\"col-sm-12\"><strong>Clave Acceso</strong></div>
                    <div class=\"col-sm-12\">";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "claveAcceso", array()), "html", null, true);
        echo "</div>
                </div>
            </div>
        </fieldset>

        <fieldset class=\"border col-sm-12\">

            <legend class=\"border\">Proveedor</legend>

            <div class=\"form-group\">
                <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Ruc: ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "identificacionProveedor", array()), "html", null, true);
        echo "</strong></p></div>
                <div class=\"col-md-6\">
                    <strong>Razon Social: </strong>";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "razonSocialProveedor", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Nombre Comercial: </strong>";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "nombreComercialProveedor", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Direcci&oacute;n Matriz: </strong>";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "direccionMatrizProveedor", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Direcci&oacute;n Establecimiento: </strong>";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "direccionEstabProveedor", array()), "html", null, true);
        echo "
                </div>
            </div>
        </fieldset>
        <legend class=\"border\">Productos</legend>
        <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
            <table class=\"table table-striped table-bordered table-hover\" id=\"productos\">
                <thead>
                <thead>
                    <tr>
                        <th >Cantidad</th>
                        <th>C&oacute;digo</th>
                        <th>Descripci&oacute;n</th>
                        <th>Precio</th>
                        <th>Descuento</th>
                        <th>SubTotal</th>
                        <th>IVA</th>
                        <th>ICE</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "detallesCompra", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 92
            echo "                        <tr>
                            <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cantidad", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codigoProducto", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "precioUnitario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descuento", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "subTotal", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "iva12", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ice", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "                </tbody>
            </table>
        </div>
    </div>
    <div class=\"col-xs-12 col-sm-12 col-md-4 col-md-offset-8\">
        <div class=\"col-xs-10 col-sm-8 text-right\">SubTotal Sin Impuesto</div> 
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" >";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "totalSinImpuestos", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 12%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "subTotalIva12", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 0%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "subTotalIva0", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Descuento</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "totalDescuento", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Valor ICE</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "valorICE", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">IVA 12%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 130
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "iva12", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Propina</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" id=\"propina\">";
        // line 134
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "propina", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">VALOR TOTAL</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" id=\"valorTotal\">";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "valorTotal", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Compra:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 138,  288 => 134,  281 => 130,  274 => 126,  267 => 122,  260 => 118,  253 => 114,  246 => 110,  237 => 103,  228 => 100,  224 => 99,  220 => 98,  216 => 97,  212 => 96,  208 => 95,  204 => 94,  200 => 93,  197 => 92,  193 => 91,  169 => 70,  163 => 67,  157 => 64,  151 => 61,  146 => 59,  133 => 49,  126 => 45,  120 => 42,  116 => 41,  110 => 37,  101 => 34,  97 => 32,  92 => 31,  83 => 28,  78 => 25,  73 => 24,  70 => 23,  60 => 17,  55 => 15,  51 => 14,  47 => 13,  35 => 4,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Compra:show.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Compra/show.html.twig");
    }
}
