---
title: Branches Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorFuncCallingCode
outputId: outputFuncCallingCode
---
(fn (a) (+ a 10))
((fn (a) (+ a 10)) 20)
((fn () 42))
((fn (a b) (+ a b)) 10 20)