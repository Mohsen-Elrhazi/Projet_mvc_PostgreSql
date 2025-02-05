<?php

include $_SERVER['DOCUMENT_ROOT'].'/Projet_mvc_PostgreSql/App/Views/Dashboard/Admin/layouts/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/Projet_mvc_PostgreSql/App/Views/Dashboard/Admin/layouts/sidebar.php';
include $_SERVER['DOCUMENT_ROOT']. '/Projet_mvc_PostgreSql/App/Views/Dashboard/Admin/layouts/section.php';
include $_SERVER['DOCUMENT_ROOT'].'/Projet_mvc_PostgreSql/App/Views/Dashboard/Admin/layouts/navbar.php';
include $_SERVER['DOCUMENT_ROOT'].'/Projet_mvc_PostgreSql/App/Views/Dashboard/Admin/layouts/homeContent.php';



include $_SERVER['DOCUMENT_ROOT']. '/Projet_mvc_PostgreSql/App/Views/Dashboard/Admin/layouts/endHomeContent.php';
include $_SERVER['DOCUMENT_ROOT'].'/Projet_mvc_PostgreSql/App/Views/Dashboard/Admin/layouts/endSection.php';
include $_SERVER['DOCUMENT_ROOT'].'/Projet_mvc_PostgreSql/App/Views/Dashboard/Admin/layouts/footer.php';

?>
<?php
echo "DOCUMENT_ROOT: " . $_SERVER['DOCUMENT_ROOT'];
exit;
?>