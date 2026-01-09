# Common Mistakes

This document lists **typical mistakes** beginners (and sometimes advanced developers)
make when working with Drupal modules.

Avoiding these will save you a lot of time and refactoring.

---

## ❌ Business logic in Blocks or Controllers

**Wrong:**

* Database queries in blocks
* Complex calculations in controllers

**Why it's bad:**

* Hard to test
* Hard to reuse
* Breaks separation of concerns

**Correct:**

* Put business logic into services
* Blocks and controllers should only call services

---

## ❌ Services depending on UI code

**Wrong:**

* Service calling a controller
* Service returning render arrays

**Why it's bad:**

* Services should be reusable
* Services should not depend on UI or routing

**Correct:**

* Services return data or models
* Controllers and blocks build render arrays

---

## ❌ Logic inside Twig templates

**Wrong:**

```twig
{% if user.hasPermission('admin') %}
```

**Why it's bad:**

* Hard to debug
* Hard to test
* Breaks MVC ideas

**Correct:**

* Prepare variables in PHP
* Twig should only render values

---

## ❌ Copy-pasting logic instead of using services

**Wrong:**

* Same logic in multiple controllers
* Small changes require many edits

**Correct:**

* Create one service
* Reuse it in blocks, controllers, REST, AJAX

---

## ❌ REST endpoints duplicating logic

**Wrong:**

* REST resource builds data itself
* REST and UI use different code paths

**Correct:**

* REST uses the same service as UI
* One source of truth for data

---

## ❌ Ignoring naming conventions

**Common problems:**

* Uppercase module names
* Inconsistent file names
* Wrong namespaces

**Rule:**

* Module name = repository name = folder name
* Use lowercase and snake_case only

---

## ❌ Overengineering too early

**Examples:**

* Custom entities for demo data
* Complex permissions for simple features

**Advice:**

* Start simple
* Grow only when needed

---

## Final Tip

If something feels complicated:

* It probably is
* Simplify first, extend later
