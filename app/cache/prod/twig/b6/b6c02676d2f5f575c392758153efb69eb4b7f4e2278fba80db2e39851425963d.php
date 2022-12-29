<?php

/* FactelBundle::Layout.html.twig */
class __TwigTemplate_a74af162d545e580528d220ac9af19c5054f1242fbab9d6d3f43f2a5bea2d616 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'panel_title' => array($this, 'block_panel_title'),
            'content' => array($this, 'block_content'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <title>Sistema de Facturaci&oacute;n Electr&oacute;nica</title>



        <!-- Bootstrap core CSS -->
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-ui/jquery-ui.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- MetisMenu CSS -->
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/metisMenu/dist/metisMenu.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">


        <!-- Morris Charts CSS -->
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/morrisjs/morris.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

        <!-- Font Awesome -->
        <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        // line 26
        $this->displayBlock('css', $context, $blocks);
        // line 28
        echo "        <!-- Style CSS -->
        <link href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/css/timeline.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/css/sb-admin-2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body>
        <noscript>
        <meta http-equiv=\"refresh\" content=\"0; URL=";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("no_script");
        echo "\"/>
        </noscript>
        <div id=\"wrapper\">

            <!-- Navigation -->
            <nav class=\"navbar navbar-default navbar-static-top\" role=\"navigation\" style=\"margin-bottom: 0\">
                <div class=\"navbar-header\">
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\"class=\"\"><img src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/img/login-logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" width=\"100\" height=\"30\"></a>
                    <a class=\"navbar-brand\" href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\"><i class=\"fa fa-life-ring\"></i> Soporte 0994833086</a>

                </div>
                <!-- /.navbar-header -->

                <ul class=\"nav navbar-top-links navbar-right\">
                    <li class=\"dropdown\">
                        <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">  ";
        // line 55
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "apellidos", array()), "html", null, true);
            echo "   ";
        }
        // line 56
        echo "                            <i class=\"fa fa-user fa-fw\"></i>  <i class=\"fa fa-caret-down\"></i>
                        </a>
                        <ul class=\"dropdown-menu dropdown-user\">
                            ";
        // line 59
        if ($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array(), "any", false, true), "id", array(), "any", true, true)) {
            // line 60
            echo "                                <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario_show", array("id" => $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"fa fa-user fa-fw\"></i> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "nombre", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "apellidos", array()), "html", null, true);
            echo "</a>
                                ";
        }
        // line 62
        echo "                            </li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 64
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
        echo "\"><i class=\"fa fa-sign-out fa-fw\"></i>Salir</a>
                            </li>
                        </ul>
                        <!-- /.dropdown-user -->
                    </li>
                    <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class=\"navbar-default sidebar\" role=\"navigation\">
                    <div class=\"sidebar-nav navbar-collapse\">
                        <ul class=\"nav\" id=\"side-menu\">
                            ";
        // line 76
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR")) {
            // line 77
            echo "                                <li>
                                    <a href=\"";
            // line 78
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
            echo "\"><i class=\"fa fa-dashboard fa-fw\"></i> Mi Oficina</a>
                                </li>
                            ";
        }
        // line 81
        echo "
                            ";
        // line 82
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR")) {
            // line 83
            echo "                                <li>
                                    <a href=\"#\"><i class=\"fa fa-book\"></i> Facturaci&oacute;n<span class=\"fa arrow\"></span></a>
                                    <ul class=\"nav nav-second-level\">
                                        <li>
                                            <a href=\"";
            // line 87
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("factura");
            echo "\"><i class=\"fa fa-file-text-o\" aria-hidden=\"true\"></i> Factura </a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 90
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("liquidacion");
            echo "\">Liquidacion Compra</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 93
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notacredito");
            echo "\">Nota Cr&eacute;dito</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 96
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notadebito");
            echo "\">Nota D&eacute;bito</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("retencion");
            echo "\">Retenci&oacute;n</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("guia");
            echo "\">Guias</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 105
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("proforma");
            echo "\">Proformas</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-users fa-fw\" aria-hidden=\"true\"></i> Proveedores<span class=\"fa arrow\"></span></a>
                                    <ul class=\"nav nav-second-level\">
                                        <li>
                                            <a href=\"";
            // line 113
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("compra");
            echo "\"><i class=\"fa fa-shopping-cart fa-fw\"></i> Compras</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href=\"#\"><i class=\"fa fa-edit fa-fw\"></i> Reporte<span class=\"fa arrow\"></span></a>
                                    <ul class=\"nav nav-second-level\">
                                        <li>
                                            <a href=\"";
            // line 121
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reporte");
            echo "\">Comprobantes</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 124
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reporte_ventas");
            echo "\">Ventas</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 127
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("reporte_ventas_detallada");
            echo "\">Ventas Detallada</a>
                                        </li>
                                        ";
            // line 129
            if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN")) {
                // line 130
                echo "                                            <li>
                                                <a href=\"";
                // line 131
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("total-retenciones");
                echo "\">Retenciones Total</a>
                                            </li>
                                            <li>
                                                <a href=\"";
                // line 134
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("retenciones_factura");
                echo "\">Retenciones Por Factura</a>
                                            </li>

                                        ";
            }
            // line 138
            echo "                                    </ul>
                                </li>
                            ";
        }
        // line 141
        echo "                            <li>
                                <a href=\"#\"><i class=\"fa fa-wrench fa-fw\"></i> Administrar<span class=\"fa arrow\"></span></a>
                                <ul class=\"nav nav-second-level\">
                                    ";
        // line 144
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 145
            echo "                                        <li>
                                            <a href=\"";
            // line 146
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor");
            echo "\">Emisores</a>
                                        </li>

                                    ";
        }
        // line 150
        echo "
                                    ";
        // line 151
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN")) {
            // line 152
            echo "                                        <li>
                                            <a href=\"";
            // line 153
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor");
            echo "\">Emisor</a>
                                            <a href=\"";
            // line 154
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("borrar_doc");
            echo "\">Borrar Doc. Prueba</a>
                                        </li>
                                    ";
        }
        // line 157
        echo "                                    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN"))) {
            // line 158
            echo "                                        <li>
                                            <a href=\"";
            // line 159
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("establecimiento");
            echo "\">Establecimientos</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 162
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("ptoemision");
            echo "\">Puntos de Emision</a>
                                        </li>
                                    ";
        }
        // line 165
        echo "
                                    ";
        // line 166
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 167
            echo "                                        <li>
                                            <a href=\"#\">Impuestos<span class=\"fa arrow\"></span></a>
                                            <ul class=\"nav nav-third-level\">
                                                <li>
                                                    <a href=\"";
            // line 171
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("impuesto_iva");
            echo "\">IVA</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 174
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("impuesto_ice");
            echo "\">ICE</a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 177
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("impuesto_irbpnr");
            echo "\">IRBPNR</a>
                                                </li>
                                            </ul>
                                            <!-- /.nav-third-level -->
                                        </li>
                                    ";
        }
        // line 183
        echo "                                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN")) {
            // line 184
            echo "                                        <li>
                                            <a href=\"";
            // line 185
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("facturas_load");
            echo "\">Cargar Facturas</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 188
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto");
            echo "\">Productos</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 191
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("producto_load");
            echo "\">Cargar Productos</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 194
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente");
            echo "\">Clientes</a>

                                        </li>
                                        <li>
                                            <a href=\"";
            // line 198
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cliente_load");
            echo "\">Cargar Cliente</a>
                                        </li>
                                    ";
        }
        // line 201
        echo "                                    ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 202
            echo "                                        <li>
                                            <a href=\"";
            // line 203
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("plan");
            echo "\">Planes</a>
                                        </li>
                                        <li>
                                            <a href=\"";
            // line 206
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rol");
            echo "\">Roles</a>
                                        </li>
                                    ";
        }
        // line 209
        echo "                                    ";
        if (($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN") || $this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_EMISOR_ADMIN"))) {
            // line 210
            echo "
                                        <li>
                                            <a href=\"";
            // line 212
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("usuario");
            echo "\">Usuarios</a>
                                        </li>
                                    ";
        }
        // line 215
        echo "

                                </ul>
                                <!-- /.nav-second-level -->
                            </li>
                        </ul>
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id=\"page-wrapper\">

                <!-- /.row -->
                <br />
                <div class=\"panel panel-info\">
                    <div class=\"panel-heading\">
                        ";
        // line 233
        $this->displayBlock('panel_title', $context, $blocks);
        // line 236
        echo "                    </div>
                    <div class=\"modal fade\" id=\"confirm-delete\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
                        <div class=\"modal-dialog\">
                            <div class=\"modal-content\">

                                <div class=\"modal-header\">
                                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                    <h4 class=\"modal-title\" id=\"myModalLabel\">Eliminar</h4>
                                </div>

                                <div class=\"modal-body\">
                                    <p>Una vez eliminado el registro no se recuperar&aacute;</p>
                                    <p>Desea continuar?</p>
                                </div>

                                <div class=\"modal-footer\">
                                    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancelar</button>
                                    <button type=\"button\" class=\"btn btn-danger danger confirm\" data-dismiss=\"modal\">Eliminar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"panel-body\">
                        ";
        // line 259
        $this->displayBlock('content', $context, $blocks);
        // line 262
        echo "                        <!-- /.panel-body -->
                    </div>

                </div>
                <!-- /#page-wrapper -->

            </div>

            <script src=\"";
        // line 270
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 272
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Metis Menu Plugin JavaScript -->
            <script src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/bower_components/metisMenu/dist/metisMenu.min.js"), "html", null, true);
        echo "\"></script>

            <!-- Custom Theme JavaScript -->
            <script src=\"";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/sb-admin-2.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-validation/dist/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 280
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-validation/dist/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-validation/dist/localization/messages_es.min.js"), "html", null, true);
        echo "\"></script>

            ";
        // line 283
        $this->displayBlock('javascript', $context, $blocks);
        // line 286
        echo "    </body>

</html>
";
    }

    // line 26
    public function block_css($context, array $blocks = array())
    {
        // line 27
        echo "        ";
    }

    // line 233
    public function block_panel_title($context, array $blocks = array())
    {
        // line 234
        echo "                            <i class=\"fa fa-bar-chart-o fa-fw\"></i> Comprobantes Electronicos
                        ";
    }

    // line 259
    public function block_content($context, array $blocks = array())
    {
        // line 260
        echo "
                        ";
    }

    // line 283
    public function block_javascript($context, array $blocks = array())
    {
        // line 284
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "FactelBundle::Layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 284,  556 => 283,  551 => 260,  548 => 259,  543 => 234,  540 => 233,  536 => 27,  533 => 26,  526 => 286,  524 => 283,  519 => 281,  515 => 280,  511 => 279,  507 => 278,  501 => 275,  495 => 272,  491 => 271,  487 => 270,  477 => 262,  475 => 259,  450 => 236,  448 => 233,  428 => 215,  422 => 212,  418 => 210,  415 => 209,  409 => 206,  403 => 203,  400 => 202,  397 => 201,  391 => 198,  384 => 194,  378 => 191,  372 => 188,  366 => 185,  363 => 184,  360 => 183,  351 => 177,  345 => 174,  339 => 171,  333 => 167,  331 => 166,  328 => 165,  322 => 162,  316 => 159,  313 => 158,  310 => 157,  304 => 154,  300 => 153,  297 => 152,  295 => 151,  292 => 150,  285 => 146,  282 => 145,  280 => 144,  275 => 141,  270 => 138,  263 => 134,  257 => 131,  254 => 130,  252 => 129,  247 => 127,  241 => 124,  235 => 121,  224 => 113,  213 => 105,  207 => 102,  201 => 99,  195 => 96,  189 => 93,  183 => 90,  177 => 87,  171 => 83,  169 => 82,  166 => 81,  160 => 78,  157 => 77,  155 => 76,  140 => 64,  136 => 62,  126 => 60,  124 => 59,  119 => 56,  111 => 55,  101 => 48,  97 => 47,  81 => 34,  74 => 30,  70 => 29,  67 => 28,  65 => 26,  61 => 25,  55 => 22,  48 => 18,  42 => 15,  38 => 14,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle::Layout.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Layout.html.twig");
    }
}
