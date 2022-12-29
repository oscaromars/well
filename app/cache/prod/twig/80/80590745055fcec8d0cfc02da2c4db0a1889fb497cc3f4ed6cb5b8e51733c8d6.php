<?php

/* FactelBundle:Proforma:new.html.twig */
class __TwigTemplate_cf25d9021f75f88f9f46279f18c56feba5c7f1adf44a11db5a1bb1c7de00d4bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Proforma:new.html.twig", 2);
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
        $context["numero"] = ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "secuencialProforma", array()) == 0)) ? (1) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "secuencialProforma", array())));
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_panel_title($context, array $blocks = array())
    {
        // line 5
        echo "
    <i class=\"fa fa-bar-chart-o fa-fw\"></i>Nueva Proforma <strong>Nro: ";
        // line 6
        echo twig_escape_filter($this->env, ($context["numero"] ?? null), "html", null, true);
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
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma");
        echo "\"><i class=\"fa fa-undo\"></i> Cancelar</a></li>
            </ul>
        </div>

    </div>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
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
        // line 88
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma_create");
        echo "\" id=\"formFactura\">
        <div class=\"container-fluid factura\">
            ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 91
            echo "                <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                    <h4><strong>Ha ocurrido un error al crear la factura!</strong></h4>
                    <p>";
            // line 94
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "            <fieldset class=\"border col-sm-12\">
                <legend class=\"border\">Emisor</legend>
                <div class=\"control-group\" id=\"emisor\">
                    <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Ruc:</strong> ";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ruc", array()), "html", null, true);
        echo "</p></div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Raz&oacute;n Social:</strong> ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "razonSocial", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Nombre Comercial:</strong> ";
        // line 102
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "nombreComercial", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "nombreComercial", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "nombreComercial", array()), "html", null, true);
        }
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Contribuyente Especial:</strong> ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "contribuyenteEspecial", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Obligado Contabilidad:</strong> ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "obligadoContabilidad", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Matriz:</strong> ";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "direccionMatriz", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Establecimiento:</strong> ";
        // line 106
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "direccion", array()), "html", null, true);
        echo "</div>
                    <div class=\"col-sm-12 col-lg-5\"><strong>Fecha Emisi&oacute;n: *</strong> <input type=\"text\" id=\"fecha\" size=\"8\" name=\"fechaEmision\" required=\"required\"/> </div>
                </div>
            </fieldset>

            ";
        // line 111
        $context["datos"] = (((((((((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ruc", array()) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ambiente", array())) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "tipoEmision", array())) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "codigo", array())) . ",") . $this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "codigo", array())) . ",") . "01");
        // line 112
        echo "            <input id=\"datos\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, ($context["numero"] ?? null), "html", null, true);
        echo "\" />
            <input type=\"hidden\" name=\"numero\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, ($context["numero"] ?? null), "html", null, true);
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

                            <th>Accion</th>

                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>          
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
            <div class=\"col-xs-10 col-sm-8 text-right\">Descuento</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"descuento\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">Valor ICE</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"ice\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">IVA 12%</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"iva12\">0.00</p>
            </div>
            <div class=\"col-xs-10 col-sm-8 text-right\">VALOR TOTAL</div>
            <div class=\"col-xs-2 col-sm-4\">
                <p class=\"text-left\" id=\"valorTotal\">0.00</p>
            </div>
        </div>    
        <button class=\"hidden\" id =\"submit\" type=\"submit\"></button>
    </form>


";
    }

    // line 241
    public function block_javascript($context, array $blocks = array())
    {
        // line 242
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 243
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 244
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>

    <script>

                    var count = 0;
                    var oTable = \$(\"#client-table\").dataTable({
                        responsive: true,
                        bAutoWidth: false,
                        sAjaxSource: \"";
        // line 252
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
        // line 320
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
                            \$('#productos > tbody:last').append('<tr class = \"filaProducto\">'
                                    + '<td><input type = \"text\" class= \"hidden datos\" value = \"' + aData + '\">' +
                                    '<input type = \"text\" value = \"1\" size= \"4\" name = \"cantidad[' + aData[0] + ']\" id=\"producto' + aData[0] + '\" onchange = \"calcularaValorTotalXProducto(' + aData[0] + ')\"></td>'
                                    + '<td>' + aData[1] + '<input type = \"text\" class= \"hidden\" value = \"' + aData[1] + '\" id=\"codigoProducto' + aData[0] + '\" name = \"codigoProducto[' + aData[0] + ']\"></td>'
                                    + '<td><input type = \"text\" class= \"hidden\" value = \"' + aData[0] + '\" id=\"idProducto' + aData[0] + '\" name = \"idProducto[' + aData[0] + ']\">'
                                    + '<input type = \"text\" value = \"' + aData[3] + '\" id=\"nombreProducto' + aData[0] + '\" name = \"nombreProducto[' + aData[0] + ']\"></td>'
                                    + '<td><input type = \"text\" value = \"' + aData[4] + '\" size= \"4\" name = \"precio[' + aData[0] + ']\" id=\"precio' + aData[0] + '\" required onchange = \"calcularaValorTotalXProducto(' + aData[0] + ')\"></td>'
                                    + '<td><input type = \"text\" value = \"0\" size= \"4\" name = \"descuento[' + aData[0] + ']\" id=\"descuento' + aData[0] + '\" required onchange = \"calcularaValorTotalXProducto(' + aData[0] + ')\"></td>'
                                    + '<td id =\"total' + aData[0] + '\"></td>'
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
                        var descuento = 0;
                        var iva12 = 0;
                        var valorTotal = 0;

                        \$(\"tr.filaProducto\").each(function (index, element) {
                            var datos = (\$(element).find(\".datos\").val()).split(\",\");
                            var id = datos[0];
                            var codigoImpuesto = datos[5];
                            subTotalSinImpuesto += parseFloat(\$(\"#total\" + id).text());
                            descuento += parseFloat(\$(\"#descuento\" + id).val());

                            if (codigoImpuesto === '0' || codigoImpuesto === '6' || codigoImpuesto === '7') {
                                subTotal0 += parseFloat(\$(\"#total\" + id).text());
                            } else {
                                subTotal12 += parseFloat(\$(\"#total\" + id).text());
                                iva12 = subTotal12 * datos[8] / 100;

                            }

                        });


                        \$(\"#subTotalSinImpuesto\").text(subTotalSinImpuesto.toFixed(2));
                        \$(\"#subTotal12\").text(subTotal12.toFixed(2));
                        \$(\"#subTotal0\").text(subTotal0.toFixed(2));
                        \$(\"#descuento\").text(descuento.toFixed(2));
                        \$(\"#iva12\").text(iva12.toFixed(2));
                        valorTotal = subTotalSinImpuesto + iva12;
                        \$(\"#valorTotal\").text(valorTotal.toFixed(2));
                    }

    </script>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Proforma:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 320,  357 => 252,  346 => 244,  342 => 243,  337 => 242,  334 => 241,  203 => 113,  198 => 112,  196 => 111,  188 => 106,  184 => 105,  180 => 104,  176 => 103,  168 => 102,  164 => 101,  160 => 100,  155 => 97,  146 => 94,  141 => 91,  137 => 90,  132 => 88,  66 => 24,  63 => 23,  53 => 17,  39 => 6,  36 => 5,  33 => 4,  29 => 2,  27 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Proforma:new.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Proforma/new.html.twig");
    }
}
