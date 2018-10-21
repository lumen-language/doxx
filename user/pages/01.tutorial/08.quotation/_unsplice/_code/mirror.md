---
title: Comparisons Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorQuoteUnspliceCode
outputId: outputQuoteUnspliceCode
---
(let a '(1 2 3)
  (quasiquote (9 8 (unquote-splicing a))))
(let a '(1 2 3)
  `(9 8 ,@a))