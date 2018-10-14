<?php

/* modular/mirror.html.twig */
class __TwigTemplate_f8ae898ab84ea3205ee484c2c737532bc1caebf26ad5ada7a771c26b1fb257e9 extends Twig_Template
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
        // line 1
        echo "<div class=\"interactive-section\">

  <h3>
    ";
        // line 4
        echo $this->getAttribute(($context["page"] ?? null), "title", array());
        echo "
  </h3>

  <p>
    ";
        // line 8
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "
  </p>

  <div class=\"wrapper\"> <!-- wrapper in charge of layout resizing -->
    <div class=\"editor\">
  \t<!-- ; To enable key repeat on OS X, run this terminal command: -->
  \t<!-- ; defaults write -g ApplePressAndHoldEnabled -bool false -->
  \t<!-- ; See https://github.com/codemirror/CodeMirror/issues/1849 -->
  <textarea name=\"";
        // line 16
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "editorId", array());
        echo "\" id=\"";
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "editorId", array());
        echo "\" cols=\"30\" class=\"cmEditor\">

  ; these are equivalent.
  (def make-adder (n) (fn (_) (+ _ n)))
  (def make-adder (n) [+ _ n])

  (def add2 (make-adder 2))
  (add2 40)

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"";
        // line 29
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "outputId", array());
        echo "\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "modular/mirror.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 29,  42 => 16,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"interactive-section\">

  <h3>
    {{ page.title }}
  </h3>

  <p>
    {{ page.content }}
  </p>

  <div class=\"wrapper\"> <!-- wrapper in charge of layout resizing -->
    <div class=\"editor\">
  \t<!-- ; To enable key repeat on OS X, run this terminal command: -->
  \t<!-- ; defaults write -g ApplePressAndHoldEnabled -bool false -->
  \t<!-- ; See https://github.com/codemirror/CodeMirror/issues/1849 -->
  <textarea name=\"{{ page.header.editorId }}\" id=\"{{ page.header.editorId }}\" cols=\"30\" class=\"cmEditor\">

  ; these are equivalent.
  (def make-adder (n) (fn (_) (+ _ n)))
  (def make-adder (n) [+ _ n])

  (def add2 (make-adder 2))
  (add2 40)

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"{{ page.header.outputId }}\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>", "modular/mirror.html.twig", "/Users/emily/Downloads/grav-skeleton-rtfm-site/user/themes/learn2/templates/modular/mirror.html.twig");
    }
}
