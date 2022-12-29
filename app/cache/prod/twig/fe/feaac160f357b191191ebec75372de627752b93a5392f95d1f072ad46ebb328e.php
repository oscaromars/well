<?php

/* FactelBundle:Factura:show.html.twig */
class __TwigTemplate_7484991b7152a4353af15277b6b158e0dbca0ab849b9a425305cf39d6e67b624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Factura:show.html.twig", 1);
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
    <i class=\"fa fa-bar-chart-o fa-fw\"></i>Factura <strong>Nro: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "establecimiento", array()), "codigo", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "ptoEmision", array()), "codigo", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "secuencial", array()), "html", null, true);
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_new");
        echo "\"><i class=\"fa fa-plus-circle\"></i> Nueva</a></li>
                    ";
        // line 14
        if ((((($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "CREADA") || ($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "DEVUELTA")) || ($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "NO AUTORIZADO")) || ($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "PROCESANDOSE"))) {
            // line 15
            echo "                    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_edit", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>

                    ";
        }
        // line 18
        echo "
                <li><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura");
        echo "\"><i class=\"fa fa-list\"></i> Facturas</a></li>
                <li class=\"divider\"></li>
                    ";
        // line 21
        if ((($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "AUTORIZADO") && ($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "ANULADA"))) {
            // line 22
            echo "                    <li><a href=\"javascript:window.open('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("pdf/documentos/ticket.php"), "html", null, true);
            echo "?id_ticket=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
            echo "','popup','width=1024px,height=720px')\"><i class=\"glyphicon glyphicon-print\"></i> Imprimir Ticket</a></li>
                    <li><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_procesar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-paper-plane\"></i> Enviar SRI</a></li>
                    ";
        }
        // line 25
        echo "                    ";
        if (($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "AUTORIZADO")) {
            // line 26
            echo "                    <li><a href=\"javascript:window.open('";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("pdf/documentos/ticket.php"), "html", null, true);
            echo "?id_ticket=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
            echo "','popup','width=1024px,height=720px')\"><i class=\"glyphicon glyphicon-print\"></i> Imprimir Ticket</a></li>
               <li><a href=\"javascript:window.open('";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("pdf/documentos/factura_electronica.php"), "html", null, true);
            echo "?id_factura=";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "id", array()), "html", null, true);
            echo "','popup','width=1024px,height=720px')\"><i class=\"glyphicon glyphicon-print\"></i> Imprimir Fac</a></li>

                    <li><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_descargar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()), "type" => "pdf")), "html", null, true);
            echo "\"><i class=\"fa fa-file-pdf-o\"></i> Descargar PDF</a></li>
                    <li><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_descargar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()), "type" => "zip")), "html", null, true);
            echo "\"><i class=\"fa fa-file-archive-o\"></i> Descargar PDF y XML</a></li>

                    <li><a href=\"#send-email\" data-toggle=\"modal\"><i class=\"fa fa-send\"></i> Reenviar Email</a></li>
                    ";
        }
        // line 34
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_clonar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-copy\"></i> Duplicar Factura</a></li>
                    ";
        // line 35
        if (($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "ANULADA")) {
            // line 36
            echo "                    <li class=\"divider\"></li>
                    <li><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_anular", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-times-circle\"></i> Anular Factura</a></li>
                    ";
        }
        // line 39
        echo "                    ";
        if (($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "AUTORIZADO")) {
            // line 40
            echo "                    <li class=\"divider\"></li>
                    <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_eliminar", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-trash\"></i> Eliminar Factura</a></li>
                    ";
        }
        // line 43
        echo "
            </ul>
        </div>

    </div>
";
    }

    // line 49
    public function block_content($context, array $blocks = array())
    {
        // line 50
        echo "    <div class=\"container-fluid factura\">
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 52
            echo "            <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <h4><strong>Ha ocurrido un error!</strong></h4>
                <p>";
            // line 55
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "confirm"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 59
            echo "            <div class=\"col-sm-12 alert alert-success alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <p>";
            // line 61
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        // line 83
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
        // line 95
        if (((twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "mensajes", array())) > 0) && ($this->getAttribute(($context["entity"] ?? null), "estado", array()) != "AUTORIZADO"))) {
            // line 96
            echo "            <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                <h5><strong>Errores ocurrido durante el proceso de envio al SRI!</strong></h5>
                ";
            // line 99
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "mensajes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 100
                echo "                    <p>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "mensaje", array()), "html", null, true);
                echo "</p>
                    <p>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "informacionAdicional", array()), "html", null, true);
                echo "</p>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "            </div>
        ";
        }
        // line 105
        echo "        <fieldset class=\"border col-sm-12\">
            <legend class=\"border\">Emisor</legend>
            <div class=\"control-group\" id=\"emisor\">
                <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Ruc:</strong> ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "ruc", array()), "html", null, true);
        echo "</p></div>
                <div class=\"col-sm-12 col-md-6\"><strong>Raz&oacute;n Social:</strong> ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "razonSocial", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Nombre Comercial:</strong> ";
        // line 110
        if ($this->getAttribute($this->getAttribute(($context["entity"] ?? null), "establecimiento", array()), "nombreComercial", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "establecimiento", array()), "nombreComercial", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "nombreComercial", array()), "html", null, true);
        }
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Contribuyente Especial:</strong> ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "contribuyenteEspecial", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Obligado Contabilidad:</strong> ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "obligadoContabilidad", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Matriz:</strong> ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "emisor", array()), "direccionMatriz", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Establecimiento:</strong> ";
        // line 114
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "establecimiento", array()), "direccion", array()), "html", null, true);
        echo "</div>
            </div>
        </fieldset>

        <fieldset class=\"border  col-sm-12 \">
            <legend class=\"border\">Comprobante</legend>
            <div class=\"control-group\" id=\"comprobante\">
                <div class=\"col-sm-12 col-md-6\"><strong>Estado: </strong><strong><span class=\"";
        // line 121
        if (($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "CREADA")) {
            echo "creada";
        } elseif (($this->getAttribute(($context["entity"] ?? null), "estado", array()) == "AUTORIZADO")) {
            echo "autorizada";
        } else {
            echo " error ";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "estado", array()), "html", null, true);
        echo "</span></strong></div>
                <div class=\"col-sm-12 col-md-9\"><strong>N&uacute;mero Autorizaci&oacute;n:</strong> ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "numeroAutorizacion", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Ambiente:</strong> ";
        // line 123
        if (($this->getAttribute(($context["entity"] ?? null), "ambiente", array()) == 1)) {
            echo " Pruebas ";
        } else {
            echo " Producci&oacute;n ";
        }
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Tipo Emisi&oacute;n:</strong> ";
        // line 124
        if (($this->getAttribute(($context["entity"] ?? null), "tipoEmision", array()) == 1)) {
            echo " Emisi&oacute;n Normal ";
        } else {
            echo " Emisi&oacute;n por Indisponibilidad del Sistema ";
        }
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Fecha Emisi&oacute;n:</strong>";
        // line 125
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "fechaEmision", array()), "d/m/Y"), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-lg-12\">
                    <div> <label class=\"control-label\">Forma Pago: </label> ";
        // line 127
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "formaPagoStr", array()), "html", null, true);
        echo "</div>
                    ";
        // line 128
        if ($this->getAttribute(($context["entity"] ?? null), "plazo", array())) {
            // line 129
            echo "                        <div> <label class=\"control-label\">Plazo: </label> ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "plazo", array()), "html", null, true);
            echo " Dias</div>
                    ";
        }
        // line 131
        echo "                </div>
                <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Clave Acceso</strong></p></div>
                <div class=\"col-sm-12 claveAcceso\"><p class=\"text-center\" >";
        // line 133
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "claveAcceso", array()), "html", null, true);
        echo "</p></div>

            </div>
        </fieldset>

        <fieldset class=\"border col-sm-12\">

            <legend class=\"border\">Cliente</legend>

            <div class=\"form-group\">
                <input type=\"text\" id=\"id\" class=\"form-control hidden\" name=\"id\">
                <div class=\"col-md-6\">
                    <strong>Nombre: </strong>";
        // line 145
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cliente", array()), "nombre", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Celular: </strong>";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cliente", array()), "celular", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Email: </strong>";
        // line 151
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cliente", array()), "correoElectronico", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Identificaci&oacute;n: </strong>";
        // line 154
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["entity"] ?? null), "cliente", array()), "identificacion", array()), "html", null, true);
        echo "
                </div>
                <div class=\"col-md-6\">
                    <strong>Direcci&oacute;n: </strong>";
        // line 157
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
                        <th>ICE</th>
                        <th>IRBPNR</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "facturasHasProducto", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 179
            echo "                        <tr>
                            <td>";
            // line 180
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "cantidad", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 181
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "codigoProducto", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "nombre", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "precioUnitario", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 184
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "descuento", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "valorTotal", array()), "html", null, true);
            echo "</td>
                            ";
            // line 186
            $context["ice"] = "0.00";
            // line 187
            echo "                            ";
            $context["irbpnr"] = "0.00";
            // line 188
            echo "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "impuestos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["impuesto"]) {
                // line 189
                echo "                                ";
                if (($this->getAttribute($context["impuesto"], "codigo", array()) == "3")) {
                    // line 190
                    echo "                                    ";
                    $context["ice"] = $this->getAttribute($context["impuesto"], "valor", array());
                    // line 191
                    echo "                                ";
                }
                // line 192
                echo "
                                ";
                // line 193
                if (($this->getAttribute($context["impuesto"], "codigo", array()) == "5")) {
                    // line 194
                    echo "                                    ";
                    $context["irbpnr"] = $this->getAttribute($context["impuesto"], "valor", array());
                    // line 195
                    echo "                                ";
                }
                // line 196
                echo "                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['impuesto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 197
            echo "                            <td>";
            echo twig_escape_filter($this->env, ($context["ice"] ?? null), "html", null, true);
            echo "</td>
                            <td>";
            // line 198
            echo twig_escape_filter($this->env, ($context["irbpnr"] ?? null), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 201
        echo "                </tbody>
            </table>
        </div>
        ";
        // line 204
        if ((twig_length_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "reembolsos", array())) > 0)) {
            // line 205
            echo "            <legend class=\"border\">Reembolsos</legend>
            <div class=\"dataTable_wrapper table-responsive col-lg-12\">
                <table class=\"table table-striped table-bordered table-hover\" id=\"reembolsos\">
                    <thead>
                    <thead>
                        <tr>
                            <th >Tipo Proveedor</th>
                            <th>Identificación</th>
                            <th>Estb.</th>
                            <th>Pto</th>
                            <th>Secuencial</th>
                            <th>Fecha</th>
                            <th>Número Autorización</th>
                            <th>Base 0%</th>
                            <th>Base 12%</th>
                            <th>IVA</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["entity"] ?? null), "reembolsos", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 226
                echo "                            ";
                $context["impuestoReembolso"] = $this->getAttribute($context["item"], "impuestoReembolso", array());
                // line 227
                echo "                            ";
                $context["baseImponibleReembolso"] = $this->getAttribute($context["item"], "baseImponibleReembolso", array());
                // line 228
                echo "                            ";
                $context["baseImponibleSinIvaReembolso"] = $this->getAttribute($context["item"], "baseImponibleSinIvaReembolso", array());
                // line 229
                echo "                            <tr>
                                <td>";
                // line 230
                if (($this->getAttribute($context["item"], "tipoProveedorReembolso", array()) == "01")) {
                    echo " PERSONA NATURAL ";
                } else {
                    echo " SOCIEDAD ";
                }
                echo "</td>
                                <td>";
                // line 231
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "identificacionProveedorReembolso", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 232
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "estabDocReembolso", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 233
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "ptoEmiDocReembolso", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 234
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "secuencialDocReembolso", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 235
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "fechaEmisionDocReembolso", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                <td>";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "numeroautorizacionDocReemb", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 237
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "baseImponibleSinIvaReembolso", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 238
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "baseImponibleReembolso", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 239
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "impuestoReembolso", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 240
                echo twig_escape_filter($this->env, twig_round(((($context["impuestoReembolso"] ?? null) + ($context["baseImponibleReembolso"] ?? null)) + ($context["baseImponibleSinIvaReembolso"] ?? null)), 2), "html", null, true);
                echo "</td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 243
            echo "                    </tbody>
                </table>
            </div>
        ";
        }
        // line 247
        echo "    </div>

    <div class=\"col-xs-12 col-sm-12 col-md-4 col-md-offset-8\">

        <div class=\"col-xs-10 col-sm-8 text-right\">SubTotal Sin Impuesto</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" >";
        // line 253
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "totalSinImpuestos", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 12%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 257
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "subtotal12", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 0%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 261
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "subtotal0", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total No Objeto IVA</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" >";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "subtotalNoIVA", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Exento IVA</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 269
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "subtotalExentoIVA", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Descuento</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 273
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "totalDescuento", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Valor ICE</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "valorICE", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Valor IRBPNR</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 281
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "valorIRBPNR", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">IVA 12%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\">";
        // line 285
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "iva12", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Propina</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" id=\"propina\">";
        // line 289
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "propina", array()), "html", null, true);
        echo "</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">VALOR TOTAL</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" id=\"valorTotal\">";
        // line 293
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "valorTotal", array()), "html", null, true);
        echo "</p>
        </div>
    </div>
    ";
        // line 296
        if (($this->getAttribute(($context["entity"] ?? null), "totalSubsidio", array()) > 0)) {
            // line 297
            echo "        <div class=\"col-xs-12 col-sm-12 col-md-4 col-md-offset-8\" style=\"margin-top: 20px\" id=\"subsidio\">
            <div class=\"col-xs-10 col-sm-8 text-right\">VALOR TOTAL SIN SUBSIDIO</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"\" id=\"totalSinSubsidio\">";
            // line 300
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "totalSinSubsidio", array()), "html", null, true);
            echo "</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">AHORRO POR SUBSIDIO</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"ahorroSubsidio\">";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "totalSubsidio", array()), "html", null, true);
            echo "</p>
            </div>
        </div>
    ";
        }
    }

    // line 309
    public function block_javascript($context, array $blocks = array())
    {
        // line 310
        echo "    <script>
        \$('#send').click(function () {
            \$('#send-email').modal('toggle');
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Factura:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 310,  707 => 309,  698 => 304,  691 => 300,  686 => 297,  684 => 296,  678 => 293,  671 => 289,  664 => 285,  657 => 281,  650 => 277,  643 => 273,  636 => 269,  629 => 265,  622 => 261,  615 => 257,  608 => 253,  600 => 247,  594 => 243,  585 => 240,  581 => 239,  577 => 238,  573 => 237,  569 => 236,  565 => 235,  561 => 234,  557 => 233,  553 => 232,  549 => 231,  541 => 230,  538 => 229,  535 => 228,  532 => 227,  529 => 226,  525 => 225,  503 => 205,  501 => 204,  496 => 201,  487 => 198,  482 => 197,  476 => 196,  473 => 195,  470 => 194,  468 => 193,  465 => 192,  462 => 191,  459 => 190,  456 => 189,  451 => 188,  448 => 187,  446 => 186,  442 => 185,  438 => 184,  434 => 183,  430 => 182,  426 => 181,  422 => 180,  419 => 179,  415 => 178,  391 => 157,  385 => 154,  379 => 151,  373 => 148,  367 => 145,  352 => 133,  348 => 131,  342 => 129,  340 => 128,  336 => 127,  331 => 125,  323 => 124,  315 => 123,  311 => 122,  299 => 121,  289 => 114,  285 => 113,  281 => 112,  277 => 111,  269 => 110,  265 => 109,  261 => 108,  256 => 105,  252 => 103,  244 => 101,  239 => 100,  235 => 99,  230 => 96,  228 => 95,  213 => 83,  192 => 64,  183 => 61,  179 => 59,  174 => 58,  165 => 55,  160 => 52,  156 => 51,  153 => 50,  150 => 49,  141 => 43,  136 => 41,  133 => 40,  130 => 39,  125 => 37,  122 => 36,  120 => 35,  115 => 34,  108 => 30,  104 => 29,  97 => 27,  90 => 26,  87 => 25,  82 => 23,  75 => 22,  73 => 21,  68 => 19,  65 => 18,  58 => 15,  56 => 14,  52 => 13,  36 => 4,  33 => 3,  30 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Factura:show.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Factura/show.html.twig");
    }
}
