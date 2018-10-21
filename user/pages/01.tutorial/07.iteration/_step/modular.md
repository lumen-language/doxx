---
title: Step
published: true
visible: true
body_classes: 'modular header-image fullwidth'
menu: Step
onpage_menu: false
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
        custom:
            - _code
---

`each` will bind keys and values in any order. If you want only the positional values of a list, you can enumerate them in order using `step`:
