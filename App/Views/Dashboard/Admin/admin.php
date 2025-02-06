<?php
       require_once  dirname(__DIR__).'\Admin\layouts\header.php';  
        require_once dirname(__DIR__).'\Admin\layouts\sidebar.php';  
        require_once dirname(__DIR__).'\Admin\layouts\section.php';  
        require_once dirname(__DIR__).'\Admin\layouts\navbar.php';  
        require_once dirname(__DIR__).'\Admin\layouts\homeContent.php'; 
        
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
            }
            if (isset($_SESSION['error'])) {
                echo "<div class='alert alert-danger text-center'>".$_SESSION['error']."</div>";
                unset($_SESSION['error']);
            }
            
            if (isset($_SESSION['success'])) {
                echo "<div class='alert alert-success text-center'>".$_SESSION['success']."</div>";
                unset($_SESSION['success']);
            }
            
            if (isset($_SESSION['deleted'])) {
                echo "<div class='alert alert-success text-center'>".$_SESSION['deleted']."</div>";
                unset($_SESSION['deleted']);
            }
            
            if (isset($_SESSION['tagDeleted'])) {
                echo "<div class='alert alert-success text-center'>".$_SESSION['tagDeleted']."</div>";
                unset($_SESSION['tagDeleted']);
            }
         
         echo "fichier de dashboard";
         
        require_once dirname(__DIR__).'\Admin\layouts\endHomeContent.php';  
        require_once dirname(__DIR__).'\Admin\layouts\endSection.php';  
        require_once dirname(__DIR__).'\Admin\layouts\footer.php';  

?>