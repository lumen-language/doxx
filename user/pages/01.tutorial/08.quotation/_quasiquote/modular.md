---
title: Each
published: true
visible: true
body_classes: 'modular header-image fullwidth'
menu: Each
onpage_menu: false
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _code
---

When you want to quote some parts of an expression, but want other parts to be evaluated, use `quasiquote` and `unquote`:
