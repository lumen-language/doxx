<?php

/* @Page:/Users/emily/doxx/user/pages/01.tutorial/02.variables/_assignment/_code */
class __TwigTemplate_e9fe192904e11e66bb606d95b91fe93d2c915dc8cefb2044372afe972d954b7e extends Twig_Template
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
  <textarea name=\"cmEditorVarsAssignCode\" id=\"cmEditorVarsAssignCode\" cols=\"30\" class=\"cmEditor\">

  (let x 10
    (set x 15))
(let x 10
    (set x 20)
    (+ x 5))
(let a (list 1 2 3)
    (set (at a 1) &quot;b&quot;)
    a)
(let a (list foo: 17)
    (set (get a &quot;foo&quot;) 19)
    a)


  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputVarsAssignCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/emily/doxx/user/pages/01.tutorial/02.variables/_assignment/_code";
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
  <textarea name=\"cmEditorVarsAssignCode\" id=\"cmEditorVarsAssignCode\" cols=\"30\" class=\"cmEditor\">

  (let x 10
    (set x 15))
(let x 10
    (set x 20)
    (+ x 5))
(let a (list 1 2 3)
    (set (at a 1) &quot;b&quot;)
    a)
(let a (list foo: 17)
    (set (get a &quot;foo&quot;) 19)
    a)


  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputVarsAssignCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>", "@Page:/Users/emily/doxx/user/pages/01.tutorial/02.variables/_assignment/_code", "");
    }
}
