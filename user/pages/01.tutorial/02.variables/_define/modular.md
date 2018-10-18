---
title: Define
published: true
visible: true
body_classes: 'modular header-image fullwidth'
menu: Define
onpage_menu: false
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _code
---

Variables are declared using `define` and `define-global`. Variables declared with `define` are available for use anywhere in subsequent expressions in the same scope, and `define-global` makes them globally available.

`do` evaluates multiple expressions, and itself evaluates to the value of the last expression.
