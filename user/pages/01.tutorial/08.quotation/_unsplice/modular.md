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

A different way to unquote expressions is `unquote-splicing`, which takes the values contained in a nested list and places them in the enclosing one.

The shorthand for `unquote-splicing` is `,@`.
