---
title: Comparisons Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorIterStepCode
outputId: outputIterStepCode
---
(step x (list 1 2 3)
  (print x))
(step (a b) (list (list 1 2) (list 10 20)) ; destructuring
  (print a)
  (print b))