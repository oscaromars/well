<?php

/* FactelBundle:Factura:new.html.twig */
class __TwigTemplate_f6aaa63a5526d2c715f78f125e9913fc79c191070395fb074692ee7aaf86410f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Factura:new.html.twig", 2);
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
        // line 3
        $context["secuencial"] = $this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "secuencialFactura", array());
        // line 4
        $context["cant"] = (9 - twig_length_filter($this->env, ($context["secuencial"] ?? null)));
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["cant"] ?? null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 6
            $context["secuencial"] = (0 . ($context["secuencial"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_panel_title($context, array $blocks = array())
    {
        // line 9
        echo "
    <i class=\"fa fa-bar-chart-o fa-fw\"></i>Nueva Factura <strong>Nro: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "codigo", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "codigo", array()), "html", null, true);
        echo "-";
        echo twig_escape_filter($this->env, ($context["secuencial"] ?? null), "html", null, true);
        echo "</strong>
    <div class=\"pull-right\">
        <div class=\"btn-group\">
            <button class=\"btn btn-info btn-xs dropdown-toggle\"
                    type=\"button\" data-toggle=\"dropdown\">
                <i class=\"fa fa-list\"></i>
                Acciones <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                <li><a href=\"\" onclick=\"document.getElementById('submit').click();
                        return false;\"><i class=\"fa fa-floppy-o\"></i> Guardar</a></li>
                <li><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura");
        echo "\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
            </ul>
        </div>

    </div>
";
    }

    // line 27
    public function block_content($context, array $blocks = array())
    {
        // line 28
        echo "    <div class=\"modal fade\" id=\"search-client\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Seleccione el Cliente</h4>
                </div>

                <div class=\"modal-body\">
                    <div class=\"dataTable_wrapper table-responsive\">  
                        <table class=\"table table-bordered table-hover \" id=\"client-table\">
                            <thead>
                                <tr>
                                    <th style=\"width: 10%\" >ID</th>
                                    <th style=\"width: 10%\" >Tipo Identificacion</th>
                                    <th style=\"width: 30%\" >Identificaci&oacute;n</th>
                                    <th>Raz&oacute;n Social</th>
                                    <th>Celular</th>
                                    <th>Email</th>
                                    <th>Direccion</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"modal fade\" id=\"search-product\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">

                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Seleccione un Producto</h4>
                </div>

                <div class=\"modal-body\">
                    <div class=\"dataTable_wrapper table-responsive\">  
                        <table class=\"table table-bordered table-hover \" id=\"product-table\">
                            <thead>
                                <tr>
                                    <th style=\"width: 10%\" >ID</th>
                                    <th >C&oacute;digo Principal</th>
                                    <th >C&oacute;digo Auxiliar</th>
                                    <th>Descricci&oacute;n</th>
                                    <th>Precio Unitario</th>
                                    <th>IVA</th>
                                    <th>ICE</th>
                                    <th>IRBPNR</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form method=\"POST\" action=\"";
        // line 92
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura_create");
        echo "\" id=\"formFactura\">
        <div class=\"container-fluid factura\">
            ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 95
            echo "                <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <h4><strong>Ha ocurrido un error al crear la factura!</strong></h4>
                    <p>";
            // line 98
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "            <fieldset class=\"border col-sm-12\">
                <legend class=\"border\">Emisor</legend>
                <div class=\"control-group\" id=\"emisor\">
                    <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Ruc:</strong> ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ruc", array()), "html", null, true);
        echo "</p></div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Raz&oacute;n Social:</strong> ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "razonSocial", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Nombre Comercial:</strong> ";
        // line 106
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "nombreComercial", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "nombreComercial", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "nombreComercial", array()), "html", null, true);
        }
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Contribuyente Especial:</strong> ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "contribuyenteEspecial", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Obligado Contabilidad:</strong> ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "obligadoContabilidad", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Matriz:</strong> ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "direccionMatriz", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Establecimiento:</strong> ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "direccion", array()), "html", null, true);
        echo "</div>
                </div>
            </fieldset>

            <fieldset class=\"border  col-sm-12 \">
                <legend class=\"border\">Comprobante</legend>
                <div class=\"control-group\" id=\"comprobante\">
                    <div class=\"col-sm-6 col-lg-3\"><strong>Ambiente:</strong> ";
        // line 117
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ambiente", array()) == 1)) {
            echo " Pruebas ";
        } else {
            echo " Producci&oacute;n ";
        }
        echo "</div>
                    <div class=\"col-lg-4\"><strong>Tipo Emisi&oacute;n:</strong> ";
        // line 118
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "tipoEmision", array()) == 1)) {
            echo " Emisi&oacute;n Normal ";
        } else {
            echo " Emisi&oacute;n por Indisponibilidad del Sistema ";
        }
        echo "</div>
                    <div class=\"col-sm-12 col-lg-5\"><strong>Fecha Emisi&oacute;n: *</strong> <input type=\"text\" id=\"fecha\" size=\"8\" name=\"fechaEmision\" required=\"required\" onchange=\"CrearClaveAcceso()\"/> </div>
                    <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Clave Acceso</strong></p></div>
                    <div class=\"col-sm-12 claveAcceso\"><p class=\"text-center\" id=\"claveAcceso\"></p></div>
                    <div class=\"col-sm-6 col-lg-5\">
                        <label class=\"control-label\">Forma Pago *</label>
                        <select class=\"form-control\" id=\"formaPago\" name=\"formaPago\" required=\"required\">
                            <option value=\"01\">SIN UTILIZACION DEL SISTEMA FINANCIERO</option>
                            <a href=\"../../../Entity/Factura.php\"></a>
                            <option value=\"15\">COMPENSACIÓN DE DEUDAS</option>
                            <option value=\"16\">TARJETA DE DÉBITO</option>
                            <option value=\"17\">DINERO ELECTRÓNICO</option>
                            <option value=\"18\">TARJETA PREPAGO</option>
                            <option value=\"19\">TARJETA DE CRÉDITO</option>
                            <option value=\"20\">OTROS CON UTILIZACION DEL SISTEMA FINANCIERO</option>
                            <option value=\"21\">ENDOSO DE TÍTULOS</option>

                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"control-label\">Plazo(Numero de Dias)</label>
                        <input type=\"text\" id=\"plazo\"  class=\"form-control\" name=\"plazo\" > 
                    </div>
                </div>
            </fieldset>

            ";
        // line 144
        $context["datos"] = (((((((((((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ruc", array()) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ambiente", array())) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "tipoEmision", array())) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "codigo", array())) . ",") . $this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "codigo", array())) . ",") . ($context["secuencial"] ?? null)) . ",") . "01");
        // line 145
        echo "            <input id=\"datos\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, ($context["datos"] ?? null), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"secuencial\" value=\"";
        // line 146
        echo twig_escape_filter($this->env, ($context["secuencial"] ?? null), "html", null, true);
        echo "\" />
            <fieldset class=\"border col-sm-12\">

                <legend class=\"border\">Cliente</legend>

                <div class=\"form-group\">
                    <div class=\"checkbox col-sm-6 \">
                        <label>
                            <input type=\"checkbox\" value=false id=\"nuevoCliente\" name = \"nuevoCliente\">
                            <strong>Nuevo Cliente</strong>
                        </label>
                    </div>

                    <div class=\"col-sm-6 text-right\">
                        <button class=\"btn btn-info link-boton accion\" data-toggle=\"modal\" data-target=\"#search-client\" type=\"button\">
                            <i class=\"glyphicon glyphicon-search icon-white\">Buscar</i>
                        </button>

                    </div>
                    <input type=\"text\" id=\"idCliente\" class=\"form-control hidden\" name=\"idCliente\">
                    <div class=\"col-md-5\">
                        <label class=\"control-label\">Nombre *</label>
                        <input type=\"text\" id=\"nombre\" class=\"form-control\" name=\"nombre\" required=\"required\">
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"control-label\">Celular</label>
                        <input type=\"text\" id=\"celular\" class=\"form-control\" name=\"celular\" >
                    </div>
                    <div class=\"col-md-4\">
                        <label class=\"control-label\">Email </label>
                        <input type=\"email\" id=\"email\" class=\"form-control\" name=\"email\" >
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"control-label\">Tipo Identificaci&oacute;n *</label>
                        <select class=\"form-control\" id=\"tipoIdentificacion\" name=\"tipoIdentificacion\" required=\"required\">
                            <option value=\"04\">RUC</option>
                            <option value=\"05\">CEDULA</option>
                            <option value=\"06\">PASAPORTE</option>
                            <option value=\"07\">CONSUMIDOR FINAL</option>
                            <option value=\"08\">EXTERIOR</option>
                        </select>
                    </div>
                    <div class=\"col-md-3\">
                        <label class=\"control-label\">Identificaci&oacute;n *</label>
                        <input type=\"text\" id=\"identificacion\"  class=\"form-control\" name=\"identificacion\" required=\"required\" > 
                    </div>
                    <div class=\"col-md-6\">
                        <label class=\"control-label\">Direcci&oacute;n</label>
                        <input type=\"text\" id=\"direccion\" class=\"form-control\" name=\"direccion\" >
                    </div>
                </div>
            </fieldset>
            <legend class=\"border\">Productos</legend>
            <div id=\"mensajeAdvertencia\">

            </div>
            <div class=\"col-sm-12 text-right\">

                <button class=\"btn btn-info link-boton accion\" data-toggle=\"modal\" data-target=\"#search-product\" type=\"button\">
                    <i class=\"glyphicon glyphicon-search icon-white\">Buscar</i>
                </button>
            </div>
            <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
                <table class=\"table table-striped table-bordered table-hover\" id=\"productos\">
                    <thead>
                    <thead>
                        <tr>
                            <th >Cantidad *</th>
                            <th>C&oacute;digo</th>
                            <th>Descripci&oacute;n</th>
                            <th>Precio</th>
                            <th>Descuento</th>
                            <th>Total</th>
                            <th>ICE</th>
                            <th>IRBPNR</th>
                            <th>Accion</th>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
            <div class=\"col-sm-6 \">
                <label>
                    <input type=\"checkbox\" value=false id=\"conReembolso\" name = \"conReembolso\" onchange=\"facturaConReembolso(\$(this).is(':checked'))\">
                    <strong>Factura con Reembolso</strong>
                </label>
            </div>
            <fieldset class=\"border col-sm-12\" id=\"contenedor-reembolsos\">
                <legend class=\"border\">REEMBOLSO</legend>
                <div class=\"col-sm-12 text-right\">
                    <button class=\"btn btn-info link-boton accion\" id=\"nuevoReembolso\" type=\"button\">
                        <i class=\"glyphicon glyphicon-plus-sign icon-white\"> Nuevo</i>
                    </button>
                </div>

                <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
                    <table class=\"table table-striped table-bordered table-hover\" id=\"reembolsos\">
                        <thead>
                            <tr>
                                <th>Tipo Proveedor</th>
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
                                <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </fieldset>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-md-8\">
            <div class=\"col-md-12\">
                <label class=\"control-label\">Observaci&oacute;n</label>
                <input type=\"text\" id=\"observacion\"  class=\"form-control\" name=\"observacion\" > 
            </div>
        </div>

        <div class=\"col-xs-12 col-sm-12 col-md-4\">

            <div class=\"col-xs-10 col-sm-8 text-right\">SubTotal Sin Impuesto</div> 
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"\" id=\"subTotalSinImpuesto\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 12%</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"subTotal12\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 0%</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"subTotal0\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total No Objeto IVA</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"subTotaNoObjeto\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">Sub Exento IVA</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"subTotaExento\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">Descuento</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"descuento\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">Valor ICE</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"ice\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">Valor IRBPNR</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"irbpnr\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">IVA 12%</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"iva12\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">Propina</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"propina\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">VALOR TOTAL</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"valorTotal\">0.00</p>
            </div>
        </div>
        <div class=\"col-xs-12 col-sm-12 col-md-4 col-md-offset-8\" style=\"margin-top: 20px\" id=\"subsidio\">
            <div class=\"col-xs-10 col-sm-8 text-right\">VALOR TOTAL SIN SUBSIDIO</div> 
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"\" id=\"totalSinSubsidio\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">AHORRO POR SUBSIDIO</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"ahorroSubsidio\">0.00</p>
            </div>
        </div>    
        <button class=\"hidden\" id =\"submit\" type=\"submit\"></button>
    </form>


";
    }

    // line 339
    public function block_javascript($context, array $blocks = array())
    {
        // line 340
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 342
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>

    <script>
                        \$(\"#contenedor-reembolsos\").hide();
                        var count = 0;
                        \$(\"#subsidio\").hide();
                        var oTable = \$(\"#client-table\").dataTable({
                            responsive: true,
                            bAutoWidth: false,
                            sAjaxSource: \"";
        // line 351
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_client");
        echo "\",
                            bProcessing: true,
                            bServerSide: true,
                            bSort: false,
                            asStripeClasses: [],
                            aLengthMenu: [[5, 10, 15], [5, 10, 15]],
                            aoColumns: [{\"bVisible\": false}, {\"bVisible\": false}, null, null, {\"bVisible\": false}, {\"bVisible\": false}, {\"bVisible\": false}],
                            language: {
                                sProcessing: \"Procesando...\",
                                sLengthMenu: \"Mostrar _MENU_\",
                                sZeroRecords: \"No se encontraron resultados\",
                                sEmptyTable: \"Ningún dato disponible en esta tabla\",
                                sInfo: \"Mostrando del _START_ al _END_ de _TOTAL_ registros\",
                                sInfoEmpty: \"Mostrando del 0 al 0 de un total de 0 registros\",
                                sInfoFiltered: \"(filtrado de un total de _MAX_ registros)\",
                                sInfoPostFix: \"\",
                                sSearch: \"Buscar:\",
                                sUrl: \"\",
                                sInfoThousands: \",\",
                                sLoadingRecords: \"Cargando...\",
                                oPaginate: {
                                    sFirst: \"Primero\",
                                    sLast: \"Último\",
                                    sNext: \"Siguiente\",
                                    sPrevious: \"Anterior\"
                                },
                                oAria: {
                                    sSortAscending: \": Activar para ordenar la columna de manera ascendente\",
                                    sSortDescending: \": Activar para ordenar la columna de manera descendente\"
                                },
                            },
                        });
                        \$('#client-table_filter input').unbind();
                        \$('#client-table_filter input').bind('keyup', function (e) {
                            if (e.keyCode == 13) {
                                oTable.fnFilter(\$(this).val());
                            }
                        });
                        \$('#client-table tbody').on('click', 'tr', function () {
                            var aData = oTable.fnGetData(this); // get datarow
                            if (null != aData)  // null if we clicked on title row
                            {
                                \$(\"#idCliente\").val(aData[0]);
                                \$(\"#tipoIdentificacion\").val(aData[1]);
                                \$(\"#identificacion\").val(aData[2]);
                                \$(\"#nombre\").val(aData[3]);
                                \$(\"#celular\").val(aData[4]);
                                \$(\"#email\").val(aData[5]);
                                \$(\"#direccion\").val(aData[6]);
                                \$('#search-client').modal('toggle');
                                \$('#nuevoCliente').prop('checked', false);
                                \$('#nuevoCliente').val(false);
                            }
                        });
                        \$('#nuevoCliente').click(function () {
                            \$(\"#idCliente\").val(\"\");
                            \$(\"#tipoIdentificacion\").val(\"\");
                            \$(\"#identificacion\").val(\"\");
                            \$(\"#nombre\").val(\"\");
                            \$(\"#celular\").val(\"\");
                            \$(\"#email\").val(\"\");
                            \$(\"#direccion\").val(\"\");
                            \$('#nuevoCliente').prop('checked', true);
                            \$('#nuevoCliente').val(true);
                        });
                        var oTable2 = \$(\"#product-table\").dataTable({
                            responsive: true,
                            bAutoWidth: false,
                            sAjaxSource: \"";
        // line 419
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_product");
        echo "\",
                            bProcessing: true,
                            bServerSide: true,
                            bSort: false,
                            asStripeClasses: [],
                            aLengthMenu: [[5, 10, 15], [5, 10, 15]],
                            aoColumns: [{\"bVisible\": false}, null, null, null, null, {\"bVisible\": false}, {\"bVisible\": false}, {\"bVisible\": false}, {\"bVisible\": false}],
                            language: {
                                sProcessing: \"Procesando...\",
                                sLengthMenu: \"Mostrar _MENU_\",
                                sZeroRecords: \"No se encontraron resultados\",
                                sEmptyTable: \"Ningún dato disponible en esta tabla\",
                                sInfo: \"Mostrando del _START_ al _END_ de _TOTAL_ registros\",
                                sInfoEmpty: \"Mostrando del 0 al 0 de un total de 0 registros\",
                                sInfoFiltered: \"(filtrado de un total de _MAX_ registros)\",
                                sInfoPostFix: \"\",
                                sSearch: \"Buscar:\",
                                sUrl: \"\",
                                sInfoThousands: \",\",
                                sLoadingRecords: \"Cargando...\",
                                oPaginate: {
                                    sFirst: \"Primero\",
                                    sLast: \"Último\",
                                    sNext: \"Siguiente\",
                                    sPrevious: \"Anterior\"
                                },
                                oAria: {
                                    sSortAscending: \": Activar para ordenar la columna de manera ascendente\",
                                    sSortDescending: \": Activar para ordenar la columna de manera descendente\"
                                },
                            },
                        });
                        \$('#product-table_filter input').unbind();
                        \$('#product-table_filter input').bind('keyup', function (e) {
                            if (e.keyCode == 13) {
                                oTable2.fnFilter(\$(this).val());
                            }
                        });
                        \$('#product-table tbody').on('click', 'tr', function (e) {
                            e.preventDefault();
                            var aData = oTable2.fnGetData(this); // get datarow
                            console.log(aData)
                            if (null !== aData && \$(\"#idProducto\" + aData[0]).val() != aData[0])  // null if we clicked on title row
                            {
                                var readOnlyICE = aData[6] ? \"\" : 'disabled=\"disabled\"';
                                var readOnlyIRBPNR = aData[7] ? \"\" : 'disabled=\"disabled\"';
                                \$('#productos > tbody:last').append('<tr class = \"filaProducto\">'
                                        + '<td><input type = \"text\" class= \"hidden datos\" value = \"' + aData + '\">' +
                                        '<input type = \"text\" value = \"1\" size= \"4\" name = \"cantidad[' + aData[0] + ']\" id=\"producto' + aData[0] + '\" onchange = \"calcularaValorTotalXProducto(' + aData[0] + ')\"></td>'
                                        + '<td>' + aData[1] + '<input type = \"text\" class= \"hidden\" value = \"' + aData[1] + '\" id=\"codigoProducto' + aData[0] + '\" name = \"codigoProducto[' + aData[0] + ']\"></td>'
                                        + '<td><input type = \"text\" class= \"hidden\" value = \"' + aData[0] + '\" id=\"idProducto' + aData[0] + '\" name = \"idProducto[' + aData[0] + ']\">'
                                        + '<input type = \"text\" value = \"' + aData[3] + '\" id=\"nombreProducto' + aData[0] + '\" name = \"nombreProducto[' + aData[0] + ']\"></td>'
                                        + '<td><input type = \"text\" value = \"' + aData[4] + '\" size= \"4\" name = \"precio[' + aData[0] + ']\" id=\"precio' + aData[0] + '\" required onchange = \"calcularaValorTotalXProducto(' + aData[0] + ')\"></td>'
                                        + '<td><input type = \"text\" value = \"0\" size= \"4\" name = \"descuento[' + aData[0] + ']\" id=\"descuento' + aData[0] + '\" required onchange = \"calcularaValorTotalXProducto(' + aData[0] + ')\"></td>'
                                        + '<td id =\"total' + aData[0] + '\"></td>'
                                        + '<td><input type = \"text\" value = \"0\" size= \"4\" name = \"ice[' + aData[0] + ']\" id=\"ice' + aData[0] + '\" ' + readOnlyICE + ' onchange = \"calcularaValorTotalXProducto(' + aData[0] + ')\"></td>'
                                        + '<td><input type = \"text\" value = \"0\" size= \"4\" name = \"irbpnr[' + aData[0] + ']\" id=\"irbpnr' + aData[0] + '\" ' + readOnlyIRBPNR + ' onchange = \"calcularaValorTotalXProducto(' + aData[0] + ')\"></td>'
                                        + \"<td> <button class='btn btn-danger link-boton accion'  type='button' onclick = 'eliminarFila(this)'>\"
                                        + \"<i class='glyphicon glyphicon-trash icon-white'></i></button></td></tr>\"
                                        + '</tr>');
                                \$('#productos input').keypress(function (e) {
                                    if (e.which == 13) {
                                        \$(this).blur();
                                    }
                                });
                                calcularaValorTotalXProducto(aData[0]);
                                \$('#search-product').modal('toggle');
                                \$(\"#producto\" + aData[0]).rules(\"add\", {
                                    required: true,
                                    number: true,
                                });
                                \$(\"#precio\" + aData[0]).rules(\"add\", {
                                    required: true,
                                    number: true,
                                });
                                \$(\"#descuento\" + aData[0]).rules(\"add\", {
                                    required: true,
                                    number: true,
                                });
                                \$(\"#ice\" + aData[0]).rules(\"add\", {
                                    required: true,
                                    number: true,
                                });
                                \$(\"#irbpnr\" + aData[0]).rules(\"add\", {
                                    required: true,
                                    number: true,
                                });
                            } else if (null !== aData) {
                                \$(\"#mensajeAdvertencia\").children().first().remove();
                                var msg = \"<div class='col-sm-12 alert alert-warning alert-dismissable' id='alert-warning'>\" +
                                        \"<button type='button' class='close' data-dismiss='alert'>&times;</button>\" +
                                        \"<p>El producto <strong>\" + aData[3] + \"</strong> ya se encuentra en la factura. Aumente la cantidad si lo necesita.</p></div>\";
                                \$(\"#mensajeAdvertencia\").append(msg);
                                \$('#search-product').modal('toggle');
                                \$(\"#alert-warning\").fadeOut(6000);
                            }
                        });
                        \$(\"form\").keypress(function (e) {
                            if (e.which == 13) {
                                return false;
                            }
                        });
                        \$(\"#formFactura\").validate({
                            errorClass: \"my-error-class\",
                            validClass: \"my-valid-class\",
                            rules: {
                                nombre: {
                                    required: true,
                                },
                                email: {
                                    email: true,
                                },
                                tipoIdentificacion: {
                                    required: true,
                                },
                                identificacion: {
                                    required: true,
                                },
                                plazo: {
                                    number: true,
                                },
                            }

                        });
                        \$(\"#id\").val(\"\");
                        \$(\"#tipoIdentificacion\").val(\"\");
                        \$(\"#identificacion\").val(\"\");
                        \$(\"#nombre\").val(\"\");
                        \$(\"#celular\").val(\"\");
                        \$(\"#email\").val(\"\");
                        \$(\"#direccion\").val(\"\");
                        \$('#nuevoCliente').prop('checked', true);
                        \$('#nuevoCliente').val(true);
                        function calcularaValorTotalXProducto(id) {
                            var cantidad = parseFloat(\$(\"#producto\" + id).val());
                            var precioUnitario = parseFloat(\$(\"#precio\" + id).val());
                            var descuento = parseFloat(\$(\"#descuento\" + id).val());
                            var total = parseFloat(cantidad * precioUnitario - descuento);
                            \$(\"#total\" + id).text(total.toFixed(2));
                            calcularResumenValores();
                        }
                        function eliminarFila(e) {
                            \$(e).parent().parent().remove();
                            calcularResumenValores();
                        }
                        function calcularResumenValores() {
                            var subTotalSinImpuesto = 0;
                            var subTotal12 = 0;
                            var subTotal0 = 0;
                            var subTotaNoObjeto = 0;
                            var subTotaExento = 0;

                            var descuento = 0;
                            var ice = 0;
                            var irbpnr = 0;
                            var iva12 = 0;
                            var propina = 0;
                            var valorTotal = 0;
                            var valorTotalSubsidio = 0;

                            \$(\"tr.filaProducto\").each(function (index, element) {
                                var datos = (\$(element).find(\".datos\").val()).split(\",\");
                                var id = datos[0];
                                var codigoImpuesto = datos[5];
                                subTotalSinImpuesto += parseFloat(\$(\"#total\" + id).text());
                                descuento += parseFloat(\$(\"#descuento\" + id).val());
                                var cantidad = parseFloat(\$(\"#producto\" + id).val());
                                var precioUnitario = parseFloat(\$(\"#precio\" + id).val());
                                var subsidio = 0;
                                if (datos[9] === 'true' || datos[9] === '1') {
                                    subsidio = (parseFloat(datos[10]) - precioUnitario) * cantidad;
                                }
                                if (codigoImpuesto == '0') {
                                    subTotal0 += parseFloat(\$(\"#total\" + id).text());
                                } else if (codigoImpuesto == '6') {
                                    subTotaNoObjeto += parseFloat(\$(\"#total\" + id).text());
                                } else if (codigoImpuesto == '7') {
                                    subTotaExento += parseFloat(\$(\"#total\" + id).text());
                                } else {
                                    subTotal12 += parseFloat(\$(\"#total\" + id).text());
                                    iva12 = subTotal12 * datos[8] / 100;
                                    if (subsidio > 0) {
                                        subsidio = (subsidio * datos[8] / 100) + subsidio;
                                    }
                                }

                                ice += parseFloat(\$(\"#ice\" + id).val());
                                irbpnr += parseFloat(\$(\"#irbpnr\" + id).val());
                                valorTotalSubsidio += parseFloat(subsidio);

                            });


                            \$(\"#subTotalSinImpuesto\").text(subTotalSinImpuesto.toFixed(2));
                            \$(\"#subTotal12\").text(subTotal12.toFixed(2));
                            \$(\"#subTotal0\").text(subTotal0.toFixed(2));
                            \$(\"#subTotaNoObjeto\").text(subTotaNoObjeto.toFixed(2));
                            \$(\"#subTotaExento\").text(subTotaExento.toFixed(2));
                            \$(\"#descuento\").text(descuento.toFixed(2));
                            \$(\"#ice\").text(ice.toFixed(2));
                            \$(\"#irbpnr\").text(irbpnr.toFixed(2));
                            \$(\"#iva12\").text(iva12.toFixed(2));
                            \$(\"#propina\").text(propina.toFixed(2));
                            valorTotal = subTotalSinImpuesto + iva12 + ice + irbpnr;
                            if (parseFloat(valorTotalSubsidio.toFixed(2)) > 0) {
                                var valorTotalSinSubsidio = valorTotal + parseFloat(valorTotalSubsidio.toFixed(2));

                                \$(\"#totalSinSubsidio\").text(valorTotalSinSubsidio.toFixed(2));
                                \$(\"#ahorroSubsidio\").text(valorTotalSubsidio.toFixed(2));
                                \$(\"#subsidio\").show();
                            } else {
                                \$(\"#totalSinSubsidio\").text(\"0.00\");
                                \$(\"#ahorroSubsidio\").text(\"0.00\");
                                \$(\"#subsidio\").hide();
                            }
                            \$(\"#valorTotal\").text(valorTotal.toFixed(2));
                        }

                        \$(\"#nuevoReembolso\").click(function () {
                            count = count + 1;
                            \$('#reembolsos > tbody:last').append(
                                    \"<tr><td><select class='form-control' id='tipoProveedorReembolso\" + count + \"' name='tipoProveedorReembolso[\" + count + \"]' required='required'><option value='01'>PERSONA NATURAL</option><option value='02'>SOCIEDAD</option></select>\"
                                    + \"<td><input size=10 type = 'text' name = 'identificacionReembolso[\" + count + \"]' class = 'valor' id = 'identificacionReembolso\" + count + \"' required='required'/></td>\"
                                    + \"<td><input size=3 type = 'text' name = 'estbleciemientoReembolso[\" + count + \"]' class = 'valor' id = 'estbleciemientoReembolso\" + count + \"' required='required'/></td>\"
                                    + \"<td><input size=3 type = 'text' name = 'ptoEmisionReembolso[\" + count + \"]' class = 'valor' id = 'ptoEmisionReembolso\" + count + \"' required='required'/></td>\"
                                    + \"<td><input size=6 type = 'text' name = 'secuencialReembolso[\" + count + \"]' class = 'valor' id = 'secuencialReembolso\" + count + \"' required='required'/></td>\"
                                    + \"<td><input size=8 type = 'text' name = 'fechaReembolso[\" + count + \"]' class = 'valor' id = 'fechaReembolso\" + count + \"' required='required'/></td>\"
                                    + \"<td><input size=50 type = 'text' name = 'autorizacionReembolso[\" + count + \"]' class = 'valor' id = 'autorizacionReembolso\" + count + \"' required='required'/></td>\"
                                    + \"<td><input value = '0' size=6 type = 'text' name = 'baseImponibleSinIvaReembolso[\" + count + \"]' class = 'valor' id = 'baseImponibleSinIvaReembolso\" + count + \"' required='required' onchange = 'calcularReembolso(\" + count + \")'/></td>\"
                                    + \"<td><input value = '0' size=6 type = 'text' name = 'baseImponibleReembolso[\" + count + \"]' class = 'valor' id = 'baseImponibleReembolso\" + count + \"' required='required' onchange = 'calcularReembolso(\" + count + \")'/></td>\"
                                    + \"<td id ='ivaReembolso\" + count + \"' >0.00</td>\"
                                    + \"<td id ='totalReembolso\" + count + \"'></td>\"
                                    + \"<td> <button class='btn btn-danger link-boton accion'  type='button' onclick = 'eliminarFila(this)'>\"
                                    + \"<i class='glyphicon glyphicon-trash icon-white'></i></button></td>\"
                                    + \"</tr>\");
                            \$('#baseImponibleReembolso' + count).rules(\"add\", {
                                number: true
                            });
                            \$('#baseImponibleSinIvaReembolso' + count).rules(\"add\", {
                                number: true
                            });
                        });

                        function calcularReembolso(pos) {
                            var baseImponible = parseFloat(\$(\"#baseImponibleReembolso\" + pos).val());
                            var baseImponibleSinIva = parseFloat(\$(\"#baseImponibleSinIvaReembolso\" + pos).val());
                            if (!baseImponibleSinIva)
                                baseImponibleSinIva = 0.00;
                            if(!baseImponible)
                                baseImponible = 0.00;
                            var iva = 0.00;
                            var total = 0.00;
                            if (baseImponible > 0) {
                                iva = baseImponible * 0.12;
                                total = baseImponible + iva + baseImponibleSinIva;
                            } else {
                                total = baseImponibleSinIva;
                            }
                            \$(\"#ivaReembolso\" + pos).text(iva.toFixed(2));
                            \$(\"#totalReembolso\" + pos).text(total.toFixed(2));
                        }

                        function facturaConReembolso(value) {
                            if (value === true)
                                \$(\"#contenedor-reembolsos\").show();
                            else
                                \$(\"#contenedor-reembolsos\").hide();
                        }

    </script>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Factura:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  553 => 419,  482 => 351,  470 => 342,  466 => 341,  461 => 340,  458 => 339,  262 => 146,  257 => 145,  255 => 144,  222 => 118,  214 => 117,  204 => 110,  200 => 109,  196 => 108,  192 => 107,  184 => 106,  180 => 105,  176 => 104,  171 => 101,  162 => 98,  157 => 95,  153 => 94,  148 => 92,  82 => 28,  79 => 27,  69 => 21,  51 => 10,  48 => 9,  45 => 8,  41 => 2,  35 => 6,  31 => 5,  29 => 4,  27 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Factura:new.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Factura/new.html.twig");
    }
}
