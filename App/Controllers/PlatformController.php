<?php
namespace App\Controllers;

class PlatformController {
    public function platformView() {
        // require_once 'App/Views/Auth/register.php';
        // echo "page plateforme";
        require_once dirname(__DIR__,1).'\Views\Platform\platform.php';  
      }

  
}