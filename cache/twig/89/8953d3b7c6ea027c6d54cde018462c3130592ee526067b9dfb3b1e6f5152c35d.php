<?php

/* @Page:/Users/emily/doxx/user/pages/01.tutorial/08.quotation/_alt/_code */
class __TwigTemplate_78d4c76faecce5476395d4fcc37220ab0695dab564405c8c7d7071e77ce897a4 extends Twig_Template
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
  <div class=\"wrapper\"> <!-- wrapper in charge of layout resizing -->
    <div class=\"editor\">
  \t<!-- ; To enable key repeat on OS X, run this terminal command: -->
  \t<!-- ; defaults write -g ApplePressAndHoldEnabled -bool false -->
  \t<!-- ; See https://github.com/codemirror/CodeMirror/issues/1849 -->
  <textarea name=\"cmEditorQuoteAltCode\" id=\"cmEditorQuoteAltCode\" cols=\"30\" class=\"cmEditor\">

  &#039;a
(let x &#039;(a: 10 b: 20)
  (get x &#039;a))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputQuoteAltCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/emily/doxx/user/pages/01.tutorial/08.quotation/_alt/_code";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
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
  <div class=\"wrapper\"> <!-- wrapper in charge of layout resizing -->
    <div class=\"editor\">
  \t<!-- ; To enable key repeat on OS X, run this terminal command: -->
  \t<!-- ; defaults write -g ApplePressAndHoldEnabled -bool false -->
  \t<!-- ; See https://github.com/codemirror/CodeMirror/issues/1849 -->
  <textarea name=\"cmEditorQuoteAltCode\" id=\"cmEditorQuoteAltCode\" cols=\"30\" class=\"cmEditor\">

  &#039;a
(let x &#039;(a: 10 b: 20)
  (get x &#039;a))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputQuoteAltCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>", "@Page:/Users/emily/doxx/user/pages/01.tutorial/08.quotation/_alt/_code", "");
    }
}
