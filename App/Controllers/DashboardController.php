<?php
namespace App\Controllers;

class DashboardController {
    
    public function dashboardView() {
    // echo dirname(__DIR__,1).'\Views\Dashboard\Admin\admin.php';  
    require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\admin.php';  

    }
}