<?php

/* partials/base.html.twig */
class __TwigTemplate_bc2334aadba4a8c8b9fd8de5d47c64465f6132c624b5ab755ba0208805740a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'topbar' => array($this, 'block_topbar'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
            'navigation' => array($this, 'block_navigation'),
            'analytics' => array($this, 'block_analytics'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["theme_config"] = $this->getAttribute($this->getAttribute(($context["config"] ?? null), "themes", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", array()), "pages", array()), "theme", array()));
        // line 2
        $context["github_link_position"] = (((isset($context["github_link_position"]) || array_key_exists("github_link_position", $context))) ? (($context["github_link_position"] ?? null)) : ($this->getAttribute($this->getAttribute(($context["theme_config"] ?? null), "github", array()), "position", array())));
        // line 3
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 4
        echo (($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) ? ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "language", array()), "getLanguage", array())) : ("en"));
        echo "\">
<head>
    ";
        // line 6
        $this->displayBlock('head', $context, $blocks);
        // line 46
        echo "</head>
<body class=\"searchbox-hidden ";
        // line 47
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", array());
        echo "\">
    ";
        // line 48
        $this->displayBlock('sidebar', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 93
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 98
        echo " </body>
</html>
";
    }

    // line 6
    public function block_head($context, array $blocks = array())
    {
        // line 7
        echo "    <meta charset=\"utf-8\" />
    <title>";
        // line 8
        if ($this->getAttribute(($context["header"] ?? null), "title", array())) {
            echo $this->getAttribute(($context["header"] ?? null), "title", array());
            echo " | ";
        }
        echo $this->getAttribute(($context["site"] ?? null), "title", array());
        echo "</title>
    ";
        // line 9
        $this->loadTemplate("partials/metadata.html.twig", "partials/base.html.twig", 9)->display($context);
        // line 10
        echo "    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"";
        // line 11
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"";
        // line 12
        echo ($context["base_url_absolute"] ?? null);
        echo "/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 13
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("theme://images/favicon.png");
        echo "\">

    ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
    ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "
    ";
        // line 43
        $this->loadTemplate("partials/compiled-scripts.html.twig", "partials/base.html.twig", 43)->display($context);
        // line 44
        echo "
    ";
    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 16
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css-compiled/main.css", 1 => 102), "method");
        // line 17
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/railscasts.css", 1 => 101), "method");
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/editor.css", 1 => 101), "method");
        // line 19
        echo "         ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/themeOverrides.css", 1 => 100), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/featherlight.min.css"), "method");
        // line 23
        echo "
        ";
        // line 24
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 25
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 26
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 27
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 28
            echo "        ";
        }
        // line 29
        echo "
        ";
        // line 30
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
    ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 35
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/clipboard.min.js"), "method");
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.scrollbar.min.js"), "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/learn.js"), "method");
        // line 40
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        // line 49
        echo "    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"";
        // line 52
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) : (($context["base_url_absolute"] ?? null)));
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 52)->display($context);
        echo "</a>
                ";
        // line 53
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 53)->display($context);
        // line 54
        echo "            </div>
        </div>
        ";
        // line 56
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 56)->display($context);
        // line 57
        echo "    </nav>
    ";
    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        // line 61
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 67
        $this->displayBlock('topbar', $context, $blocks);
        // line 80
        echo "
            ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 82
        echo "
            ";
        // line 83
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "
        </div>
        ";
        // line 90
        $this->displayBlock('navigation', $context, $blocks);
        // line 91
        echo "    </section>
    ";
    }

    // line 67
    public function block_topbar($context, array $blocks = array())
    {
        if (((($context["github_link_position"] ?? null) == "top") || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 68
            echo "            <div id=\"top-bar\">
                ";
            // line 69
            if ((($context["github_link_position"] ?? null) == "top")) {
                // line 70
                echo "                <div id=\"top-github-link\">
                ";
                // line 71
                $this->loadTemplate("partials/github_link.html.twig", "partials/base.html.twig", 71)->display($context);
                // line 72
                echo "                </div>
                ";
            }
            // line 74
            echo "
                ";
            // line 75
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
                // line 76
                echo "                ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 76)->display($context);
                // line 77
                echo "                ";
            }
            // line 78
            echo "            </div>
            ";
        }
    }

    // line 81
    public function block_content($context, array $blocks = array())
    {
    }

    // line 83
    public function block_footer($context, array $blocks = array())
    {
        // line 84
        echo "                ";
        if ((($context["github_link_position"] ?? null) == "bottom")) {
            // line 85
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 85)->display($context);
            // line 86
            echo "                ";
        }
        // line 87
        echo "            ";
    }

    // line 90
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 93
    public function block_analytics($context, array $blocks = array())
    {
        // line 94
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", array())) {
            // line 95
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 95)->display($context);
            // line 96
            echo "        ";
        }
        // line 97
        echo "    ";
    }

    public function getTemplateName()
    {
        return "partials/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 97,  326 => 96,  323 => 95,  320 => 94,  317 => 93,  312 => 90,  308 => 87,  305 => 86,  302 => 85,  299 => 84,  296 => 83,  291 => 81,  285 => 78,  282 => 77,  279 => 76,  277 => 75,  274 => 74,  270 => 72,  268 => 71,  265 => 70,  263 => 69,  260 => 68,  256 => 67,  251 => 91,  249 => 90,  245 => 88,  243 => 83,  240 => 82,  238 => 81,  235 => 80,  233 => 67,  225 => 61,  222 => 60,  217 => 57,  215 => 56,  211 => 54,  209 => 53,  203 => 52,  198 => 49,  195 => 48,  188 => 40,  185 => 39,  182 => 38,  179 => 37,  176 => 36,  173 => 35,  170 => 34,  167 => 33,  161 => 30,  158 => 29,  155 => 28,  152 => 27,  149 => 26,  146 => 25,  144 => 24,  141 => 23,  138 => 22,  135 => 21,  132 => 20,  129 => 19,  126 => 18,  123 => 17,  120 => 16,  117 => 15,  112 => 44,  110 => 43,  107 => 42,  105 => 33,  102 => 32,  100 => 15,  95 => 13,  91 => 12,  87 => 11,  84 => 10,  82 => 9,  74 => 8,  71 => 7,  68 => 6,  62 => 98,  59 => 93,  57 => 60,  54 => 59,  52 => 48,  46 => 47,  43 => 46,  41 => 6,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set theme_config = attribute(config.themes, config.system.pages.theme) %}
{% set github_link_position = github_link_position is defined ? github_link_position : theme_config.github.position %}
<!DOCTYPE html>
<html lang=\"{{ grav.language.getLanguage ?: 'en' }}\">
<head>
    {% block head %}
    <meta charset=\"utf-8\" />
    <title>{% if header.title %}{{ header.title }} | {% endif %}{{ site.title }}</title>
    {% include 'partials/metadata.html.twig' %}
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no\" />
    <link rel=\"alternate\" type=\"application/atom+xml\" href=\"{{ base_url_absolute}}/feed:atom\" title=\"Atom Feed\" />
    <link rel=\"alternate\" type=\"application/rss+xml\" href=\"{{ base_url_absolute}}/feed:rss\" title=\"RSS Feed\" />
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\">

    {% block stylesheets %}
        {% do assets.addCss('theme://css-compiled/main.css',102) %}
        {% do assets.addCss('theme://css/railscasts.css',101) %}
        {% do assets.addCss('theme://css/editor.css',101) %}
         {% do assets.addCss('theme://css/themeOverrides.css',100) %}
        {% do assets.addCss('theme://css/custom.css',100) %}
        {% do assets.addCss('theme://css/font-awesome.min.css',100) %}
        {% do assets.addCss('theme://css/featherlight.min.css') %}

        {% if browser.getBrowser == 'msie' and browser.getVersion >= 8 and browser.getVersion <= 9 %}
            {% do assets.addCss('theme://css/nucleus-ie9.css') %}
            {% do assets.addCss('theme://css/pure-0.5.0/grids-min.css') %}
            {% do assets.addJs('theme://js/html5shiv-printshiv.min.js') %}
        {% endif %}

        {{ assets.css() }}
    {% endblock %}

    {% block javascripts %}
        {% do assets.addJs('jquery',101) %}
        {% do assets.addJs('theme://js/modernizr.custom.71422.js',100) %}
        {% do assets.addJs('theme://js/featherlight.min.js') %}
        {% do assets.addJs('theme://js/clipboard.min.js') %}
        {% do assets.addJs('theme://js/jquery.scrollbar.min.js') %}
        {% do assets.addJs('theme://js/learn.js') %}
        {{ assets.js() }}
    {% endblock %}

    {% include 'partials/compiled-scripts.html.twig' %}

    {% endblock %}
</head>
<body class=\"searchbox-hidden {{ page.header.body_classes }}\" data-url=\"{{ page.route }}\">
    {% block sidebar %}
    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"{{ theme_config.home_url ?: base_url_absolute }}\">{% include 'partials/logo.html.twig' %}</a>
                {% include 'partials/search.html.twig' %}
            </div>
        </div>
        {% include 'partials/sidebar.html.twig' %}
    </nav>
    {% endblock %}

    {% block body %}
    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            {% block topbar %}{% if  github_link_position == 'top' or config.plugins.breadcrumbs.enabled %}
            <div id=\"top-bar\">
                {% if  github_link_position == 'top' %}
                <div id=\"top-github-link\">
                {% include 'partials/github_link.html.twig' %}
                </div>
                {% endif %}

                {% if config.plugins.breadcrumbs.enabled %}
                {% include 'partials/breadcrumbs.html.twig' %}
                {% endif %}
            </div>
            {% endif %}{% endblock %}

            {% block content %}{% endblock %}

            {% block footer %}
                {% if  github_link_position == 'bottom' %}
                {% include 'partials/github_note.html.twig' %}
                {% endif %}
            {% endblock %}

        </div>
        {% block navigation %}{% endblock %}
    </section>
    {% endblock %}
    {% block analytics %}
        {% if theme_config.google_analytics_code %}
        {% include 'partials/analytics.html.twig' %}
        {% endif %}
    {% endblock %}
 </body>
</html>
", "partials/base.html.twig", "/Users/emily/Downloads/grav-skeleton-rtfm-site/user/themes/learn2/templates/partials/base.html.twig");
    }
}
