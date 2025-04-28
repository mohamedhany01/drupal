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

**How to Validate a Form Field in Drupal**
1. Add a `validateForm()` method to your form class.
2. In `validateForm()`, use `$form_state->getValue('field_name')` to get the field value.
3. Validate the value (e.g., check if it's an email).
4. If invalid, call:
   ```php
   $form_state->setErrorByName('field_name', $this->t('Error message'));
   ```

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
- [21 - Unit 3: Validating Form Submissions: Add a Validation Handler](https://www.youtube.com/watch?v=qQwSRbH1NG8)
- [function FormBase::validateForm](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21FormBase.php/function/FormBase%3A%3AvalidateForm/9)
- [function FormState::setErrorByName](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21FormState.php/function/FormState%3A%3AsetErrorByName/9)