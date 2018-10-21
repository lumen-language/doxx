---
title: Destructuring Variables Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorDestVarCode
outputId: outputDestVarCode
---
(let ((a b c) (list 1 2 3))
  b)
((fn ((a b c)) c) (list 1 2 3))
(let ((a b: my-b) (list 1 b: 2))
  my-b)
((fn ((a b: my-b)) (list a my-b)) (list 1 b: 2))