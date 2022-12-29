<?php

/* FactelBundle:Retencion:new.html.twig */
class __TwigTemplate_0fa424f91d330dce5fcf7f2bf0d136361926388e6ef3a20d089761635cd009f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Retencion:new.html.twig", 1);
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
        // line 2
        $context["secuencial"] = $this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "secuencialRetencion", array());
        // line 3
        $context["cant"] = (9 - twig_length_filter($this->env, ($context["secuencial"] ?? null)));
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, (($context["cant"] ?? null) - 1)));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            $context["secuencial"] = (0 . ($context["secuencial"] ?? null));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_panel_title($context, array $blocks = array())
    {
        // line 8
        echo "
    <i class=\"fa fa-bar-chart-o fa-fw\"></i>Nueva Retenci&oacute;n <strong>Nro: ";
        // line 9
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
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("retencion");
        echo "\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
            </ul>
        </div>

    </div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "    <div class=\"modal fade\" id=\"search-client\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Seleccione el Sujeto Retenido</h4>
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
    <div class=\"modal fade\" id=\"search-compra\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    <h4 class=\"modal-title\" id=\"myModalLabel\">Seleccione una compra para la retenci&oacute;n</h4>
                </div>

                <div class=\"modal-body\">
                    <div class=\"dataTable_wrapper table-responsive\">  
                        <table class=\"table table-bordered table-hover \" id=\"compra-table\">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>No.</th>
                                    <th>Proveedor</th>
                                    <th>RUC Proveedor</th>
                                    <th>Fecha Emisión</th>
                                    <th>SubTotal 12%</th>
                                    <th>SubTotal 0%</th>
                                    <th>IVA</th>
                                    <th>ICE</th>
                                    <th>Total</th>
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
    ";
        // line 92
        echo twig_include($this->env, $context, "FactelBundle:Retencion:codigoRetencion.html.twig");
        echo "

    <form method=\"POST\" action=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("retencion_create");
        echo "\" id=\"formNotaCredito\">
        <div class=\"container-fluid factura\">
            ";
        // line 96
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 97
            echo "                <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <h4><strong>Ha ocurrido un error al crear la factura!</strong></h4>
                    <p>";
            // line 100
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "            <fieldset class=\"border col-sm-12\">
                <legend class=\"border\">Emisor</legend>
                <div class=\"control-group\" id=\"emisor\">
                    <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Ruc:</strong> ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ruc", array()), "html", null, true);
        echo "</p></div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Raz&oacute;n Social:</strong> ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "razonSocial", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Nombre Comercial:</strong> ";
        // line 108
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "nombreComercial", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "nombreComercial", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "nombreComercial", array()), "html", null, true);
        }
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Contribuyente Especial:</strong> ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "contribuyenteEspecial", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Obligado Contabilidad:</strong> ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "obligadoContabilidad", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Matriz:</strong> ";
        // line 111
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "direccionMatriz", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Establecimiento:</strong> ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "direccion", array()), "html", null, true);
        echo "</div>
                </div>
            </fieldset>

            <fieldset class=\"border  col-sm-12 \">
                <legend class=\"border\">Comprobante</legend>
                <div class=\"control-group\" id=\"comprobante\">
                    <div class=\"col-sm-6 col-lg-3\"><strong>Ambiente:</strong> ";
        // line 119
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ambiente", array()) == 1)) {
            echo " Pruebas ";
        } else {
            echo " Producci&oacute;n ";
        }
        echo "</div>
                    <div class=\"col-lg-4\"><strong>Tipo Emisi&oacute;n:</strong> ";
        // line 120
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "tipoEmision", array()) == 1)) {
            echo " Emisi&oacute;n Normal ";
        } else {
            echo " Emisi&oacute;n por Indisponibilidad del Sistema ";
        }
        echo "</div>
                    <div class=\"col-sm-12 col-lg-5\"><strong>Fecha Emisi&oacute;n: *</strong> <input type=\"text\" id=\"fecha\" size=\"8\" name=\"fechaEmision\" required=\"required\" onchange=\"CrearClaveAcceso()\"/> </div>
                    <div class=\"col-sm-12 col-lg-5\"><strong>Periodo Fiscal (mm/yyyy): *</strong> <input type=\"text\" id=\"periodoFiscal\" size=\"8\" name=\"periodoFiscal\" required=\"required\"/> </div>
                    <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Clave Acceso</strong></p></div>
                    <div class=\"col-sm-12 claveAcceso\"><p class=\"text-center\" id=\"claveAcceso\"></p></div>
                </div>
            </fieldset>
            ";
        // line 127
        $context["datos"] = (((((((((((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ruc", array()) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ambiente", array())) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "tipoEmision", array())) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "codigo", array())) . ",") . $this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "codigo", array())) . ",") . ($context["secuencial"] ?? null)) . ",") . "07");
        // line 128
        echo "            <input id=\"datos\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, ($context["datos"] ?? null), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"secuencial\" value=\"";
        // line 129
        echo twig_escape_filter($this->env, ($context["secuencial"] ?? null), "html", null, true);
        echo "\" />
            <div class=\"col-sm-12 text-center\">
                <button class=\"btn btn-info link-boton accion\" data-toggle=\"modal\" data-target=\"#search-compra\" type=\"button\">
                    Desde Compra
                </button>

            </div>
            <fieldset class=\"border col-sm-12\">

                <legend class=\"border\">Sujeto Retenido</legend>

                <div class=\"form-group\">
                    <div class=\"checkbox col-sm-6 \">
                        <label>
                            <input type=\"checkbox\" value=false id=\"nuevoCliente\" name = \"nuevoCliente\">
                            <strong>Nuevo Sujeto Retenido</strong>
                        </label>
                    </div>

                    <div class=\"col-sm-6 text-right\">
                        <button class=\"btn btn-info link-boton accion\" data-toggle=\"modal\" data-target=\"#search-client\" type=\"button\">
                            <i class=\"glyphicon glyphicon-search icon-white\">Buscar</i>
                        </button>

                    </div>
                    <input type=\"text\" id=\"idFacturaCompra\" class=\"form-control hidden\" name=\"idFacturaCompra\">
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
                        <input type=\"email\" id=\"email\" class=\"form-control\" name=\"email\" />
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
            <div class=\"col-sm-12 alert alert-success\">
                Si desea informacion sobre los codigos de retenciones a usar, descargar  <a href=\"";
        // line 189
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("retencion_help");
        echo "\">Ayuda Codigos Retenciones</a> 
            </div>

            <legend class=\"border\">Detalle Comprobante Retenci&oacute;n</legend>
            <div class=\"col-sm-12 text-right\">
                <button class=\"btn btn-info link-boton accion\" id=\"nuevoDetalle\" type=\"button\">
                    <i class=\"glyphicon glyphicon-plus-sign icon-white\"> Nuevo</i>
                </button>
            </div>

            <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
                <table class=\"table table-striped table-bordered table-hover\" id=\"detalles\">
                    <thead>
                    <thead>
                        <tr>
                            <th>Tipo</th>
                            <th>Cod. Reten</th>
                            <th>%</th>
                            <th>Base Imp.</th>
                            <th>Total</th>
                            <th>Documento No.</th>
                            <th>Tipo Doc</th>
                            <th>Fecha Doc</th>
                            <th>Accion</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div> 

            <button id=\"submit\" class=\"hidden\" type=\"submit\">  
            </button>
    </form>


";
    }

    // line 228
    public function block_javascript($context, array $blocks = array())
    {
        // line 229
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>

    <script>
                        var filaCodigoRetencion = null;
                        var oTableCodigo = \$(\"#codigo-retencion-table\").dataTable({
                            responsive: true,
                            bAutoWidth: false,
                            bSort: false,
                            asStripeClasses: [],
                            aLengthMenu: [[8, 20, 30], [8, 20, 30]],
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

                        \$('#codigo-retencion-table tbody').on('click', 'tr', function () {
                            \$(\"#codRetencion\" + filaCodigoRetencion).val(\$(this).find(\".codigo\").html());
                            \$(\"#porcentaje\" + filaCodigoRetencion).val(parseFloat(\$(this).find(\".porcentaje\").html()));

                            \$('#codigo-retencion').modal('toggle');
                            calcularaValorTotal(filaCodigoRetencion);

                        });

                        var oTableCompra = \$(\"#compra-table\").dataTable({
                            responsive: true,
                            bAutoWidth: false,
                            sAjaxSource: \"";
        // line 279
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_compra");
        echo "\",
                            bProcessing: true,
                            bServerSide: true,
                            bSort: false,
                            asStripeClasses: [],
                            aLengthMenu: [[5, 10, 15], [5, 10, 15]],
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



                        \$('#compra-table_filter input').unbind();
                        \$('#compra-table_filter input').bind('keyup', function (e) {
                            if (e.keyCode == 13) {
                                oTableCompra.fnFilter(\$(this).val());
                            }
                        });
                        \$('#compra-table tbody').on('click', 'tr', function () {
                            var aData = oTableCompra.fnGetData(this); // get datarow
                            eliminarTodasFilas();
                            if (aData[11] != null) {
                                \$(\"#idFacturaCompra\").val(null);
                                alert(\"La factura de compra ya fue usada en una retencion\");

                                return;
                            }
                            \$(\"#idFacturaCompra\").val(aData[0]);
                            agregarFila();
                            \$(\"#tipoImpuesto\" + count).val(\"2\");
                            \$(\"#baseImponible\" + count).val(aData[7]);
                            \$(\"#documento\" + count).val(aData[1].replace(\"-\", \"\").replace(\"-\", \"\"));
                            \$(\"#fecha\" + count).val(aData[4]);
                            agregarFila();
                            \$(\"#tipoImpuesto\" + count).val(\"1\");
                            \$(\"#baseImponible\" + count).val(aData[5]);
                            \$(\"#documento\" + count).val(aData[1].replace(\"-\", \"\").replace(\"-\", \"\"));
                            \$(\"#fecha\" + count).val(aData[4]);

                            borrarDatosCliente();
                            \$(\"#tipoIdentificacion\").val(\"04\");
                            \$(\"#identificacion\").val(aData[3]);
                            \$(\"#nombre\").val(aData[2]);
                            \$(\"#direccion\").val(aData[10]);


                            \$('#search-compra').modal('toggle');

                        });

                        var count = 0;
                        var oTable = \$(\"#client-table\").dataTable({
                            responsive: true,
                            bAutoWidth: false,
                            sAjaxSource: \"";
        // line 355
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
                            borrarDatosCliente();
                        });

                        \$(\"form\").keypress(function (e) {
                            if (e.which == 13) {
                                return false;
                            }
                        });
                        \$(\"#formNotaCredito\").validate({
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
                            }

                        });

                        function borrarDatosCliente() {
                            \$(\"#idCliente\").val(\"\");
                            \$(\"#tipoIdentificacion\").val(\"\");
                            \$(\"#identificacion\").val(\"\");
                            \$(\"#nombre\").val(\"\");
                            \$(\"#celular\").val(\"\");
                            \$(\"#email\").val(\"\");
                            \$(\"#direccion\").val(\"\");
                            \$('#nuevoCliente').prop('checked', true);
                            \$('#nuevoCliente').val(true);
                        }

                        borrarDatosCliente();

                        \$(\"#nuevoDetalle\").click(function () {
                            agregarFila();
                        });

                        function agregarFila() {

                            count = count + 1;
                            \$('#detalles > tbody:last').append(\"<tr><td><select name = 'tipoImpuesto[\" + count + \"]' id='tipoImpuesto\" + count + \"'><option value = '1'> Renta</option><option value = '2'> IVA</option><option value = '6'> ISD</option></select></td>\"
                                    + \"<td><input size = '8' type = 'text' readonly name = 'codRetencion[\" + count + \"]' class = 'valor' id = 'codRetencion\" + count + \"' required='required'/><button type='button' data-toggle='modal' data-target='#codigo-retencion' onclick = 'seleccionarFilaCodigoRetencion(\" + count + \")'><i class='glyphicon glyphicon-search icon-white'></i></button></td>\"
                                    + \"<td><input size = '4' type = 'text' readonly name = 'porcentaje[\" + count + \"]' class = 'valor' id = 'porcentaje\" + count + \"' onchange = 'calcularaValorTotal(\" + count + \")' required='required'/></td>\"
                                    + \"<td><input size = '6' type = 'text' name = 'baseImponible[\" + count + \"]' class = 'valor' id = 'baseImponible\" + count + \"' onchange = 'calcularaValorTotal(\" + count + \")' required='required'/></td>\"
                                    + \"<td><input size = '6' type = 'text' readonly name = 'total[\" + count + \"]' class = 'valor' id = 'total\" + count + \"'  required='required'/></td>\"
                                    + \"<td><input type = 'text' name = 'documento[\" + count + \"]' class = 'valor' id = 'documento\" + count + \"' required='required'/></td>\"
                                    + \"<td><select name = 'tipoDoc[\" + count + \"]'><option value = '01'> Factura</option><option value = '05'> Nota Debito</option><option value = '03'> Liq. Compra</option></select></td>\"
                                    + \"<td><input size = '8' type = 'text' name = 'fecha[\" + count + \"]' class = 'valor' id = 'fecha\" + count + \"' required='required'/></td>\"
                                    + \"<td> <button class='btn btn-danger link-boton accion'  type='button' onclick = 'eliminarFila(this)'>\"
                                    + \"<i class='glyphicon glyphicon-trash icon-white'></i></button></td></tr>\");

                            \$('#fecha' + count).datepicker({
                                showButtonPanel: true,
                                dateFormat: \"dd/mm/yy\",
                                beforeShow: function () {
                                    \$(\".ui-datepicker\").css('font-size', 12)
                                }
                            }).datepicker('setDate', 'today');


                            \$('#baseImponible' + count).rules(\"add\", {
                                required: true,
                                number: true,
                            });
                            \$('#total' + count).rules(\"add\", {
                                required: true,
                                number: true,
                            });
                            \$('#documento' + count).rules(\"add\", {
                                required: true,
                                digits: true,
                            });
                            \$('#fecha' + count).rules(\"add\", {
                                required: true,
                            });


                        }
                        function eliminarTodasFilas() {
                            \$('#detalles > tbody').children().remove();
                        }

                        function eliminarFila(e) {
                            \$(e).parent().parent().remove();
                        }

                        function calcularaValorTotal(id) {
                            var baseImponible = parseFloat(\$(\"#baseImponible\" + id).val());
                            var porcentaje = parseFloat(\$(\"#porcentaje\" + id).val());
                            if (!isNaN(baseImponible) && !isNaN(porcentaje)) {
                                var total = parseFloat(baseImponible * porcentaje / 100);
                                \$(\"#total\" + id).val(total.toFixed(2));
                            }


                        }

                        function seleccionarFilaCodigoRetencion(count) {
                            filaCodigoRetencion = count;
                        }
    </script>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Retencion:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  496 => 355,  417 => 279,  366 => 231,  362 => 230,  357 => 229,  354 => 228,  312 => 189,  249 => 129,  244 => 128,  242 => 127,  228 => 120,  220 => 119,  210 => 112,  206 => 111,  202 => 110,  198 => 109,  190 => 108,  186 => 107,  182 => 106,  177 => 103,  168 => 100,  163 => 97,  159 => 96,  154 => 94,  149 => 92,  82 => 27,  79 => 26,  69 => 20,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  35 => 5,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Retencion:new.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Retencion/new.html.twig");
    }
}
