# Learn Drupal Core

## Custom Module in Drupal Core

### What is a Custom Module in Drupal?

- A **custom module** is user-created code that extends or adds specific functionality to a Drupal site.
- It allows developers to create features that are not available in Drupal Core or contributed modules.
- Custom modules are typically placed in the `/modules/custom` directory of a Drupal installation.
- You can find the custom module to install it in `/modules` route, ex: `https://drupal-11.1.x.ddev.site/admin/modules`.

---

### Metadata Explained

Metadata in a module's `.info.yml` file provides essential information about the module to Drupal. A breakdown:

| Key                     | Meaning                                                           |
|--------------------------|-------------------------------------------------------------------|
| `name`                   | The human-readable name of the module.                           |
| `type`                   | Specifies this is a `module` (could also be `theme`).             |
| `core_version_requirement` | Specifies which Drupal core versions the module is compatible with (e.g., `^11` means Drupal 11). |
| `description`            | A short explanation of what the module does.                     |
| `package`                | Groups the module under a specific section on the admin page.    |
| `dependencies`           | Lists other modules that this module depends on (`drupal:block` here). |
| `configure`              | Provides a route name to the module's configuration page.        |

## Resources:

- [17 - Unit 3: Creating the RSVP List Module](https://www.youtube.com/watch?v=hV90A7iWPVU)
- [Let Drupal know about your module with an .info.yml file](https://www.drupal.org/docs/develop/creating-modules/let-drupal-know-about-your-module-with-an-infoyml-file#s-complete-example)
- [YAML: Do I need quotes for strings in YAML?](https://stackoverflow.com/questions/19109912/yaml-do-i-need-quotes-for-strings-in-yaml)
- [Strings in YAML - To Quote or not to Quote](https://blogs.perl.org/users/tinita/2018/03/strings-in-yaml---to-quote-or-not-to-quote.html)