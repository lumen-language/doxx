---
title: Branches
published: true
visible: true
body_classes: 'modular header-image fullwidth'
menu: Branches
onpage_menu: false
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _code
---

Parameters in Lumen are always optional, and those without a supplied argument have the value `nil`.

Functions can also take a variable number of arguments by either specifying a single parameter instead of a list, or by using the `rest` key.
