# Learn Drupal Core

## Form APIs

### Form Types:
- `FormBase` — basic form structure.
- `ConfigFormBase` — form for editing site configuration.
- `ConfirmFormBase` — form for confirmation actions (like deleting something).

### Required Methods:
- `getFormId()` — returns unique form ID.
- `buildForm(array $form, FormStateInterface $form_state)` — builds the form elements.
- `submitForm(array &$form, FormStateInterface $form_state)` — handles the form submission.

### Key Concepts:
- **Form Render Array** is used to declare forms — it's an associative array that defines form elements and structure.
- Forms are fully defined in PHP arrays, not HTML.
- Use `FormStateInterface` to manage form data, values, and validation.

## Resources:

- [18 - Unit 3: Form API and Building Forms in Drupal](https://www.youtube.com/watch?v=901OC4CyuLU)
- [Form API](https://www.drupal.org/docs/drupal-apis/form-api)
- [Form and render elements - 11.x - drupal](https://api.drupal.org/api/drupal/elements/11.x)
- [Introduction to Form API](https://www.drupal.org/docs/drupal-apis/form-api/introduction-to-form-api)
- [Render arrays](https://www.drupal.org/docs/drupal-apis/render-api/render-arrays)
- [Render API overview](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Render%21theme.api.php/group/theme_render/11.x)
- [Utility classes and functions](https://api.drupal.org/api/drupal/core%21core.api.php/group/utility/11.x)
- [19 - Unit 3: Building the Email Submission Form](https://www.youtube.com/watch?v=nEgdpqEl0jE)
- [API documentation and comment standards](https://www.drupal.org/docs/develop/standards/php/api-documentation-and-comment-standards#inheritdoc)
- [function RouteMatchInterface::getParameter](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Routing%21RouteMatchInterface.php/function/RouteMatchInterface%3A%3AgetParameter/9)
- [function FormInterface::buildForm](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21FormInterface.php/function/FormInterface%3A%3AbuildForm/9)