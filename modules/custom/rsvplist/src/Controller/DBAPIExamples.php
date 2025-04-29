<?php

namespace Drupal\rsvplist\Controller;

use Drupal;
use Drupal\Core\Controller\ControllerBase;

class DBAPIExamples extends ControllerBase
{
    public function getUsers()
    {
        // Approch 1 || Get database instance
        // use Drupal\Core\Database\Database;
        // $db = Database::getConnection();

        // Approch 2 || Get database instance
        // $db = Drupal::service("database");

        // Approch 3 || Get database instance
        $db = Drupal::database();

        // Building query || Static approch
        $result = $db->query("SELECT uid, name, created FROM {users_field_data} WHERE uid <> 0 LIMIT 50 OFFSET 0");

        // Building SQL || dynamic approch
        // $query = $db->select("users_field_data", "u");
        // $query->condition("u.uid", 0, '<>');
        // $query->fields('u', ['uid', 'name', 'created']);
        // $query->range(0, 50);

        // $result = $query->execute();

        $output = '';
        foreach ($result as $row) {
            $output .= 'UID: ' . $row->uid . ' | Name: ' . $row->name . ' | Created: ' . date('Y-m-d H:i:s', $row->created) . '<br>';
        }

        return [
            '#type' => 'markup',
            '#markup' => $output,
        ];
    }

    public function insertDB()
    {
        $db = Drupal::database();

        try {
            $query = $db->insert('table_name')
                ->fields(['mail', 'nid', 'uid', 'created'])
                ->values(
                    [
                        "foo@example.com",
                        8,
                        1,
                        Drupal::time()->getRequestTime(),
                    ]
                );

            $result = $query->execute();
        } catch (\Exception $e) {
            Drupal::messenger()->addError($this->t("Error when working with DB"));
        }
    }

    public function updateDB()
    {
        $db = Drupal::database();

        try {
            $query = $db->update('table_name')
                ->fields(['mail' => "updated@example.com"])
                ->condition('uid', 1, "=");

            $result = $query->execute();
        } catch (\Exception $e) {
            Drupal::messenger()->addError($this->t("Error when working with DB"));
        }
    }

    public function mergeDB()
    {
        $db = Drupal::database();

        try {
            $query = $db->merge('table_name')
                ->key('id', 11) // e.g: primary key
                ->fields(['mail' => "updated@example.com"]);
            $result = $query->execute();
        } catch (\Exception $e) {
            Drupal::messenger()->addError($this->t("Error when working with DB"));
        }
    }

    public function deletDB()
    {
        $db = Drupal::database();

        try {
            $query = $db->delete('table_name')
                ->condition('uid', 1, "=");

            $result = $query->execute();
        } catch (\Exception $e) {
            Drupal::messenger()->addError($this->t("Error when working with DB"));
        }
    }
}
