---
title: Lists
published: true
body_classes: 'modular header-image fullwidth'
menu: Lists
onpage_menu: false
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _code
---

Lists contain other values, and are written by enclosing expressions in parentheses. Operators are called by placing them at the beginning of a list expression, and list values can be constructed using the `list` operator.

Note that values identified by name, known as keys, don't show up in any particular order.

Lists can contain values that are identified by their position, as well as values that are identified in the list by a name:
