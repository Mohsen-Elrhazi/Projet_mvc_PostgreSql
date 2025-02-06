<?php
namespace App\Services;

class Utils{
    
    public static function dashboardContent($content) {
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\header.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\sidebar.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\section.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\navbar.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\homeContent.php'; 
         
         require_once dirname(__DIR__,1).'\\Views\\Dashboard\\Admin\\pages\\'.$content.'.php';  
         
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\endHomeContent.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\endSection.php';  
        require_once dirname(__DIR__,1).'\Views\Dashboard\Admin\layouts\footer.php'; 
        }
}