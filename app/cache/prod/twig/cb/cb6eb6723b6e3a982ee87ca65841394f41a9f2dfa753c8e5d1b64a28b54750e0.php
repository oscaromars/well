<?php

/* FactelBundle:Retencion:codigoRetencion.html.twig */
class __TwigTemplate_23b303c6fd025fc9f5287e54cf1c8496fc4cb9acb898508569954ecde1b0e5a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"modal fade\" id=\"codigo-retencion\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Seleccione el C&oacute;digo de Retenci&oacute;n</h4>
            </div>

            <div class=\"modal-body\">
                <div class=\"dataTable_wrapper table-responsive\">  
                    <table class=\"table table-bordered table-hover \" id=\"codigo-retencion-table\">
                        <thead>
                            <tr>
                                <th style=\"width: 10%\" >Tipo</th>
                                <th style=\"width: 10%\" >C&oacute;digo</th>
                                <th style=\"width: 10%\" >% Retenci&oacute;n</th>                   
                                <th>Descripci&oacute;n</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>IVA</td>
                                <td class=\"codigo\">9</td>
                                <td class=\"porcentaje\" >10</td>
                                <td>Retención IVA 10%</td>
                            </tr>
                            <tr>
                                <td>IVA</td>
                                <td class=\"codigo\">10</td>
                                <td class=\"porcentaje\" >20</td>
                                <td>Retención IVA 20%</td>
                            </tr>
                            <tr>
                                <td>IVA</td>
                                <td class=\"codigo\">1</td>
                                <td class=\"porcentaje\" >30</td>
                                <td>Retención IVA 30%</td>
                            </tr>
                            <tr>
                                <td>IVA</td>
                                <td class=\"codigo\">11</td>
                                <td class=\"porcentaje\" >50</td>
                                <td>Retención IVA 50%</td>
                            </tr>
                            <tr>
                                <td>IVA</td>
                                <td class=\"codigo\">2</td>
                                <td class=\"porcentaje\" >70</td>
                                <td>Retención IVA 70%</td>
                            </tr>
                            <tr>
                                <td>IVA</td>
                                <td class=\"codigo\">3</td>
                                <td class=\"porcentaje\" >100</td>
                                <td>Retención IVA 100%</td>
                            </tr>
                            <tr>
                                <td>Renta</td>
                                <td class=\"codigo\">303</td>
                                <td class=\"porcentaje\" >10</td>
                                <td>Honorarios profesionales y demás pagos por servicios relacionados con el título profesional</td>
                            </tr>
                            <tr>
                                <td>Renta</td>
                                <td class=\"codigo\">304</td>
                                <td class=\"porcentaje\">8</td>
                                <td>Servicios predomina el intelecto no relacionados con el título profesional</td>
                            </tr>
                            <tr>
                                <td>Renta</td>
                                <td class=\"codigo\">304A</td>
                                <td class=\"porcentaje\">8</td>
                                <td>Comisiones y demás pagos por servicios predomina intelecto no relacionados con el título profesional</td>
                            </tr>
                            <tr>
                                <td>Renta</td>
                                <td class=\"codigo\">304B</td>
                                <td class=\"porcentaje\">8</td>
                                <td>Pagos a notarios y registradores de la propiedad y mercantil por sus actividades ejercidas como tales</td>
                            </tr>
                            
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Retencion:codigoRetencion.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Retencion:codigoRetencion.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Retencion/codigoRetencion.html.twig");
    }
}
