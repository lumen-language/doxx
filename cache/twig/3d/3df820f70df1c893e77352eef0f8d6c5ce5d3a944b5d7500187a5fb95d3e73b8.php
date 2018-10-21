<?php

/* @Page:/Users/emily/doxx/user/pages/01.tutorial/08.quotation/_stringsLists/_code */
class __TwigTemplate_17e8b78f0c11e175af86576dfc4f8823d3cc870ea0798b4c3049c1594f8d9553 extends Twig_Template
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
  <textarea name=\"cmEditorQuoteStrListCode\" id=\"cmEditorQuoteStrListCode\" cols=\"30\" class=\"cmEditor\">

  (quote a)
(quote &quot;hereanother&quot;)
(quote &quot;two\\nlines&quot;)
(quote (a b c))
(quote (1 2 b: baz z: &quot;frob&quot;))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputQuoteStrListsCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/emily/doxx/user/pages/01.tutorial/08.quotation/_stringsLists/_code";
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
  <textarea name=\"cmEditorQuoteStrListCode\" id=\"cmEditorQuoteStrListCode\" cols=\"30\" class=\"cmEditor\">

  (quote a)
(quote &quot;hereanother&quot;)
(quote &quot;two\\nlines&quot;)
(quote (a b c))
(quote (1 2 b: baz z: &quot;frob&quot;))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputQuoteStrListsCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>", "@Page:/Users/emily/doxx/user/pages/01.tutorial/08.quotation/_stringsLists/_code", "");
    }
}
