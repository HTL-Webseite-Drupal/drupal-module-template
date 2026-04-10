# MODULE_NAME

HTL child module based on `htl_core`.

The module name and all placeholders are automatically replaced from the
**repository name** on first push (via the GitHub Actions init workflow).

---

## Structure

```
src/
  Form/
    SettingsForm.php        ← extend HtlSettingsFormBase, add your fields here
  Service/
    ModuleNameService.php   ← main service, HtlLoggerTrait included
config/install/
  MODULE_NAME.settings.yml  ← default config values
MODULE_NAME.info.yml
MODULE_NAME.module
MODULE_NAME.routing.yml     ← settings route under /admin/config/htl/
MODULE_NAME.links.menu.yml  ← auto-registers in the HTL admin section
MODULE_NAME.services.yml
```

---

## Requirements

- Drupal 10 or 11
- PHP 8.1+
- `htl_core` enabled

---

## Getting started

1. Create a new repo from this template.
2. The init workflow replaces all `MODULE_NAME` / `ModuleName` placeholders
   with the repo name on first push.
3. Add settings fields in `SettingsForm::buildSettingsForm()`.
4. Add business logic to `ModuleNameService`.
5. Log with `$this->htlInfo('MODULE_NAME', 'msg')` anywhere in the service.

