<?php

namespace Drupal\palindrome_checker\Controller;

use Drupal\Core\Controller\ControllerBase;

class PalindromeCheckerController extends ControllerBase
{

    public function content()
    {

        return [

            "#markup" => '<div id="react-app"></div>',

            "#attached" => [

                "library" => ["palindrome_checker/palindrome_checker"],

            ],

        ];

    }
}
