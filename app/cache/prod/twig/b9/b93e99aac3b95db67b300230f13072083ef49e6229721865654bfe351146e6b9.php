<?php

/* FactelBundle:Proforma:show.html.twig */
class __TwigTemplate_c044c3107fde7cc6175f4895c1c6ce29c04092dfb264e9feca5a10118f579ce8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Proforma:show.html.twig", 1);
        $this->blocks = array(
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
    public function block_panel_title($context, array $blocks = array())
    {
        // line 3
        echo "
    <i class=\"fa fa-bar-chart-o fa-fw\"></i>Proforma <strong>Nro: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "numero", array()), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Nueva</a></li>
                    ";
        // line 14
        if (($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "CREADA")) {
            // line 15
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma_edit", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
                    ";
        }
        // line 17
        echo "                <li><a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma");
        echo "\"><i class=\"fa fa-list\"></i> Proformas</a></li>
                <li class=\"divider\"></li>
                    ";
        // line 19
        if ((($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "ANULADA") && ($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "MIGRADA"))) {
            // line 20
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma_enviar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-paper-plane\"></i> Enviar Proforma</a></li>
                    <li><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma_migrar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-paper-plane\"></i> Migrar a Factura</a></li>

                ";
        }
        // line 24
        echo "                ";
        if (((($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "ENVIADA") || ($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "MIGRADA")) || ($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "ERROR EMAIL"))) {
            echo "        
                    <li><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma_descargar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()), "type" => "pdf")), "html", null, true);
            echo "\"><i class=\"fa fa-file-pdf-o\"></i> Descargar PDF</a></li>
                    ";
        }
        // line 27
        echo "                    ";
        if ((($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "ANULADA") && ($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "MIGRADA"))) {
            // line 28
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma_anular", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times-circle\"></i> Anular Proforma</a></li>
                    ";
        }
        // line 30
        echo "                    ";
        if (($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "MIGRADA")) {
            // line 31
            echo "                    <li class=\"divider\"></li>
                    <li><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma_eliminar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Eliminar Proforma</a></li>  
                    ";
        }
        // line 34
        echo "            </ul>
        </div>

    </div>
";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        // line 40
        echo "    <div class=\"container-fluid factura\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 42
            echo "            <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <h4><strong>Ha ocurrido un error!</strong></h4>
                <p>";
            // line 45
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "confirm"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "            <div class=\"col-sm-12 alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <p>";
            // line 51
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "        <div class=\"modal fade\" id=\"send-email\" tabindex=\"-1\" role=\"dialog\" 
             aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <!-- Modal Header -->
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" 
                                data-dismiss=\"modal\">
                            <span aria-hidden=\"true\">&times;</span>
                            <span class=\"sr-only\">Close</span>
                        </button>
                        <h4 class=\"modal-title\" id=\"myModalLabel\">
                            Enviar Email
                        </h4>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"col-sm-12 alert alert-info\">
                            <p>Ingrese el email al cual desea enviar el documento. Para mas de un email separarlo por coma (,) ejemplo: email1@gmail.com,email2@gmail.com</p>
                        </div>
                        <form role=\"form\" method=\"POST\" action=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_enviar_email", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\" id=\"formEmail\">
                            <div class=\"form-group\">
                                <label for=\"Email\">Email</label>
                                <input type=\"text\" class=\"form-control\"
                                       name=\"email\" id=\"email\" placeholder=\"Email separados por coma\"/>
                            </div>
                            <button id=\"send\" type=\"submit\" class=\"btn btn-default\">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 85
        if (((twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "mensajes", array())) > 0) && ($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "AUTORIZADO"))) {
            // line 86
            echo "            <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <h5><strong>Errores ocurrido durante el envio del email!</strong></h5>
                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "mensajes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 90
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mensaje", array()), "html", null, true);
                echo "</p>
                    <p>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "informacionAdicional", array()), "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "            </div>
        ";
        }
        // line 95
        echo "        <fieldset class=\"border col-sm-12\">
            <legend class=\"border\">Emisor</legend>
            <div class=\"control-group\" id=\"emisor\">
                <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Ruc:</strong> ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "ruc", array()), "html", null, true);
        echo "</p></div>
                <div class=\"col-sm-12 col-md-6\"><strong>Raz&oacute;n Social:</strong> ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "razonSocial", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Nombre Comercial:</strong> ";
        // line 100
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "establecimiento", array()), "nombreComercial", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "establecimiento", array()), "nombreComercial", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "nombreComercial", array()), "html", null, true);
        }
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Contribuyente Especial:</strong> ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "contribuyenteEspecial", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Obligado Contabilidad:</strong> ";
        // line 102
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "obligadoContabilidad", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Matriz:</strong> ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "direccionMatriz", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Establecimiento:</strong> ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "establecimiento", array()), "direccion", array()), "html", null, true);
        echo "</div>
            </div>
        </fieldset>

        <fieldset class=\"border  col-sm-12 \">
            <legend class=\"border\">Proforma</legend>
            <div class=\"control-group\" id=\"comprobante\">
                <div class=\"col-sm-12 col-md-6\"><strong>Estado: </strong><strong><span class=\"";
        // line 111
        if (($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "CREADA")) {
            echo "creada";
        } elseif ((($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "ENVIADA") || ($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "MIGRADA"))) {
            echo "autorizada";
        } else {
            echo " error ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "estado", array()), "html", null, true);
        echo "</span></strong></div>
                <div class=\"col-sm-12 col-md-6\"><strong>Fecha Emisi&oacute;n:</strong>";
        // line 112
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "fechaEmision", array()), "d/m/Y"), "html", null, true);
        echo "</div>
            </div>
        </fieldset>

        <fieldset class=\"border col-sm-12\">

            <legend class=\"border\">Cliente</legend>

            <div class=\"form-group\">
                <input type=\"text\" id=\"id\" class=\"form-control hidden\" name=\"id\">
                <div class=\"col-md-6\">
                    <strong>Nombre: </strong>";
        // line 123
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cliente", array()), "nombre", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Celular: </strong>";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cliente", array()), "celular", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Email: </strong>";
        // line 129
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cliente", array()), "correoElectronico", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Identificaci&oacute;n: </strong>";
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cliente", array()), "identificacion", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Direcci&oacute;n: </strong>";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cliente", array()), "direccion", array()), "html", null, true);
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
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "proformasHasProducto", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 155
            echo "                        <tr>
                            <td>";
            // line 156
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cantidad", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codigoProducto", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 158
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "precioUnitario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descuento", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 161
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "valorTotal", array()), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                </tbody>
            </table>
        </div>

    </div>

    <div class=\"col-xs-12 col-sm-12 col-md-4 col-md-offset-8\">

        <div class=\"col-xs-10 col-sm-8 text-right\">SubTotal Sin Impuesto</div> 
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" >";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "totalSinImpuestos", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 12%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 178
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "subtotal12", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Descuento</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "totalDescuento", array()), "html", null, true);
        echo "</p>
        </div>

        <div class=\"col-xs-10 col-sm-8 text-right\">IVA 12%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 187
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "iva12", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">VALOR TOTAL</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" id=\"valorTotal\">";
        // line 191
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "valorTotal", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
";
    }

    // line 195
    public function block_javascript($context, array $blocks = array())
    {
        // line 196
        echo "    <script>
        \$('#send').click(function () {
            \$('#send-email').modal('toggle');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Proforma:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  426 => 196,  423 => 195,  415 => 191,  408 => 187,  400 => 182,  393 => 178,  386 => 174,  374 => 164,  365 => 161,  361 => 160,  357 => 159,  353 => 158,  349 => 157,  345 => 156,  342 => 155,  338 => 154,  316 => 135,  310 => 132,  304 => 129,  298 => 126,  292 => 123,  278 => 112,  266 => 111,  256 => 104,  252 => 103,  248 => 102,  244 => 101,  236 => 100,  232 => 99,  228 => 98,  223 => 95,  219 => 93,  211 => 91,  206 => 90,  202 => 89,  197 => 86,  195 => 85,  180 => 73,  159 => 54,  150 => 51,  146 => 49,  141 => 48,  132 => 45,  127 => 42,  123 => 41,  120 => 40,  117 => 39,  109 => 34,  104 => 32,  101 => 31,  98 => 30,  92 => 28,  89 => 27,  84 => 25,  79 => 24,  73 => 21,  68 => 20,  66 => 19,  60 => 17,  54 => 15,  52 => 14,  48 => 13,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Proforma:show.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Proforma/show.html.twig");
    }
}
