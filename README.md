# MODULE_NAME

Drupal 10/11 module template.

This repository is meant as a **learning and reference template**.  
It contains small, minimal examples of common Drupal concepts:

- Block
- Controller
- Service
- Model
- Twig template
- REST API
- AJAX integration

The module name is automatically initialized from the **repository name**
when created from the template.

---

# Overview

This module shows a **minimal but complete Drupal stack**.

The idea is simple:
- Logic lives in services
- Data is represented by models
- Controllers and blocks only connect things
- Templates only render
- REST exposes data
- AJAX consumes REST

Nothing here is complex on purpose.


---

## Requirements

- Drupal 10 or 11
- PHP 8.1+
- Composer

---

## Documentation

Detailed explanations can be found in the `docs/` folder:

1. Overview and architecture
2. Block example
3. Controller example
4. Service example
5. Model example
6. Twig template
7. REST API
8. AJAX integration

Start with: `docs/00-overview.md`

---

## Purpose

This module is **not production-ready**.  
It is designed to show *how things work*, not *how big systems are built*.
