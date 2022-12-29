<?php

/* FactelBundle:Emisor:show.html.twig */
class __TwigTemplate_db3bb9c3197d2c5707eb4ecde26b5d693a2b7b961df712eaa01b7e74117351b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FactelBundle::Layout.html.twig", "FactelBundle:Emisor:show.html.twig", 1);
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
        echo "    <i class=\"fa fa-bar-chart-o fa-fw\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "razonSocial", array()), "html", null, true);
        echo "
    <div class=\"pull-right\">
        <div class=\"btn-group\">
            <button class=\"btn btn-info btn-xs dropdown-toggle\"
                    type=\"button\" data-toggle=\"dropdown\">
                <i class=\"fa fa-list\"></i>
                Acciones <span class=\"caret\"></span>
            </button>
            <ul class=\"dropdown-menu dropdown-menu-right\" role=\"menu\">
                ";
        // line 12
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor_new");
            echo "\"><i class=\"fa fa-plus-circle\"></i> Nuevo</a></li>
                    ";
        }
        // line 15
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor_edit", array("id" => $this->getAttribute(($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\"><i class=\"fa fa-pencil-square-o\"></i> Editar</a></li>
                    ";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emisor");
            echo "\"><i class=\"fa fa-undo\"></i> Emisores</a></li>
                    <li class=\"divider\"></li>
                    <li><a class=\"accion\" href=\"\" data-toggle=\"modal\" data-target=\"#confirm-delete\" type=\"button\" accion = \"delete\"><i class=\"glyphicon glyphicon-trash icon-white\"></i> Eliminar</a></li>
                    ";
        }
        // line 21
        echo "            </ul>
        </div>

    </div>
";
    }

    // line 26
    public function block_content($context, array $blocks = array())
    {
        // line 27
        echo "    <table class=\"table\">
        <tbody>
            <tr>
                <th>Estado</th>
                <td>";
        // line 31
        if ($this->getAttribute(($context["entity"] ?? null), "activo", array())) {
            echo "<button disabled=\"disabled\" class=\"btn btn-success link-boton\">Activo</button>";
        } else {
            echo "<button disabled=\"disabled\" class=\"btn btn-danger link-boton\">Inactivo</button>";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Ruc</th>
                <td>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "ruc", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Raz&oacute;n Social</th>
                <td>";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "razonSocial", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre Comercial</th>
                <td>";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "nombreComercial", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Direcci&oacute;n Matriz</th>
                <td>";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "direccionMatriz", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Ambiente</th>
                <td>";
        // line 51
        if (($this->getAttribute(($context["entity"] ?? null), "ambiente", array()) == "1")) {
            echo "Pruebas";
        } else {
            echo " Producci&oacute;n ";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Tipo de Emisi&oacute;n</th>
                <td>";
        // line 55
        if (($this->getAttribute(($context["entity"] ?? null), "tipoEmision", array()) == "1")) {
            echo "Emisi&oacute;n Normal";
        } else {
            echo " Emisi&oacute;n por Indisponibilidad del Sistema ";
        }
        echo "</td>
            </tr>
            <tr>
                <th>Contribuyente Especial</th>
                <td>";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "contribuyenteEspecial", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Obligado Contabilidad</th>
                <td>";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "obligadoContabilidad", array()), "html", null, true);
        echo "</td>
            </tr>
            ";
        // line 65
        if ($this->getAttribute(($context["entity"] ?? null), "regimenRimpe", array())) {
            // line 66
            echo "                <tr>
                    <th>R&eacute;gimen</th>
                    <td>Contribuyente Negocio Popular - Régimen RIMPE</td>
                </tr>
            ";
        }
        // line 71
        echo "            ";
        if ($this->getAttribute(($context["entity"] ?? null), "regimenRimpe1", array())) {
            // line 72
            echo "                <tr>
                    <th>R&eacute;gimen</th>
                    <td>Contribuyente Régimen RIMPE</td>
                </tr>
            ";
        }
        // line 77
        echo "            ";
        if ($this->getAttribute(($context["entity"] ?? null), "resolucionAgenteRetencion", array())) {
            // line 78
            echo "                <tr>
                    <th>Resoluci&oacute;n Agente Retenci&oacute;n</th>
                    <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute(($context["entity"] ?? null), "resolucionAgenteRetencion", array()), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        // line 83
        echo "        </tbody>
    </table>
    ";
        // line 85
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 86
            echo "        ";
            echo             $this->env->getExtension('form')->renderer->renderBlock(($context["delete_form"] ?? null), 'form');
            echo "
    ";
        }
        // line 88
        echo "
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Emisor:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 88,  196 => 86,  194 => 85,  190 => 83,  184 => 80,  180 => 78,  177 => 77,  170 => 72,  167 => 71,  160 => 66,  158 => 65,  153 => 63,  146 => 59,  135 => 55,  124 => 51,  117 => 47,  110 => 43,  103 => 39,  96 => 35,  85 => 31,  79 => 27,  76 => 26,  68 => 21,  60 => 17,  58 => 16,  53 => 15,  47 => 13,  45 => 12,  32 => 3,  29 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Emisor:show.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Emisor/show.html.twig");
    }
}
