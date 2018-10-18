<?php

/* @Page:/Users/emily/doxx/user/pages/01.tutorial/03.conditionals/_branches/_code */
class __TwigTemplate_a942716b015f648879ffcecbb1a83bd201c3661b8b7c374fee065b189d4e65ef extends Twig_Template
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
  <textarea name=\"cmEditorCondBranchesCode\" id=\"cmEditorCondBranchesCode\" cols=\"30\" class=\"cmEditor\">

  (if true 10)
(if false 10)
(if false 1 false 2 false 3 true 10)
(if false 1 false 2 false 3 10)
(if true 9 (do (print 10) 11))
(if false 9 (do (print 10) 11))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputCondBranchesCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>";
    }

    public function getTemplateName()
    {
        return "@Page:/Users/emily/doxx/user/pages/01.tutorial/03.conditionals/_branches/_code";
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
  <textarea name=\"cmEditorCondBranchesCode\" id=\"cmEditorCondBranchesCode\" cols=\"30\" class=\"cmEditor\">

  (if true 10)
(if false 10)
(if false 1 false 2 false 3 true 10)
(if false 1 false 2 false 3 10)
(if true 9 (do (print 10) 11))
(if false 9 (do (print 10) 11))

  </textarea>
    </div>

    <div class=\"CodeMirror cm-s-default output\">
        <pre id=\"outputCondBranchesCode\" class=\"cmOutput\"></pre>
    </div>
  </div>

</div>", "@Page:/Users/emily/doxx/user/pages/01.tutorial/03.conditionals/_branches/_code", "");
    }
}
