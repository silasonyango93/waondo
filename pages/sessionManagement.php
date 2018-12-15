<?php 
require_once('dbConnect.php');
session_start();

session_unset();

// destroy the session
session_destroy(); 


echo "<script>
     
    window.location='https://www.zebaki.co.ke/Waondo/pages/login.php';
    
    </script>";



?>