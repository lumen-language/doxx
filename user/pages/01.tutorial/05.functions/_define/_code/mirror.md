---
title: Branches Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorFuncDefCode
outputId: outputFuncDefCode
---
(define-global f (n)
  (* n 10))
(f 3)
(do (define f (n) (* n 10))
    (print (f 3))
    (print (f 4))
    (f 2.5))
