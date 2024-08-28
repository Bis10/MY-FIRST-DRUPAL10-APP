<?php

namespace Drupal\button_module\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\Response;

class ButtonController extends ControllerBase
{

    public function button()
    {
        return new Response('Welcome, congrats you created your first custom Drupal 10 module');
    }
}
