<?php

/* @Page:/Users/emily/doxx/user/pages/01.tutorial/06.destructuring/_variables/_code */
class __TwigTemplate_f5eef482108e9591e07dc134fbaf1d81dd845520e44a7a6489510e2a5385d229 extends Twig_Template
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
  <textarea name=\"cmEditorDestVarCode\" id=\"cmEditorDestVarCode\" cols=\"30\" class=\"cmEditor\">

  (let ((a b c) (list 1 2 3))
  b)
((fn ((a b c)) c) (list 1 2 3))
(let ((a b: my-b) (list 1 b: 2))
  my-b)
((fn ((a b: my-b)) (list a my-b)) (list 1 b: 2))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
<pre id=\"outputDestVarCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/emily/doxx/user/pages/01.tutorial/06.destructuring/_variables/_code";
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
  <textarea name=\"cmEditorDestVarCode\" id=\"cmEditorDestVarCode\" cols=\"30\" class=\"cmEditor\">

  (let ((a b c) (list 1 2 3))
  b)
((fn ((a b c)) c) (list 1 2 3))
(let ((a b: my-b) (list 1 b: 2))
  my-b)
((fn ((a b: my-b)) (list a my-b)) (list 1 b: 2))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
<pre id=\"outputDestVarCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>", "@Page:/Users/emily/doxx/user/pages/01.tutorial/06.destructuring/_variables/_code", "");
    }
}
