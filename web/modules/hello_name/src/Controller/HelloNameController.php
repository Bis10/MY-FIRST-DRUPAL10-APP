<?php

namespace Drupal\hello_name\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class HelloNameController extends ControllerBase
{

    public function hello()
    {
        return ['#markup'=>$this->t('Hello'),];
    }
}
