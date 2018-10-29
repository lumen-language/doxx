---
title: Assignment Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorVarsAssignCode
outputId: outputVarsAssignCode
---
(let x 10
  (set x 15))
(let x 10
  (set x 20)
  (+ x 5))
(let a (list 1 2 3)
  (set (at a 1) "b")
  a)
(let a (list foo: 17)
  (set (get a "foo") 19)
  a)
