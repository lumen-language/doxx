---
title: Macros Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorMacrosMacrosCode
outputId: outputMacrosMacrosCode
---
(define-macro when (condition rest: body)
  `(if ,condition (do ,@body)))
(when true
  (print 'hi)
  (+ 10 20))