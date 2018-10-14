<?php

/* chapter.html.twig */
class __TwigTemplate_acb79d4c600b8d7714b5353f919fb3c8e2e17437b83a239fff7f45d5f06e0129 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docs.html.twig", "chapter.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "docs.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t<div id=\"chapter\">
    \t<div id=\"body-inner\">
\t\t\t";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "chapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'docs.html.twig' %}

{% block content %}
\t<div id=\"chapter\">
    \t<div id=\"body-inner\">
\t\t\t{{ page.content }}
\t\t</div>
    </div>
{% endblock %}
", "chapter.html.twig", "/Users/emily/Downloads/grav-skeleton-rtfm-site/user/themes/learn2/templates/chapter.html.twig");
    }
}
