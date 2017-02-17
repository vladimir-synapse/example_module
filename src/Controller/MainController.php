<?php

/**
 * @file
 */

namespace Drupal\google\Controller;
use Drupal\Core\Controller\ControllerBase;
// use Symfony\Component\HttpFoundation\RedirectResponse; // для редиректа
// use \Drupal\Component\Serialization\Json; // для Json
// use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Controller routines for page example routes.
 */
class Page extends ControllerBase{

  public function page(){
    return [
      [
        '#theme' => 'example-template',
        '#data' => [],
      ],
    ];
  }

}
