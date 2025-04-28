# How to Create a Router in Drupal Core 10+

In Drupal, **routes** are defined inside a `*.routing.yml` file in your module.

Each route includes:
- A **machine name** (`rsvplist.formdemo` in your case).
- A **URL path** (`/rsvplistdemo`).
- **Defaults**, like:
  - The **form class** to build the page (`_form: 'Drupal\rsvplist\Form\RSVPForm'`).
  - The **page title** (`_title: "RSVP to this Event (demo)"`).
- **Requirements**:
  - Permissions required to access the route (`_permission: "access content"`).

The YAML file is placed in your module directory as:  
`[your_module].routing.yml`

---

## Important Notes:

| Aspect            | Details |
|:------------------|:--------|
| **Routing file**   | Must be named `your_module.routing.yml`. |
| **Route name**     | Example: `rsvplist.formdemo`. It must be **unique** across the whole site. |
| **Path**           | Example: `/rsvplistdemo`. This is the URL users will visit. |
| **Defaults**       | You define what should render:<br>• `_form` → If you are returning a **form** class.<br>• `_controller` → If returning a **controller** class.<br>• `_title` → Page title. |
| **Requirements**   | Controls **who can access** the route.<br>• Use `_permission: "permission name"`.<br>• Common permissions: `"access content"`, `"administer site configuration"`, or your own custom permission. |
| **YAML syntax**    | Very strict!<br>• Use spaces (not tabs).<br>• Make sure indentation is correct (2 spaces per level). |
| **Clear cache**    | After editing the routing file, **always** run `drush cr` or clear cache manually. Routes are cached! |

---

## 🛠 Minimal Example (what you wrote)

```yaml
rsvplist.formdemo:
  path: "/rsvplistdemo"
  defaults:
    _form: 'Drupal\rsvplist\Form\RSVPForm'
    _title: "RSVP to this Event (demo)"
  requirements:
    _permission: "access content"
```

---

## Common Mistakes to Watch Out For:
- Incorrect YAML formatting (especially spaces).
- Wrong class namespace (should match exactly with your `Form` or `Controller` class).
- Forgetting to clear cache after creating/editing a route.
- Missing permissions (users will get "Access denied").

---

## Resources:

- [20 - Building a Route to a Form (YouTube)](https://www.youtube.com/watch?v=NnFLMWjiJb0)
- [Drupal.org Routing Docs](https://www.drupal.org/docs/drupal-apis/routing-system/structure-of-routes)