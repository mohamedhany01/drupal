<?php

/**
 * @file
 * Generic form to collect an email address for RSVO details
 */

namespace Drupal\rsvplist\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;


class RSVPForm extends FormBase
{
    /**
     * {@inheritDoc}
     */
    public function getFormId()
    {
        return 'rsvplist_email_form';
    }

    /**
     * {@inheritDoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $currentNode = \Drupal::routeMatch()->getParameter('node');

        if (!(is_null($currentNode))) {
            $nid = $currentNode->id();
        } else {
            $nid = 0;
        }

        // Email text field HTML
        $form['email'] = [
            '#type' => 'textfield',
            '#title' => t('Email address'),
            '#size' => 25,
            '#description' => t('We well send updates to the email address you provide'),
            '#required' => true,
        ];

        // Submit button
        $form['submit'] = [
            '#type' => 'submit',
            '#value' => t('RSVP'),
        ];

        // Hidden field holding the node ID
        $form['nid'] = [
            '#type' => 'hidden',
            '#value' => $nid
        ];

        return $form;
    }

    /**
     * {@inheritDoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        $submittedEmail = $form_state->getValue('email');

        $this->messenger()->addMessage(t("The form is working! You entered @entry.", ['@entry' => $submittedEmail]));
    }
}
