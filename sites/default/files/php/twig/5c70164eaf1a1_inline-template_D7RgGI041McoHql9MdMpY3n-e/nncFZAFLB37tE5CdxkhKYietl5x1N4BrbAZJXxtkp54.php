<?php

/* {# inline_template_start #}<div class="col-md-4 col-sm-6 col-xs-12 item">
  <div class="fh5co-image-text">
    <a href="{{ view_node }}" class="fh5co-block-links hover-img">
      <figure>
        <img src="{{ field_image }}" alt="{{ title }}" class="img-responsive">
        <div class="dark-overlay"></div>
      </figure>
      <h2 class="meta-after">{{ title }} </h2>
      <span class="meta text-after">{{ created }}</span>
      {{ body }}
      <p><span class="learn-more">Read more</span></p>
    </a>
  </div>
</div> */
class __TwigTemplate_f4b9742df591612f6871d4da0e9010d8d2cc328a11da96a0399769e5fe0afe48 extends Twig_Template
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
        echo "<div class=\"col-md-4 col-sm-6 col-xs-12 item\">
  <div class=\"fh5co-image-text\">
    <a href=\"";
        // line 3
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["view_node"] ?? null), "html", null, true));
        echo "\" class=\"fh5co-block-links hover-img\">
      <figure>
        <img src=\"";
        // line 5
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["field_image"] ?? null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo "\" class=\"img-responsive\">
        <div class=\"dark-overlay\"></div>
      </figure>
      <h2 class=\"meta-after\">";
        // line 8
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
        echo " </h2>
      <span class=\"meta text-after\">";
        // line 9
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
        echo "</span>
      ";
        // line 10
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["body"] ?? null), "html", null, true));
        echo "
      <p><span class=\"learn-more\">Read more</span></p>
    </a>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "{# inline_template_start #}<div class=\"col-md-4 col-sm-6 col-xs-12 item\">
  <div class=\"fh5co-image-text\">
    <a href=\"{{ view_node }}\" class=\"fh5co-block-links hover-img\">
      <figure>
        <img src=\"{{ field_image }}\" alt=\"{{ title }}\" class=\"img-responsive\">
        <div class=\"dark-overlay\"></div>
      </figure>
      <h2 class=\"meta-after\">{{ title }} </h2>
      <span class=\"meta text-after\">{{ created }}</span>
      {{ body }}
      <p><span class=\"learn-more\">Read more</span></p>
    </a>
  </div>
</div>";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 10,  77 => 9,  73 => 8,  65 => 5,  60 => 3,  56 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "{# inline_template_start #}<div class=\"col-md-4 col-sm-6 col-xs-12 item\">
  <div class=\"fh5co-image-text\">
    <a href=\"{{ view_node }}\" class=\"fh5co-block-links hover-img\">
      <figure>
        <img src=\"{{ field_image }}\" alt=\"{{ title }}\" class=\"img-responsive\">
        <div class=\"dark-overlay\"></div>
      </figure>
      <h2 class=\"meta-after\">{{ title }} </h2>
      <span class=\"meta text-after\">{{ created }}</span>
      {{ body }}
      <p><span class=\"learn-more\">Read more</span></p>
    </a>
  </div>
</div>", "");
    }
}
