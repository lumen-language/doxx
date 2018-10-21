<?php

/* @Page:/Users/emily/doxx/user/pages/01.tutorial/05.functions/_paramsMore/_code */
class __TwigTemplate_51c3f1cd6bf2d97b61c56ffec0a0d11180dc3d9f353dd4b0bdf6b10fd60f3375 extends Twig_Template
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
  <textarea name=\"cmEditorFuncParamsMoreCode\" id=\"cmEditorFuncParamsMoreCode\" cols=\"30\" class=\"cmEditor\">

  (let f (fn (a) a)
  (f))
(let f (fn (b: b) (if (= b nil) 10 20))
  (f a: 99))

(let f (fn xs (last xs))
  (f 1 2 3))
(let f (fn (a rest: as) (+ a (last as)))
  (f 10 11 12 13))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputFuncParamsMoreCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/emily/doxx/user/pages/01.tutorial/05.functions/_paramsMore/_code";
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
  <textarea name=\"cmEditorFuncParamsMoreCode\" id=\"cmEditorFuncParamsMoreCode\" cols=\"30\" class=\"cmEditor\">

  (let f (fn (a) a)
  (f))
(let f (fn (b: b) (if (= b nil) 10 20))
  (f a: 99))

(let f (fn xs (last xs))
  (f 1 2 3))
(let f (fn (a rest: as) (+ a (last as)))
  (f 10 11 12 13))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputFuncParamsMoreCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>", "@Page:/Users/emily/doxx/user/pages/01.tutorial/05.functions/_paramsMore/_code", "");
    }
}
