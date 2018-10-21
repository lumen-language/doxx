---
title: Branches Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorFuncParamsMoreCode
outputId: outputFuncParamsMoreCode
---
(let f (fn (a) a)
  (f))
(let f (fn (b: b) (if (= b nil) 10 20))
  (f a: 99))

(let f (fn xs (last xs))
  (f 1 2 3))
(let f (fn (a rest: as) (+ a (last as)))
  (f 10 11 12 13))