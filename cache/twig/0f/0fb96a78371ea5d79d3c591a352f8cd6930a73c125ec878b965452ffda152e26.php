<?php

/* @Page:/Users/emily/doxx/user/pages/01.tutorial/03.conditionals/_if/_code */
class __TwigTemplate_5061b0bb38f5d638195d479715a38d8c327c975eeb7a1ed17e4bd324934468b7 extends Twig_Template
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
  <textarea name=\"cmEditorCondIfCode\" id=\"cmEditorCondIfCode\" cols=\"30\" class=\"cmEditor\">

  (if true 10 20)
(if false 10 20)
(+ (if false 10 20) 5)

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
<pre id=\"outputCondIfCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/emily/doxx/user/pages/01.tutorial/03.conditionals/_if/_code";
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
  <textarea name=\"cmEditorCondIfCode\" id=\"cmEditorCondIfCode\" cols=\"30\" class=\"cmEditor\">

  (if true 10 20)
(if false 10 20)
(+ (if false 10 20) 5)

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
<pre id=\"outputCondIfCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>", "@Page:/Users/emily/doxx/user/pages/01.tutorial/03.conditionals/_if/_code", "");
    }
}
