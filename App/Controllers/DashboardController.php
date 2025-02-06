<?php
namespace App\Controllers;

class DashboardController {
    
    public function dashboardView() {
    require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\admin.php';  
    }


       
    
}