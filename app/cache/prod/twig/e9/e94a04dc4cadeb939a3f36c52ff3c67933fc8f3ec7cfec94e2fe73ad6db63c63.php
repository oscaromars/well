<?php

/* FactelBundle:NotaDebito:new.html.twig */
class __TwigTemplate_3b36d18597c3a8b96afcb0bce37a3f7ec483f287715c14790accd2159a96f636 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:NotaDebito:new.html.twig", 1);
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
        $context["secuencial"] = $this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "secuencialNotaDebito", array());
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
<i class=\"fa fa-bar-chart-o fa-fw\"></i>Nueva Nota D&eacute;bito <strong>Nro: ";
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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notadebito");
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
        echo "<div class=\"modal fade\" id=\"search-client\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
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

<form method=\"POST\" action=\"";
        // line 59
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notadebito_create");
        echo "\" id=\"formNotaDebito\">
    <div class=\"container-fluid factura\">
        ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 62
            echo "        <div class=\"col-sm-12 alert alert-danger alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <h4><strong>Ha ocurrido un error al crear la Nota de Debito!</strong></h4>
            <p>";
            // line 65
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
        </div>
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        <fieldset class=\"border col-sm-12\">
            <legend class=\"border\">Emisor</legend>
            <div class=\"control-group\" id=\"emisor\">
                <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Ruc:</strong> ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ruc", array()), "html", null, true);
        echo "</p></div>
                <div class=\"col-sm-12 col-md-6\"><strong>Raz&oacute;n Social:</strong> ";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "razonSocial", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Nombre Comercial:</strong> ";
        // line 73
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "nombreComercial", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "nombreComercial", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "nombreComercial", array()), "html", null, true);
        }
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Contribuyente Especial:</strong> ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "contribuyenteEspecial", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Obligado Contabilidad:</strong> ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "obligadoContabilidad", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Matriz:</strong> ";
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "direccionMatriz", array()), "html", null, true);
        echo "</div>
                <div class=\"col-sm-12 col-md-6\"><strong>Direcci&oacute;n Establecimiento:</strong> ";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "direccion", array()), "html", null, true);
        echo "</div>
            </div>
        </fieldset>

        <fieldset class=\"border  col-sm-12 \">
            <legend class=\"border\">Comprobante</legend>
            <div class=\"control-group\" id=\"comprobante\">
                <div class=\"col-sm-6 col-lg-3\"><strong>Ambiente:</strong> ";
        // line 84
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ambiente", array()) == 1)) {
            echo " Pruebas ";
        } else {
            echo " Producci&oacute;n ";
        }
        echo "</div>
                <div class=\"col-lg-4\"><strong>Tipo Emisi&oacute;n:</strong> ";
        // line 85
        if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "tipoEmision", array()) == 1)) {
            echo " Emisi&oacute;n Normal ";
        } else {
            echo " Emisi&oacute;n por Indisponibilidad del Sistema ";
        }
        echo "</div>
                <div class=\"col-sm-12 col-lg-5\"><strong>Fecha Emisi&oacute;n: *</strong> <input type=\"text\" id=\"fecha\" size=\"8\" name=\"fechaEmision\" required=\"required\" onchange=\"CrearClaveAcceso()\"/> </div>
                <div class=\"col-sm-12\"><p class=\"text-center\"><strong>Clave Acceso</strong></p></div>
                <div class=\"col-sm-12 claveAcceso\"><p class=\"text-center\" id=\"claveAcceso\"></p></div>
            </div>
        </fieldset>
        <fieldset class=\"border  col-sm-12 \">
            <legend class=\"border\">Comprobante Modificado</legend>
            <div class=\"form-group\">
                <div class=\"col-md-4\">
                    <label class=\"control-label\">Tipo Documento: *</label>
                    <select class=\"form-control\"  name=\"tipoDocumento\" required=\"required\">
                        <option value=\"01\">Factura</option>
                    </select>
                </div>
                <div class=\"col-md-3\">
                    <label class=\"control-label\">Fecha Emisi&oacute;n: *</label>
                    <input type=\"text\" id=\"fechaDocModificado\" class=\"form-control\" size=\"8\" name=\"fechaDocModificado\" required=\"required\" />
                </div>
                <div class=\"col-md-5\">
                    <label class=\"control-label\">Nro Comprobante: *</label>
                    <input type=\"text\" id=\"numeroDocMod\" class=\"form-control\" name=\"numeroDocMod\" required=\"required\">
                </div>

            </div>
        </fieldset>
";
        // line 111
        $context["datos"] = (((((((((((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ruc", array()) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "ambiente", array())) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "emisor", array()), "tipoEmision", array())) . ",") . $this->getAttribute($this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "establecimiento", array()), "codigo", array())) . ",") . $this->getAttribute($this->getAttribute(($context["pto"] ?? null), 0, array(), "array"), "codigo", array())) . ",") . ($context["secuencial"] ?? null)) . ",") . "05");
        // line 112
        echo "        <input id=\"datos\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, ($context["datos"] ?? null), "html", null, true);
        echo "\" />
        <input type=\"hidden\" name=\"secuencial\" value=\"";
        // line 113
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
                    <label class=\"control-label\">Email</label>
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
    </div>

    <legend class=\"border\">Detalle Nota D&eacute;bito</legend>
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
                    <th >Raz&oacute;n Modificaci&oacute;n</th>
                    <th>Valor Modificaci&oacute;n</th>
                    <th>Accion</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div> 

    <div class=\"col-xs-12 col-sm-12 col-md-4 col-md-offset-8\">
        <div class=\"col-xs-10 col-sm-8 text-right\">SubTotal Sin Impuesto</div> 
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"\" id=\"subTotalSinImpuesto\">0.00</p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 12%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\"><span id=\"subTotal12\">0.00</span> <input type=\"radio\" name=\"impuesto\" value=\"2\"/></p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total 0%</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\" ><span id=\"subTotal0\">0.00</span> <input  type=\"radio\" name=\"impuesto\" value=\"0\"/></p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Total No Objeto IVA</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\"><span id=\"subTotaNoObjeto\">0.00</span> <input type=\"radio\" name=\"impuesto\" value=\"6\"/></p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Sub Exento IVA</div>
        <div class=\"col-xs-2 col-sm-4\">
            <p class=\"text-left\"><span id=\"subTotaExento\">0.00</span> <input  type=\"radio\" name=\"impuesto\" value=\"7\"/></p>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right\">Valor ICE</div>
        <div class=\"col-xs-2 col-sm-4\">
            <input type=\"text\" value=\"0.00\"  id=\"valorICE\" name=\"valorICE\" class=\"form-control\"/>
        </div>
        <div class=\"col-xs-10 col-sm-8 text-right codICE\">Cod ICE</div>
        <div class=\"col-xs-2 col-sm-4 codICE\">
            <input type=\"text\"  id=\"codICE\" name=\"codICE\" class=\"form-control\" disabled=\"disabled\"/>
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
    <button id=\"submit\" class=\"hidden\" type=\"submit\">
    </button>

</form>


";
    }

    // line 236
    public function block_javascript($context, array $blocks = array())
    {
        // line 237
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 238
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 239
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>

<script>
                    var count = 0;
                    var oTable = \$(\"#client-table\").dataTable({
                        responsive: true,
                        bAutoWidth: false,
                        sAjaxSource: \"";
        // line 246
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
                    \$('#client-table_filter input').bind('keyup', function(e) {
                        if (e.keyCode == 13) {
                            oTable.fnFilter(\$(this).val());
                        }
                    });
                    \$('#client-table tbody').on('click', 'tr', function() {
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
                    \$('#nuevoCliente').click(function() {
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
                    \$(\"form\").keypress(function(e) {
                        if (e.which == 13) {
                            return false;
                        }
                    });
                    \$(\"#formNotaDebito\").validate({
                        errorClass: \"my-error-class\",
                        validClass: \"my-valid-class\",
                        rules: {
                            nombre: {
                                required: true,
                            },

                            tipoIdentificacion: {
                                required: true,
                            },
                            identificacion: {
                                required: true,
                            },
                            valorICE: {
                                required: true,
                                number: true,
                            },
                            codICE: {
                                required: true,
                                digits: true,
                            },
                        }

                    });
                    \$(\"#idCliente\").val(\"\");
                    \$(\"#tipoIdentificacion\").val(\"\");
                    \$(\"#identificacion\").val(\"\");
                    \$(\"#nombre\").val(\"\");
                    \$(\"#celular\").val(\"\");
                    \$(\"#email\").val(\"\");
                    \$(\"#direccion\").val(\"\");
                    \$('#nuevoCliente').prop('checked', true);
                    \$('#nuevoCliente').val(true);
                    \$(\"#nuevoDetalle\").click(function() {
                        count = count + 1;
                        \$('#detalles > tbody:last').append(\"<tr><td><input type = 'text' name = 'motivo[\" + count + \"]' required='required' /></td><td><input type = 'text' name = 'valorMod[\" + count + \"]' class = 'valor' id = 'valorMod\" + count + \"' required='required' onchange = 'calcularValores()'/></td><td> <button class='btn btn-danger link-boton accion'  type='button' onclick = 'eliminarFila(this)'>\"
                                + \"<i class='glyphicon glyphicon-trash icon-white'></i></button></td></tr>\");
                        \$('#valorMod' + count).rules(\"add\", {
                            number: true,
                        });
                    });
                    function eliminarFila(e) {
                        \$(e).parent().parent().remove();
                        calcularValores();
                    }

                    function calcularValores() {
                        var subTotalSinImpuesto = 0;
                        \$(\".valor\").each(function(index, element) {
                            subTotalSinImpuesto += parseFloat(\$(element).val());
                        });
                        \$(\"#subTotalSinImpuesto\").text(subTotalSinImpuesto.toFixed(2));
                        calcularTotal();
                    }

                    function calcularTotal() {
                        var total = 0;
                        var iva12 = 0;
                        if (\$('input:radio[name=impuesto]:checked').val() == '2') {
                            iva12 = parseFloat(\$(\"#subTotalSinImpuesto\").text()) * 0.12;
                            \$(\"#iva12\").text(iva12.toFixed(2));
                        } else {
                            \$(\"#iva12\").text('0.00');
                        }

                        total = (iva12 + parseFloat(\$(\"#subTotalSinImpuesto\").text())).toFixed(2);
                        \$(\"#valorTotal\").text(total);

                        \$(\"#subTotal12\").text(\"0.00\");
                        \$(\"#subTotal0\").text(\"0.00\");
                        \$(\"#subTotaNoObjeto\").text(\"0.00\");
                        \$(\"#subTotaExento\").text(\"0.00\");
                        var subTotalSinImpuesto = \$(\"#subTotalSinImpuesto\").text()
                        var checked = \$('input:radio[name=impuesto]:checked').val();
                        if (checked == '2') {
                            \$(\"#subTotal12\").text(subTotalSinImpuesto);
                        } else if (checked == '0') {
                            \$(\"#subTotal0\").text(subTotalSinImpuesto);
                        }
                        else if (checked == '6') {
                            \$(\"#subTotaNoObjeto\").text(subTotalSinImpuesto);
                        }
                        else if (checked == '7') {
                            \$(\"#subTotaExento\").text(subTotalSinImpuesto);
                        }
                    }

                    \$(\"input[name=impuesto]\").change(function() {
                        calcularTotal();
                    });

                    \$(\"#valorICE\").change(function(e) {
                        if (parseFloat(\$(\"#valorICE\").val()) > 0) {
                            \$(\"#codICE\").prop('disabled', false);
                        } else {
                            \$(\"#codICE\").prop('disabled', true);
                            \$(\"#codICE\").val(\"\");
                        }
                    });
</script>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:NotaDebito:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 246,  368 => 239,  364 => 238,  359 => 237,  356 => 236,  230 => 113,  225 => 112,  223 => 111,  190 => 85,  182 => 84,  172 => 77,  168 => 76,  164 => 75,  160 => 74,  152 => 73,  148 => 72,  144 => 71,  139 => 68,  130 => 65,  125 => 62,  121 => 61,  116 => 59,  82 => 27,  79 => 26,  69 => 20,  51 => 9,  48 => 8,  45 => 7,  41 => 1,  35 => 5,  31 => 4,  29 => 3,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:NotaDebito:new.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/NotaDebito/new.html.twig");
    }
}
