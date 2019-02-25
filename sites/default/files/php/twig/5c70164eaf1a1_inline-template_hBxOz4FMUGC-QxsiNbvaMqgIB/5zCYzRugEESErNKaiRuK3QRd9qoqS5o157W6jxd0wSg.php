<?php

/* {# inline_template_start #}<div class="item">
  <div class="hover-img">
    <figure>
      <img src="{{ field_image }}" alt="Project Title here">
    </figure>
    <div class="fh5co-projects-overlay">
      <h3 class="from-top">{{ title }} <span class="category">{{ field_hover_text }}</span></h3>
      <div class="fh5co-projects-action from-bottom">
        <a href="{{ field_image }}" class="goto-preview image-popup"><i class="ti-zoom-in"></i></a>
        <a href="{{ view_node }}" class="goto-details"><i class="ti-share"></i></a>
      </div>
    </div>
  </div>
</div> */
class __TwigTemplate_c1c9e8b20dd3beb01a606b2f6f0b7af0a4dfe49805e8648ea730c3074b8f20d1 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
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
        echo "<div class=\"item\">
  <div class=\"hover-img\">
    <figure>
      <img src=\"";
        // line 4
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" alt=\"Project Title here\">
    </figure>
    <div class=\"fh5co-projects-overlay\">
      <h3 class=\"from-top\">";
        // line 7
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo " <span class=\"category\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_hover_text"] ?? null), "html", null, true));
        echo "</span></h3>
      <div class=\"fh5co-projects-action from-bottom\">
        <a href=\"";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" class=\"goto-preview image-popup\"><i class=\"ti-zoom-in\"></i></a>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\" class=\"goto-details\"><i class=\"ti-share\"></i></a>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"item\">
  <div class=\"hover-img\">
    <figure>
      <img src=\"{{ field_image }}\" alt=\"Project Title here\">
    </figure>
    <div class=\"fh5co-projects-overlay\">
      <h3 class=\"from-top\">{{ title }} <span class=\"category\">{{ field_hover_text }}</span></h3>
      <div class=\"fh5co-projects-action from-bottom\">
        <a href=\"{{ field_image }}\" class=\"goto-preview image-popup\"><i class=\"ti-zoom-in\"></i></a>
        <a href=\"{{ view_node }}\" class=\"goto-details\"><i class=\"ti-share\"></i></a>
      </div>
    </div>
  </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 10,  74 => 9,  67 => 7,  61 => 4,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"item\">
  <div class=\"hover-img\">
    <figure>
      <img src=\"{{ field_image }}\" alt=\"Project Title here\">
    </figure>
    <div class=\"fh5co-projects-overlay\">
      <h3 class=\"from-top\">{{ title }} <span class=\"category\">{{ field_hover_text }}</span></h3>
      <div class=\"fh5co-projects-action from-bottom\">
        <a href=\"{{ field_image }}\" class=\"goto-preview image-popup\"><i class=\"ti-zoom-in\"></i></a>
        <a href=\"{{ view_node }}\" class=\"goto-details\"><i class=\"ti-share\"></i></a>
      </div>
    </div>
  </div>
</div>", "");
    }
}
