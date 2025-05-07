# Configuration API (a bit complex topic)

### 1. **Purpose**

* Store settings that can be changed by site builders (not code).
* Saved in YAML files.
* Editable via forms or config UI.

---

### 2. **YAML Config File**

* Path: `config/install/rsvplist.settings.yml`

```yaml
allowed_types:
  - article
```

* Defines default config for the module.
* Imported when module is installed.

---

### 3. **Schema File**

* Path: `config/schema/rsvplist.schema.yml`
* Describes structure for the config:

```yaml
rsvplist.settings:
  type: config_object
  mapping:
    allowed_types:
      type: sequence
      sequence:
        type: string
```

* Needed for translation and UI.

---

### 4. **Config Form**

* Class: `RSVPSettingsForm.php`
* Extends `ConfigFormBase`.
* Editable config name: `'rsvplist.settings'`.
* Method: `buildForm()` adds checkboxes to pick content types.
* Method: `submitForm()` saves selected values.

---

### 5. **Accessing Config**

* Read:

  ```php
  $config = $this->config('rsvplist.settings');
  $config->get('allowed_types');
  ```
* Write:

  ```php
  $this->config('rsvplist.settings')
       ->set('allowed_types', $types)
       ->save();
  ```

---

### 6. **Routing**

* Path: `/admin/config/content/rsvplist`
* Route name: `rsvplist.admin_settings`
* Defined in `rsvplist.routing.yml`

---

### 7. **Menu Link**

* Defined in `rsvplist.links.menu.yml`
* Adds link in “Content authoring” section of admin.

---

### 8. **Important Functions**

* `getFormId()` – unique form ID.
* `getEditableConfigNames()` – config keys to save.
* `buildForm()` – UI for config.
* `submitForm()` – handle save.

---

## Resources:

- [28 - Unit 3: Introduction to Configuration API](https://www.youtube.com/watch?v=281Ve9-qbyA)
- [Configuration API](https://api.drupal.org/api/drupal/core%21core.api.php/group/config_api/9)
- [Configuration API overview](https://www.drupal.org/docs/drupal-apis/configuration-api/configuration-api-overview)
- [State API overview](https://www.drupal.org/docs/develop/drupal-apis/state-api/state-api-overview)
- [29 - Unit 3: Creating RSVPSettingsForm and Config Settings](https://www.youtube.com/watch?v=_USUedcqRfk)
- [Working with Configuration Forms](https://www.drupal.org/node/2206607)
- [Configuration schema/metadata](https://www.drupal.org/node/1905070)
- [ConfigFormBase with Simple Configuration API](https://www.drupal.org/docs/drupal-apis/form-api/configformbase-with-simple-configuration-api)
- [class ConfigFormBase](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21ConfigFormBase.php/class/ConfigFormBase/9)
- [function ConfigFormBaseTrait::config](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21ConfigFormBaseTrait.php/function/ConfigFormBaseTrait%3A%3Aconfig/9)
- [Structure of routes](https://www.drupal.org/docs/drupal-apis/routing-system/structure-of-routes)
- [Providing module-defined menu links](https://www.drupal.org/docs/drupal-apis/menu-api/providing-module-defined-menu-links)
- [30 - Unit 3: Add Routing and Menu Link to RSVPSettings](https://www.youtube.com/watch?v=_USUedcqRfk)
