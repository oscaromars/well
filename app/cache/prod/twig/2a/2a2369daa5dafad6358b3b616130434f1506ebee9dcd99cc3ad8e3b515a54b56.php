<?php

/* FactelBundle:Cliente:index.html.twig */
class __TwigTemplate_28b42c2cfa408e345fbdecb2581b84f8dc7464f3a359c85603e9fb92210570b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Cliente:index.html.twig", 1);
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
        echo "    <i class=\"fa fa-bar-chart-o fa-fw\"></i> Clientes
    <div class=\"pull-right\">
        <a href=\"";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_new");
        echo "\">
            <button class=\"btn btn-primary link-boton\">
                <i class=\"fa fa-plus-circle\"></i>
                Nuevo
            </button>
        </a>
    </div>
";
    }

    // line 20
    public function block_content($context, array $blocks = array())
    {
        // line 21
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "        <div class=\"col-sm-12 alert alert-success alert-dismissable\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            <h4><strong>Carga Exitosa</strong></h4>
            <p>";
            // line 25
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "    <div class=\"dataTable_wrapper table-responsive col-lg-12\">  
        <table class=\"table table-striped table-bordered table-hover\" id=\"cliente-table\">
            <thead>
                <tr>
                    <th style=\"width: 10%\" >ID</th>
                    <th>Raz&oacute;n Social</th>
                    <th style=\"width: 10%\" >Tipo Identificacion</th>
                    <th style=\"width: 30%\" >Identificaci&oacute;n</th>
                    <th>Celular</th>
                    <th>Email</th>
                    <th>Direccion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
";
    }

    // line 48
    public function block_javascript($context, array $blocks = array())
    {
        // line 49
        echo "    <!-- DataTables JavaScript -->
    <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables/media/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/script.js"), "html", null, true);
        echo "\"></script>
    <script>
        var oTable = \$(\"#cliente-table\").dataTable({
            columnDefs: [
                {
                    targets: 1,
                    render: function (data, type, row) {
                        return \"<a href='\" + row[0] + \"'>\" + row[3] + \"</a>\";
                    }
                },
                {
                    targets: 2,
                    render: function (data, type, row) {
                        data = row[1]
                        var tipo = \"\";
                        if (data == '04') {
                            tipo = \"RUC\";
                        } else if (data == '05') {
                            tipo = \"CEDULA\";
                        } else if (data == '06') {
                            tipo = \"PASAPORTE\";
                        } else if (data == '07') {
                            tipo = \"CONSUMIDOR FINAL\";
                        } else if (data == '08') {
                            tipo = \"DEL EXTERIOR\";
                        } else if (data == '09') {
                            tipo = \"PLACA\";
                        }
                        return tipo;
                    }
                },
                {
                    targets: 3,
                    render: function (data, type, row) {
                        return row[2];
                    }
                }, {
                    targets: 7,
                    render: function (data, type, row) {
                        var a = 1;
                        return \"<a href='\" + row[0] + \"/editar' title='Editar'><button class='btn btn-primary link-boton'><i class='fa fa-pencil-square-o'></i></button></a>\";
                    }
                }
            ],
            aoColumns: [{\"bVisible\": false}, null, null, null, null, null, {\"bVisible\": false}],
            responsive: true,
            bAutoWidth: false,
            sAjaxSource: \"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("all_client");
        echo "\",
            bProcessing: true,
            bServerSide: true,
            bSort: false,
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
        \$('#cliente-table_filter input').unbind();
        \$('#cliente-table_filter input').bind('keyup', function (e) {
            if (e.keyCode == 13) {
                oTable.fnFilter(\$(this).val());
            }
        });
    </script>

";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Cliente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 99,  126 => 52,  122 => 51,  118 => 50,  115 => 49,  112 => 48,  89 => 28,  80 => 25,  75 => 22,  70 => 21,  67 => 20,  55 => 11,  51 => 9,  48 => 8,  42 => 6,  37 => 4,  34 => 3,  31 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Cliente:index.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Cliente/index.html.twig");
    }
}
