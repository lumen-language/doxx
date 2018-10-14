<?php

/* chapterexpanded.html.twig */
class __TwigTemplate_80f3f5b842368ef1367ace35fb1ffc017727c926788346078fcfb9bf93b090ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("docs.html.twig", "chapterexpanded.html.twig", 1);
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

\t\t\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "children", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 9
            echo "\t\t\t\t";
            echo $this->getAttribute($context["child"], "content", array());
            echo "
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "chapterexpanded.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  44 => 9,  40 => 8,  35 => 6,  31 => 4,  28 => 3,  11 => 1,);
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

\t\t\t{% for child in page.children %}
\t\t\t\t{{ child.content }}
\t\t\t{% endfor %}
\t\t</div>
    </div>
{% endblock %}
", "chapterexpanded.html.twig", "/Users/emily/Downloads/grav-skeleton-rtfm-site/user/themes/learn2/templates/chapterexpanded.html.twig");
    }
}
