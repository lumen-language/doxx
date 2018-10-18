<?php

/* @Page:/Users/emily/doxx/user/pages/01.tutorial/_01.overview/_lists/_code */
class __TwigTemplate_e15600ad4a74410167b55f49e0a5f8e1eb251d33594e9e2290f6a67355e5bb8e extends Twig_Template
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
  <textarea name=\"cmEditorIntroListsCode\" id=\"cmEditorIntroListsCode\" cols=\"30\" class=\"cmEditor\">

  (+ 10 2)
(abs -10)
(/ 128 2 2 2)
(list 1 2 3 4)

(at (list 1 2 3) 1)
(get (list a: 10 b: 20) &quot;b&quot;)

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputIntroListsCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/emily/doxx/user/pages/01.tutorial/_01.overview/_lists/_code";
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
  <textarea name=\"cmEditorIntroListsCode\" id=\"cmEditorIntroListsCode\" cols=\"30\" class=\"cmEditor\">

  (+ 10 2)
(abs -10)
(/ 128 2 2 2)
(list 1 2 3 4)

(at (list 1 2 3) 1)
(get (list a: 10 b: 20) &quot;b&quot;)

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputIntroListsCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>", "@Page:/Users/emily/doxx/user/pages/01.tutorial/_01.overview/_lists/_code", "");
    }
}
