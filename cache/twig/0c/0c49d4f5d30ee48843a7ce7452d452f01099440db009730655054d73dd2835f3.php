<?php

/* modular/modular.html.twig */
class __TwigTemplate_b649abe107e3a9b27c008dbeae0475f20c2a392774de9c93d0e626e2a2121aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "

    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 6
            echo "
        ";
            // line 7
            echo $this->getAttribute($context["module"], "content", array());
            echo "

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
";
    }

    public function getTemplateName()
    {
        return "modular/modular.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  42 => 7,  39 => 6,  35 => 5,  29 => 3,  23 => 2,  20 => 1,);
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
{% block content %}
    {{ page.content }}

    {% for module in page.collection %}

        {{ module.content }}

    {% endfor %}

{% endblock %}
", "modular/modular.html.twig", "/Users/emily/doxx/user/themes/learn2/templates/modular/modular.html.twig");
    }
}
