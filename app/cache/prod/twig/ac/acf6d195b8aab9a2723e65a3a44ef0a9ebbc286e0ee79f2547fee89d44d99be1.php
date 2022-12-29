<?php

/* FactelBundle:Reporte:reporteVentas.html.twig */
class __TwigTemplate_7ad706334bd219ec78cd0d1d3d4e5537a3db66ecd9c2e1fa83a9443e2c92b97a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Reporte:reporteVentas.html.twig", 1);
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
        echo "<!-- DataTables CSS -->
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
        echo "<i class=\"fa fa-bar-chart-o fa-fw\"></i> Reporte
";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"control-group\">
            <form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("comprobante_pdf");
        echo "\" name = \"reporte\" id = \"reporte\" method=\"GET\">
                <div class=\"form-group col-sm-3 col-sm-offset-1\">
                    <label for=\"tipoComprobante\">Tipo Comprobante</label>
                    <select class=\"form-control input-sm\" id=\"tipoComprobante\" name=\"tipoComprobante\">
                        <option value=\"F\">FACTURA</option>
                    </select>
                </div>
                <div class=\"form-group col-sm-3\">
                    <label for=\"sel1\">Fecha Inicio</label>
                    <input class=\"form-control input-sm\" type=\"text\" id=\"fechaInicial\" size=\"8\" name=\"fechaInicial\" onchange=\"busqueda()\"/>
                </div>
                <div class=\"form-group col-sm-3\">
                    <label for=\"sel1\">Fecha Fin</label>
                    <input class=\"form-control input-sm\" type=\"text\" id=\"fechaFinal\" size=\"8\" name=\"fechaFinal\" onchange=\"busqueda()\"/>
                </div>
                <input type=\"hidden\" name=\"filtro\" id=\"filtro\">
                <div class=\"col-sm-3 col-sm-offset-4\">
                    <a class=\"btn btn-success btn-xs\" onclick=\"enviarFormulario()\" type=\"button\" id=\"enviar\">
                        <i class=\"fa fa-file-excel-o\">  Descargar PDF</i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<br />
<div class=\"row\">
    <div class=\"col-sm-12\">
        <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
            <table class=\"table table-striped table-bordered table-hover\" id=\"factura-table\">
                <thead>
                    <tr>
                        <th>No. Factura</th>
                        <th>Cliente</th>
                        <th>Forma Pago</th>
                        <th>Fecha Emisi&oacute;n</th>
                        <th>Valor Total</th>               
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>
</div>
";
    }

    // line 63
    public function block_javascript($context, array $blocks = array())
    {
        // line 64
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>
<script>
                        function enviarFormulario() {
                            var fechaInicial = \$(\"#fechaInicial\").val();
                            var fechaFinal = \$(\"#fechaFinal\").val();
                            var filtro = \$('#factura-table_filter input').val();
                            var cadena = \"\";
                            if (fechaInicial != \"\" && fechaFinal != \"\") {
                                cadena = fechaInicial + \"&\" + fechaFinal + \"&\";
                            }

                            cadena = cadena + filtro;
                            \$(\"#filtro\").val(cadena);
                            document.reporte.submit();
                        }

                        var oTable = \$(\"#factura-table\").dataTable({
                           
                            responsive: true,
                            bAutoWidth: false,
                            sAjaxSource: \"";
        // line 86
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reporte_ventas_fechas");
        echo "\",
                            bProcessing: true,
                            bServerSide: true,
                            bSort: false,
                            aLengthMenu: [[20, 30, 50], [20, 30, 50]],
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

                        \$('#factura-table_filter input').unbind();
                        \$('#factura-table_filter input').bind('keyup', function(e) {
                            if (e.keyCode == 13) {
                                var fechaInicial = \$(\"#fechaInicial\").val();
                                var fechaFinal = \$(\"#fechaFinal\").val();

                                var cadena = \"\";
                                if (fechaInicial != \"\" && fechaFinal != \"\") {
                                    cadena = fechaInicial + \"&\" + fechaFinal + \"&\";
                                }

                                oTable.fnFilter(cadena + \$(this).val());
                            }
                        });
                        oTable.on('search.dt', function() {
                            var datos = \$('#factura-table_filter input').val().split(\"&\");
                            if (datos.length == 3) {
                                \$('#factura-table_filter input').val(datos[2]);
                            }
                        });

                        function busqueda() {
                            var fechaInicial = \$(\"#fechaInicial\").val();
                            var fechaFinal = \$(\"#fechaFinal\").val();

                            var cadena = \"\";
                            if (fechaInicial != \"\" && fechaFinal != \"\") {
                                cadena = fechaInicial + \"&\" + fechaFinal + \"&\";
                                oTable.fnFilter(cadena + \$('#factura-table_filter input').val());
                            }
                            if (fechaInicial == \"\" && fechaFinal == \"\") {
                                oTable.fnFilter(\$('#factura-table_filter input').val());
                            }

                        }

                     

                       
</script>
    ";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Reporte:reporteVentas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 86,  127 => 66,  123 => 65,  118 => 64,  115 => 63,  64 => 16,  59 => 13,  56 => 12,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Reporte:reporteVentas.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Reporte/reporteVentas.html.twig");
    }
}
