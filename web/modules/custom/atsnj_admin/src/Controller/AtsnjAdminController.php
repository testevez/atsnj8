<?php
/**
 * @file
 * Contains \Drupal\atsnj_admin\Controller\AtsnjAdminController.
 */

namespace Drupal\atsnj_admin\Controller;

class AtsnjAdminController {

  /**
   * Display the markup.
   *
   * @return array
   */
  public function content() {
    return array(
      '#type' => 'markup',
      '#markup' => t('This will be a settings form later'),
    );
  }

}