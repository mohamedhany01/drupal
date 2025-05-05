<?php

/**
 * @file
 * Create a block that display the RSVPForm in RSVPForm.php
 */

namespace Drupal\rsvplist\Plugin\Block;

use Drupal;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountInterface;
use Drupal\Core\Access\AccessResult;

/**
 * Provides the RSVP main block.
 *
 * @Block(
 *   id = "rsvp_block",
 *   admin_label = @Translation("The RSVP Block")
 * )
 */
class RSVPBlock extends BlockBase
{

    /**
     * {@inheritDoc}
     */
    public function build()
    {

        return Drupal::formBuilder()->getForm('Drupal\rsvplist\Form\RSVPForm');

        // return [
        //     "#type" => "markup",
        //     "#markup" => $this->t("RSVP List Block"),
        // ];
    }

    /**
     * {@inheritDoc}
     */
    public function blockAccess(AccountInterface $account)
    {
        $node = Drupal::routeMatch()->getParameter("node");

        if (!(is_null($node))) {
            return AccessResult::allowedIfHasPermission($account, 'view rsvplist');
        }

        return AccessResult::forbidden();
    }
}
