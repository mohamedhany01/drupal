<img alt="Drupal Logo" src="https://www.drupal.org/files/Wordmark_blue_RGB.png" height="60px">

# Learn modules development

- [Drupal Training - Module Development by Acquia](https://www.youtube.com/playlist?list=PLpVC00PAQQxFNDfiXn6LH1gOLllGS3hhl)

## Installation

- [Using Git with clone](https://www.drupal.org/docs/getting-started/installing-drupal/install-drupal-using-ddev-for-local-development#s-option-2-using-git-with-clone)

## Local `admin`

- Run `ddev drush site:install -y` to generate username and password
- My setup is: user: `admin`, password: `admin`

## Launch the demo

- `ddev launch`
- Or automatically log into the admin account `ddev launch $(ddev drush uli)`
