# Managing Blocks in Drupal

## What is a Block?

* Blocks are reusable UI elements (e.g., menus, forms, messages) placed in defined regions of a theme.
* Drupal allows both core-provided and custom blocks.

---

## Creating a Custom Block

To create a custom block:

1. **Create a class in the `Plugin\Block` namespace**
   Example: `RSVPBlock.php` under `modules/custom/rsvplist/src/Plugin/Block/`.

2. **Extend `BlockBase`**
   This gives access to standard block behavior.

3. **Annotate with `@Block`**

   ```php
   @Block(
     id = "rsvp_block",
     admin_label = @Translation("The RSVP Block")
   )
   ```

4. **Implement `build()` Method**
   This defines what the block displays.

   ```php
   public function build() {
       return \Drupal::formBuilder()->getForm('Drupal\rsvplist\Form\RSVPForm');
   }
   ```

5. **(Optional) Add Access Control**

   ```php
   public function blockAccess(AccountInterface $account) {
       $node = \Drupal::routeMatch()->getParameter("node");
       if (!is_null($node)) {
           return AccessResult::allowedIfHasPermission($account, 'view rsvplist');
       }
       return AccessResult::forbidden();
   }
   ```

---

## Placing the Block

* Go to **Structure > Block Layout**.
* Choose a region and place the block.
* Optionally set **visibility conditions** (content type, path, role, etc.).

---

## Helpful Concepts

* **Block Plugin**: The custom class extending `BlockBase`.
* **AccessResult**: Handles permission logic.
* **RouteMatch**: Helps get route parameters (like the current node).
* **FormBuilder**: Used to embed forms in blocks.

---

## Resources:

- [26 - Unit 3: Block Plugins and Creating the RSVP List Block](https://www.youtube.com/watch?v=7e8YAlw3ZEM)
- [Block API overview](https://www.drupal.org/docs/drupal-apis/block-api/block-api-overview)
- [Block API](https://api.drupal.org/api/drupal/core%21modules%21block%21block.api.php/group/block_api/9)
- [class Block](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Block%21Annotation%21Block.php/class/Block/9)
- [27 - Unit 3: Displaying the RSVPForm in a Block and Applying Access Control](https://www.youtube.com/watch?v=FaygWaMmZqI)
- [function RouteMatch::getParameters](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Routing%21RouteMatch.php/function/RouteMatch%3A%3AgetParameters/9)
- [function FormBuilder::getForm](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Form%21FormBuilder.php/function/FormBuilder%3A%3AgetForm/9)
- [function BlockPluginTrait::blockAccess](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Block%21BlockPluginTrait.php/function/BlockPluginTrait%3A%3AblockAccess/9)
- [function AccessResult::allowedIfHasPermission](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Access%21AccessResult.php/function/AccessResult%3A%3AallowedIfHasPermission/9)
- [interface RouteMatchInterface](https://api.drupal.org/api/drupal/core%21lib%21Drupal%21Core%21Routing%21RouteMatchInterface.php/interface/RouteMatchInterface/9)
