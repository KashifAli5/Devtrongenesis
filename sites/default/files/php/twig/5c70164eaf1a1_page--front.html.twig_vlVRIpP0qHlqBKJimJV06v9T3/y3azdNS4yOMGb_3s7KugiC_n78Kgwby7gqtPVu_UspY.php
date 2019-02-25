<?php

/* themes/yg_sprint/templates/page--front.html.twig */
class __TwigTemplate_e560dc73be5b4bc9897e03257ce8c38ae8825a2be59201d92fa4403c1d895397 extends Twig_Template
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
        $tags = array("if" => 9, "autoescape" => 80);
        $filters = array("render" => 9, "t" => 29, "raw" => 81);
        $functions = array("path" => 28);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'autoescape'),
                array('render', 't', 'raw'),
                array('path')
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 1
        echo "  <div id=\"top\"></div>
    <div id=\"fh5co-page\">
      <div id=\"fh5co-main-nav-wrap\">
        <nav role=\"navigation\" id=\"fh5co-nav-slide\">
          <div class=\"fh5co-nav-overlay\"></div>
            <div class=\"fh5co-nav-inner\">
              ";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
        echo "
                <ul class=\"fh5co-social\">
                  ";
        // line 9
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 10
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
            echo "\"><i class=\"fa fa-facebook\"></i></a></li>
                  ";
        }
        // line 12
        echo "                  ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 13
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
            echo "\"><i class=\"fa fa-twitter\"></i></a></li>
                  ";
        }
        // line 15
        echo "                  ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 16
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["instagram_url"] ?? null), "html", null, true));
            echo "\"><i class=\"fa fa-instagram\"></i></a></li>
                  ";
        }
        // line 17
        echo "  
                  ";
        // line 18
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["linkedin_url"] ?? null)))) {
            // line 19
            echo "                    <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["linkedin_url"] ?? null), "html", null, true));
            echo "\"><i class=\"fa fa-linkedin\"></i></a></li>
                  ";
        }
        // line 21
        echo "              </ul>
            </div>  
        </nav>
      </div>    
    
      <header id=\"fh5co-header\" role=\"banner\" style=\"background: #2e2e2e url(../themes/yg_sprint/images/bg.jpg);\">
        <div class=\"container\"> 
          <a href=\"";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getPath("<front>")));
        echo "\" id=\"fh5co-header-logo\">
            <img src=\"";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logopath"] ?? null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true));
        echo "\" title=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Home")));
        echo "\">
          </a>
          <a href=\"#\" class=\"fh5co-header-bars js-nav-toggle\"><span>Menu&nbsp;&nbsp;&nbsp;</span></a>
          <h1 class=\"fh5co-header-intro\">Devtron Genesis is a house of quality web developmet.</h1>
        </div>
      </header> 
      <!-- /fh5co-header -->
      <main id=\"fh5co-main\" role=\"main\">
         ";
        // line 37
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
      </main>
      <footer id=\"fh5co-footer\" role=\"contentinfo\">
        <div class=\"container\">
          <div id=\"fh5co-subscribe\">
            <div class=\"row\">
              <div class=\"col-md-4 col-md-offset-4\">
                ";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "email_subscribe", array()), "html", null, true));
        echo "
              </div>
            </div>
          </div>
        </div>        
        <div class=\"container text-center fh5co-social-container\">
          <ul class=\"fh5co-social\">
            ";
        // line 51
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["facebook_url"] ?? null)))) {
            // line 52
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["facebook_url"] ?? null), "html", null, true));
            echo "\"><i class=\"ti-facebook\"></i> Facebook</a></li>
            ";
        }
        // line 54
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["twitter_url"] ?? null)))) {
            // line 55
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["twitter_url"] ?? null), "html", null, true));
            echo "\"><i class=\"ti-twitter-alt\"></i> Twitter</a></li>
            ";
        }
        // line 57
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["dribbble_url"] ?? null)))) {
            // line 58
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["dribbble_url"] ?? null), "html", null, true));
            echo "\"><i class=\"ti-dribbble\"></i> Dribbble</a></li>
            ";
        }
        // line 60
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["google_plus_url"] ?? null)))) {
            // line 61
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["google_plus_url"] ?? null), "html", null, true));
            echo "\"><i class=\"ti-google\"></i> GooglePlus</a></li>
            ";
        }
        // line 63
        echo "            ";
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["instagram_url"] ?? null)))) {
            // line 64
            echo "              <li><a href=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["instagram_url"] ?? null), "html", null, true));
            echo "\"><i class=\"ti-instagram\"></i> Instagram</a></li>
            ";
        }
        // line 65
        echo "  
            ";
        // line 66
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["email"] ?? null)))) {
            // line 67
            echo "              <li><a href=\"mailto:";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true));
            echo "\"><i class=\"ti-email\"></i> Email us</a></li>
            ";
        }
        // line 69
        echo "          </ul>
        </div>
        <div id=\"fh5co-footer-links\">
          <div class=\"container\">
            <div class=\"row\">

              <div class=\"col-md-3 col-sm-3 col-xs-6 col-xxs-12 col-md-offset-1\">
                <h3 class=\"footer-title\">
                  ";
        // line 77
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["about_title"] ?? null)))) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["about_title"] ?? null), "html", null, true));
        }
        // line 78
        echo "                </h3>
                  ";
        // line 79
        if (($context["about_description"] ?? null)) {
            // line 80
            echo "                    ";
            // line 81
            echo "                      ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["about_description"] ?? null)));
            echo "
                    ";
            // line 83
            echo "                  ";
        }
        // line 84
        echo "              </div>
              <div class=\"col-md-2 col-sm-3 col-xs-6 col-xxs-12\">
                <div class=\"footer-links\">
                  ";
        // line 87
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_menu", array()), "html", null, true));
        echo "
                </div>
              </div>
              <div class=\"col-md-2 col-sm-3 col-xs-6 col-xxs-12\">
                ";
        // line 91
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_latest_blog", array()), "html", null, true));
        echo "
              </div>
            <div class=\"col-md-3 col-sm-3 col-xs-6 col-xxs-12 col-md-offset-1\">
              <h3 class=\"footer-title\">
                ";
        // line 95
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["contact_title"] ?? null)))) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["contact_title"] ?? null), "html", null, true));
        }
        // line 96
        echo "              </h3>
                <div class=\"footer-links\">
                  <address>
                    ";
        // line 99
        if (($context["address"] ?? null)) {
            // line 100
            echo "                      ";
            // line 101
            echo "                        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["address"] ?? null)));
            echo "
                      ";
            // line 103
            echo "                    ";
        }
        // line 104
        echo "                  </address>
                  <p>";
        // line 105
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["phone"] ?? null)))) {
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["phone"] ?? null), "html", null, true));
        }
        echo "</p>
                  ";
        // line 106
        if ( !twig_test_empty($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(($context["email"] ?? null)))) {
            echo "<a href=\"mailto:";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true));
            echo "\">";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["email"] ?? null), "html", null, true));
            echo "</a>";
        }
        // line 107
        echo "                </div>
              </div>
            </div>
          </div>
        </div>
        <div id=\"fh5co-copyright\">
          <div class=\"container\">
            <p class=\"text-center\"><small>&copy; 2018. <a href=\"#\">Devtron Genesis</a>. All Rights Reserved.</p>
            <p class=\"text-center\">
              <a href=\"#top\" class=\"smoothscroll back-to-top\"><i class=\"ti-angle-double-up\"></i><span>Top</span></a>
            </p>
          </div>

        </div>
      </footer>

    </div>

";
    }

    public function getTemplateName()
    {
        return "themes/yg_sprint/templates/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 107,  274 => 106,  268 => 105,  265 => 104,  262 => 103,  257 => 101,  255 => 100,  253 => 99,  248 => 96,  244 => 95,  237 => 91,  230 => 87,  225 => 84,  222 => 83,  217 => 81,  215 => 80,  213 => 79,  210 => 78,  206 => 77,  196 => 69,  190 => 67,  188 => 66,  185 => 65,  179 => 64,  176 => 63,  170 => 61,  167 => 60,  161 => 58,  158 => 57,  152 => 55,  149 => 54,  143 => 52,  141 => 51,  131 => 44,  121 => 37,  106 => 29,  102 => 28,  93 => 21,  87 => 19,  85 => 18,  82 => 17,  76 => 16,  73 => 15,  67 => 13,  64 => 12,  58 => 10,  56 => 9,  51 => 7,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/yg_sprint/templates/page--front.html.twig", "/var/www/devtrongenesis/themes/yg_sprint/templates/page--front.html.twig");
    }
}
