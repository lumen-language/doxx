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
        // line 48
        echo "</head>
<body class=\"searchbox-hidden ";
        // line 49
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "body_classes", array());
        echo "\" data-url=\"";
        echo $this->getAttribute(($context["page"] ?? null), "route", array());
        echo "\">
    ";
        // line 50
        $this->displayBlock('sidebar', $context, $blocks);
        // line 61
        echo "
    ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 95
        echo "    ";
        $this->displayBlock('analytics', $context, $blocks);
        // line 100
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
        echo "\" />
    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:300,400,500\" rel=\"stylesheet\" />

        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
    ";
        // line 35
        $this->displayBlock('javascripts', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->loadTemplate("partials/compiled-scripts.html.twig", "partials/base.html.twig", 45)->display($context);
        // line 46
        echo "
    ";
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        // line 18
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/railscasts.css", 1 => 101), "method");
        // line 19
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/editor.css", 1 => 101), "method");
        // line 20
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/themeOverrides.css", 1 => 100), "method");
        // line 21
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/learn_purple.css", 1 => 100), "method");
        // line 22
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/custom.css", 1 => 100), "method");
        // line 23
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/font-awesome.min.css", 1 => 100), "method");
        // line 24
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/featherlight.min.css"), "method");
        // line 25
        echo "
        ";
        // line 26
        if (((($this->getAttribute(($context["browser"] ?? null), "getBrowser", array()) == "msie") && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) >= 8)) && ($this->getAttribute(($context["browser"] ?? null), "getVersion", array()) <= 9))) {
            // line 27
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/nucleus-ie9.css"), "method");
            // line 28
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addCss", array(0 => "theme://css/pure-0.5.0/grids-min.css"), "method");
            // line 29
            echo "            ";
            $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/html5shiv-printshiv.min.js"), "method");
            // line 30
            echo "        ";
        }
        // line 31
        echo "
        ";
        // line 32
        echo $this->getAttribute(($context["assets"] ?? null), "css", array(), "method");
        echo "
    ";
    }

    // line 35
    public function block_javascripts($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "jquery", 1 => 101), "method");
        // line 37
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/modernizr.custom.71422.js", 1 => 100), "method");
        // line 38
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/featherlight.min.js"), "method");
        // line 39
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/clipboard.min.js"), "method");
        // line 40
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/jquery.scrollbar.min.js"), "method");
        // line 41
        echo "        ";
        $this->getAttribute(($context["assets"] ?? null), "addJs", array(0 => "theme://js/learn.js"), "method");
        // line 42
        echo "        ";
        echo $this->getAttribute(($context["assets"] ?? null), "js", array(), "method");
        echo "
    ";
    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        // line 51
        echo "    <nav id=\"sidebar\">
        <div id=\"header-wrapper\">
            <div id=\"header\">
                <a id=\"logo\" href=\"";
        // line 54
        echo (($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) ? ($this->getAttribute(($context["theme_config"] ?? null), "home_url", array())) : (($context["base_url_absolute"] ?? null)));
        echo "\">";
        $this->loadTemplate("partials/logo.html.twig", "partials/base.html.twig", 54)->display($context);
        echo "</a>
                ";
        // line 55
        $this->loadTemplate("partials/search.html.twig", "partials/base.html.twig", 55)->display($context);
        // line 56
        echo "            </div>
        </div>
        ";
        // line 58
        $this->loadTemplate("partials/sidebar.html.twig", "partials/base.html.twig", 58)->display($context);
        // line 59
        echo "    </nav>
    ";
    }

    // line 62
    public function block_body($context, array $blocks = array())
    {
        // line 63
        echo "    <section id=\"body\">
        <div id=\"overlay\"></div>

        <div class=\"padding highlightable\">
            <a href=\"#\" id=\"sidebar-toggle\" data-sidebar-toggle><i class=\"fa fa-2x fa-bars\"></i></a>

            ";
        // line 69
        $this->displayBlock('topbar', $context, $blocks);
        // line 82
        echo "
            ";
        // line 83
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "
            ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "
        </div>
        ";
        // line 92
        $this->displayBlock('navigation', $context, $blocks);
        // line 93
        echo "    </section>
    ";
    }

    // line 69
    public function block_topbar($context, array $blocks = array())
    {
        if (((($context["github_link_position"] ?? null) == "top") || $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array()))) {
            // line 70
            echo "            <div id=\"top-bar\">
                ";
            // line 71
            if ((($context["github_link_position"] ?? null) == "top")) {
                // line 72
                echo "                <div id=\"top-github-link\">
                ";
                // line 73
                $this->loadTemplate("partials/github_link.html.twig", "partials/base.html.twig", 73)->display($context);
                // line 74
                echo "                </div>
                ";
            }
            // line 76
            echo "
                ";
            // line 77
            if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", array()), "breadcrumbs", array()), "enabled", array())) {
                // line 78
                echo "                ";
                $this->loadTemplate("partials/breadcrumbs.html.twig", "partials/base.html.twig", 78)->display($context);
                // line 79
                echo "                ";
            }
            // line 80
            echo "            </div>
            ";
        }
    }

    // line 83
    public function block_content($context, array $blocks = array())
    {
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "                ";
        if ((($context["github_link_position"] ?? null) == "bottom")) {
            // line 87
            echo "                ";
            $this->loadTemplate("partials/github_note.html.twig", "partials/base.html.twig", 87)->display($context);
            // line 88
            echo "                ";
        }
        // line 89
        echo "            ";
    }

    // line 92
    public function block_navigation($context, array $blocks = array())
    {
    }

    // line 95
    public function block_analytics($context, array $blocks = array())
    {
        // line 96
        echo "        ";
        if ($this->getAttribute(($context["theme_config"] ?? null), "google_analytics_code", array())) {
            // line 97
            echo "        ";
            $this->loadTemplate("partials/analytics.html.twig", "partials/base.html.twig", 97)->display($context);
            // line 98
            echo "        ";
        }
        // line 99
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
        return array (  332 => 99,  329 => 98,  326 => 97,  323 => 96,  320 => 95,  315 => 92,  311 => 89,  308 => 88,  305 => 87,  302 => 86,  299 => 85,  294 => 83,  288 => 80,  285 => 79,  282 => 78,  280 => 77,  277 => 76,  273 => 74,  271 => 73,  268 => 72,  266 => 71,  263 => 70,  259 => 69,  254 => 93,  252 => 92,  248 => 90,  246 => 85,  243 => 84,  241 => 83,  238 => 82,  236 => 69,  228 => 63,  225 => 62,  220 => 59,  218 => 58,  214 => 56,  212 => 55,  206 => 54,  201 => 51,  198 => 50,  191 => 42,  188 => 41,  185 => 40,  182 => 39,  179 => 38,  176 => 37,  173 => 36,  170 => 35,  164 => 32,  161 => 31,  158 => 30,  155 => 29,  152 => 28,  149 => 27,  147 => 26,  144 => 25,  141 => 24,  138 => 23,  135 => 22,  132 => 21,  129 => 20,  126 => 19,  123 => 18,  121 => 17,  118 => 16,  113 => 46,  111 => 45,  108 => 44,  106 => 35,  103 => 34,  101 => 16,  95 => 13,  91 => 12,  87 => 11,  84 => 10,  82 => 9,  74 => 8,  71 => 7,  68 => 6,  62 => 100,  59 => 95,  57 => 62,  54 => 61,  52 => 50,  46 => 49,  43 => 48,  41 => 6,  36 => 4,  33 => 3,  31 => 2,  29 => 1,);
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
    <link rel=\"icon\" type=\"image/png\" href=\"{{ url('theme://images/favicon.png') }}\" />
    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:300,400,500\" rel=\"stylesheet\" />

        {% block stylesheets %}
        {#{% do assets.addCss('theme://css-compiled/main.css',102) %}#}
        {% do assets.addCss('theme://css/railscasts.css',101) %}
        {% do assets.addCss('theme://css/editor.css',101) %}
        {% do assets.addCss('theme://css/themeOverrides.css',100) %}
        {% do assets.addCss('theme://css/learn_purple.css',100) %}
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
", "partials/base.html.twig", "/Users/emily/doxx/user/themes/learn2/templates/partials/base.html.twig");
    }
}
