---
title: Comparisons Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorIterEachCode
outputId: outputIterEachCode
---
(each (k v) (list 1 2 a: 10 b: 20)
  (print (cat k " " v)))
(each v (list 1 2 a: 10 b: 20) ; values only
  (print v))
(each (k (a b)) ; destructuring
    (list (list 10 20) bar: (list "a" "b"))
  (print (cat k " " a " " b)))