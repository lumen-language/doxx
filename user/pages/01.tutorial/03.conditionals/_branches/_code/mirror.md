---
title: Branches Code
published: true
process:
    markdown: true
    twig: true
twig_first: true
editorId: cmEditorCondBranchesCode
outputId: outputCondBranchesCode
---
(if true 10)
(if false 10)
(if false 1 false 2 false 3 true 10)
(if false 1 false 2 false 3 10)
(if true 9 (do (print 10) 11))
(if false 9 (do (print 10) 11))