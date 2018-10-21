<?php

/* modular.html.twig */
class __TwigTemplate_a64c7d9a05063b0e79e8b3dccfad3e88524c34504007c0c293cb50ef04e41c16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("partials/base.html.twig", "modular.html.twig", 2);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

    ";
        // line 7
        $context["editorIds"] = array();
        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 10
            echo "
        ";
            // line 11
            echo $this->getAttribute($context["module"], "content", array());
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    ";
        // line 15
        $context["next"] = $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "next", array());
        // line 16
        echo "
    ";
        // line 17
        if (($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "next", array()) != false)) {
            // line 18
            echo "        <a style=\"width: 100%; display: inline-block; text-align: right;\" href=\"/tutorial/";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "next", array());
            echo "\">
        Next: ";
            // line 19
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "next_text", array());
            echo " &rangle;
        </a>
    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $this->loadTemplate("partials/mirror_bottom_scripts.html.twig", "modular.html.twig", 23)->display($context);
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  82 => 23,  79 => 22,  73 => 19,  68 => 18,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  49 => 11,  46 => 10,  42 => 9,  39 => 8,  37 => 7,  31 => 5,  28 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends 'partials/base.html.twig' %}

{% block content %}
    {{ page.content }}

    {% set editorIds = [] %}

    {% for module in page.collection %}

        {{ module.content }}

    {% endfor %}

    {% set next = page.header.next %}

    {% if page.header.next != false %}
        <a style=\"width: 100%; display: inline-block; text-align: right;\" href=\"/tutorial/{{ page.header.next }}\">
        Next: {{ page.header.next_text }} &rangle;
        </a>
    {% endif %}

    {% include 'partials/mirror_bottom_scripts.html.twig' %}

{% endblock %}
", "modular.html.twig", "/Users/emily/doxx/user/themes/learn2/templates/modular.html.twig");
    }
}
