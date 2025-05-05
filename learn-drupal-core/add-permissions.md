# Managing Permissions in Drupal Modules

## Permissions YAML File

### Structure:

* Permissions are defined in a `.permissions.yml` file.
* The format consists of key-value pairs:

  * `title`: The human-readable name for the permission.
  * `description`: A brief description of what the permission allows.
  * `restrict access`: Optional, if `true`, restricts the permission's use to specific users.

## Assigning Permissions to Routes

### Define Permissions for Routes:

* Use `_permission` in the routing file (`.routing.yml`) to specify which permission is required to access a route.

## Key Concepts:

* **Permissions** control access to features or content in your module.
* Define permissions in the module's `*.permissions.yml` file.
* Assign permissions to routes in the `*.routing.yml` file using the `_permission` key.

### How to Add a Permission:

1. Define the permission in your module’s `*.permissions.yml` file.
2. Assign the permission to a route via `_permission` in the routing YAML.

NOTE: you can take more control on module permission in `site-url/people/permissions`

## Resources:

- [25 - Unit 3: Defining Custom Permissions - Flexible Access Control](https://www.youtube.com/watch?v=Zi8DeQWf3Us)
- [class PermissionHandler](https://api.drupal.org/api/drupal/core%21modules%21user%21src%21PermissionHandler.php/class/PermissionHandler/11.x)
- [7.5. Assigning Permissions to a Role](https://www.drupal.org/docs/user_guide/en/user-permissions.html)
