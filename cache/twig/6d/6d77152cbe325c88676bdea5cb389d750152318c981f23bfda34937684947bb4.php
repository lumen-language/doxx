<?php

/* partials/sidebar.html.twig */
class __TwigTemplate_fb6154ece4ebfef4323eeb08601cb17e1189558902fb37a8570b60f530d2a1ee extends Twig_Template
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
        // line 25
        echo "
";
        // line 38
        echo "
";
        // line 39
        $context["macro"] = $this;
        // line 40
        echo "
<div class=\"scrollbar-inner\">
    <div class=\"highlightable\">
        ";
        // line 43
        if ($this->getAttribute(($context["theme_config"] ?? null), "top_level_version", array())) {
            // line 44
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["pages"] ?? null), "children", array()));
            foreach ($context['_seq'] as $context["slug"] => $context["ver"]) {
                // line 45
                echo "                ";
                echo $context["macro"]->getversion($context["ver"]);
                echo "
                <ul id=\"";
                // line 46
                echo $context["slug"];
                echo "\" class=\"topics\">
                ";
                // line 47
                echo $context["macro"]->getloop($context["ver"], "");
                echo "
                </ul>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['slug'], $context['ver'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "        ";
        } else {
            // line 51
            echo "            <ul class=\"topics\">
                ";
            // line 52
            if ($this->getAttribute(($context["theme_config"] ?? null), "root_page", array())) {
                // line 53
                echo "                    ";
                echo $context["macro"]->getloop($this->getAttribute(($context["page"] ?? null), "find", array(0 => $this->getAttribute(($context["theme_config"] ?? null), "root_page", array())), "method"), "");
                echo "
                ";
            } else {
                // line 55
                echo "            ";
                echo $context["macro"]->getloop(($context["pages"] ?? null), "");
                echo "
                ";
            }
            // line 57
            echo "            </ul>
        ";
        }
        // line 59
        echo "        <hr />

        <a class=\"padding\" href=\"#\" data-clear-history-toggle><i
                    class=\"fa fa-fw fa-history\"></i> ";
        // line 62
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_CLEAR_HISTORY");
        echo "</a><br/>

        <section id=\"footer\">
            <p>";
        // line 65
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("THEME_LEARN2_BUILT_WITH_GRAV");
        echo "</p>
        </section>
    </div>
</div>
";
    }

    // line 1
    public function getloop($__page__ = null, $__parent_loop__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "page" => $__page__,
            "parent_loop" => $__parent_loop__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context["self"] = $this;
            // line 3
            echo "
    ";
            // line 4
            if ((twig_length_filter($this->env, ($context["parent_loop"] ?? null)) > 0)) {
                // line 5
                echo "        ";
                $context["data_level"] = ($context["parent_loop"] ?? null);
                // line 6
                echo "    ";
            } else {
                // line 7
                echo "        ";
                $context["data_level"] = 0;
                // line 8
                echo "    ";
            }
            // line 9
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "children", array()), "visible", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 10
                echo "        ";
                $context["parent_page"] = (($this->getAttribute($context["p"], "activeChild", array())) ? (" parent") : (""));
                // line 11
                echo "        ";
                $context["current_page"] = (($this->getAttribute($context["p"], "active", array())) ? (" active") : (""));
                // line 12
                echo "        <li class=\"dd-item";
                echo ($context["parent_page"] ?? null);
                echo ($context["current_page"] ?? null);
                echo "\" data-nav-id=\"";
                echo $this->getAttribute($context["p"], "route", array());
                echo "\">
            <a href=\"";
                // line 13
                echo $this->getAttribute($context["p"], "url", array());
                echo "\" ";
                if ($this->getAttribute($this->getAttribute($context["p"], "header", array()), "class", array())) {
                    echo "class=\"";
                    echo $this->getAttribute($this->getAttribute($context["p"], "header", array()), "class", array());
                    echo "\"";
                }
                echo ">
                <i class=\"fa fa-check read-icon\"></i>
                <span><b>";
                // line 15
                if ((($context["data_level"] ?? null) == 0)) {
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo ". ";
                }
                echo "</b>";
                echo $this->getAttribute($context["p"], "menu", array());
                echo "</span>
            </a>
            ";
                // line 17
                if (($this->getAttribute($this->getAttribute($context["p"], "children", array()), "count", array()) > 0)) {
                    // line 18
                    echo "            <ul>
                ";
                    // line 19
                    echo $context["self"]->getloop($context["p"], ((((isset($context["parent_loop"]) || array_key_exists("parent_loop", $context))) ? (_twig_default_filter(($context["parent_loop"] ?? null), 0)) : (0)) + $this->getAttribute($context["loop"], "index", array())));
                    echo "
            </ul>
            ";
                }
                // line 22
                echo "        </li>
    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 26
    public function getversion($__p__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "p" => $__p__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 27
            echo "    ";
            $context["parent_page"] = (($this->getAttribute(($context["p"] ?? null), "activeChild", array())) ? (" parent") : (""));
            // line 28
            echo "    ";
            $context["current_page"] = (($this->getAttribute(($context["p"] ?? null), "active", array())) ? (" active") : (""));
            // line 29
            echo "    <h5 class=\"";
            echo ($context["parent_page"] ?? null);
            echo ($context["current_page"] ?? null);
            echo "\">
        ";
            // line 30
            if (($this->getAttribute(($context["p"] ?? null), "activeChild", array()) || $this->getAttribute(($context["p"] ?? null), "active", array()))) {
                // line 31
                echo "        <i class=\"fa fa-chevron-down fa-fw\"></i>
        ";
            } else {
                // line 33
                echo "        <i class=\"fa fa-plus fa-fw\"></i>
        ";
            }
            // line 35
            echo "        <a href=\"";
            echo $this->getAttribute(($context["p"] ?? null), "url", array());
            echo "\">";
            echo $this->getAttribute(($context["p"] ?? null), "menu", array());
            echo "</a>
    </h5>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "partials/sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 35,  256 => 33,  252 => 31,  250 => 30,  244 => 29,  241 => 28,  238 => 27,  226 => 26,  198 => 22,  192 => 19,  189 => 18,  187 => 17,  177 => 15,  166 => 13,  158 => 12,  155 => 11,  152 => 10,  134 => 9,  131 => 8,  128 => 7,  125 => 6,  122 => 5,  120 => 4,  117 => 3,  114 => 2,  101 => 1,  92 => 65,  86 => 62,  81 => 59,  77 => 57,  71 => 55,  65 => 53,  63 => 52,  60 => 51,  57 => 50,  48 => 47,  44 => 46,  39 => 45,  34 => 44,  32 => 43,  27 => 40,  25 => 39,  22 => 38,  19 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% macro loop(page, parent_loop) %}
    {% import _self as self %}

    {% if parent_loop|length > 0 %}
        {% set data_level = parent_loop %}
    {% else %}
        {% set data_level = 0 %}
    {% endif %}
    {% for p in page.children.visible %}
        {% set parent_page = p.activeChild ? ' parent' : '' %}
        {% set current_page = p.active ? ' active' : '' %}
        <li class=\"dd-item{{ parent_page }}{{ current_page }}\" data-nav-id=\"{{ p.route }}\">
            <a href=\"{{ p.url }}\" {% if p.header.class %}class=\"{{ p.header.class }}\"{% endif %}>
                <i class=\"fa fa-check read-icon\"></i>
                <span><b>{% if data_level == 0 %}{{ loop.index }}. {% endif %}</b>{{ p.menu }}</span>
            </a>
            {% if p.children.count > 0 %}
            <ul>
                {{ self.loop(p, parent_loop|default(0)+loop.index) }}
            </ul>
            {% endif %}
        </li>
    {% endfor %}
{% endmacro %}

{% macro version(p) %}
    {% set parent_page = p.activeChild ? ' parent' : '' %}
    {% set current_page = p.active ? ' active' : '' %}
    <h5 class=\"{{ parent_page }}{{ current_page }}\">
        {% if p.activeChild or p.active %}
        <i class=\"fa fa-chevron-down fa-fw\"></i>
        {% else %}
        <i class=\"fa fa-plus fa-fw\"></i>
        {% endif %}
        <a href=\"{{ p.url }}\">{{ p.menu }}</a>
    </h5>
{% endmacro %}

{% import _self as macro %}

<div class=\"scrollbar-inner\">
    <div class=\"highlightable\">
        {% if theme_config.top_level_version %}
            {% for slug, ver in pages.children %}
                {{ macro.version(ver) }}
                <ul id=\"{{ slug }}\" class=\"topics\">
                {{ macro.loop(ver, '') }}
                </ul>
            {% endfor %}
        {% else %}
            <ul class=\"topics\">
                {% if theme_config.root_page %}
                    {{ macro.loop(page.find(theme_config.root_page), '') }}
                {% else %}
            {{ macro.loop(pages, '') }}
                {% endif %}
            </ul>
        {% endif %}
        <hr />

        <a class=\"padding\" href=\"#\" data-clear-history-toggle><i
                    class=\"fa fa-fw fa-history\"></i> {{ 'THEME_LEARN2_CLEAR_HISTORY'|t }}</a><br/>

        <section id=\"footer\">
            <p>{{ 'THEME_LEARN2_BUILT_WITH_GRAV'|t }}</p>
        </section>
    </div>
</div>
", "partials/sidebar.html.twig", "/Users/emily/doxx/user/themes/learn2/templates/partials/sidebar.html.twig");
    }
}
