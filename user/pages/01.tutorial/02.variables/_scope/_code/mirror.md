---
title: Scope Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorVarsScopeCode
outputId: outputVarsScopeCode
---
(let (x 10 y 20)
    (+ x y))
(let x 41 (+ x 1))
(let x 1
    (let x 2
      (print x))
    (print x))