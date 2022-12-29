<?php

/* FactelBundle:Login:login.html.twig */
class __TwigTemplate_5a93687c4d41cede03c4f781998f3c5dcfe659578d7a22694dae02fb9c56c7b1 extends Twig_Template
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
        echo "<html>
    <head>
        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title>Iniciar Sesi&oacute;n</title>
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/css/login.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    </head>
    <body onload='document.loginForm.username.focus();'>
        <!-- start Login box -->
        <div  id=\"login-block\">
            <div class=\"row\">

                <div class=\"col-sm-10 col-md-4 col-sm-offset-2 col-md-offset-4\">
                    <div class=\"login-box clearfix animated flipInY\">
                        <div class=\"login-logo\">
                            <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/img/login_logo.png"), "html", null, true);
        echo "\" alt=\"Logo\" />
                        </div>
                   ";
        // line 21
        if (($context["error"] ?? null)) {
            // line 22
            echo "                        <div class=\"alert alert-danger alert-dismissable\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
                            <h4><strong>Error!</strong></h4>
                            <p>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? null), "message", array()), "html", null, true);
            echo "</p>
                        </div>
                    ";
        }
        // line 28
        echo "
                        <table style=\"width:100%;\">
                          <tr>
                            <td>
                              <div class=\"login-form\">
                                  <form id=\"loginform\" name = \"loginForm\" class=\"form-horizontal\" role=\"form\" action=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_check");
        echo "\" method='POST'>
<div class=\"textotitulo\"><h4>Inicia Sesión</h4></div>
                                      <div class=\"input-group\">
                                          <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-user\"></i></span>
                                          <input id=\"login-username\" type=\"text\" class=\"form-control\" name=\"_username\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
        echo "\" placeholder=\"Usuario\" required>
                                      </div>

                                      <div class=\"input-group\">
                                          <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-lock\"></i></span>
                                          <input id=\"login-password\" type=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"Contraseña\" required>
                                      </div>

                                      <div  class=\"form-group\">
                                          <!-- Button -->

                                          <div class=\"col-sm-12 controls\">
                                              <button type=\"submit\" class=\"btn btn-success\">Iniciar Sesi&oacute;n</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>
                            </td>
    <td><hr>
                            </td>
                            <td>

                                      <div  class=\"form-group\">
                                        <div  class=\"textotitulo\">
                                          <!-- Button -->
<h4>Consultar Documentos</h4></div>
                                          <div class=\"col-sm-12 controls\">
                                            <a href=\"cconsulta/index.php\">
  <button type=\"submit\" class=\"btn btn-success\">Consultar </button></a>
                                          </div>
                                      </div>

                              </div></td>
                          </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- End Login box -->
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/js/jquery-1.11.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/jquery-ui/jquery-ui.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bundle\TwigBundle\Extension\AssetsExtension')->getAssetUrl("recursos/framework/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "FactelBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 80,  125 => 79,  121 => 78,  77 => 37,  70 => 33,  63 => 28,  57 => 25,  52 => 22,  50 => 21,  45 => 19,  32 => 9,  28 => 8,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FactelBundle:Login:login.html.twig", "/home/renesan1/public_html/1/src/FactelBundle/Resources/views/Login/login.html.twig");
    }
}
