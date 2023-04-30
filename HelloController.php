<?php

namespace Drupal\hello_world\Controller;
use Drupal\Core\Controller\ControllerBase;
use Drupal\node\Entity\Node;
class HelloController extends ControllerBase {

   
public function content() {
return [
      '#type' => 'markup',
      '#markup' => $this->t('Hello World Its me Santosh!
                              i am trying To Learn Basic Drupal'),
    ];
  }

}