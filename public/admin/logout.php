<?php 
    require("inc/essentials.php");

    session_start();
    session_regenerate_id(true);
    session_destroy();
    redirect('index.php');
?>