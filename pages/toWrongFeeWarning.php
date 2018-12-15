<?php
require_once('dbConnect.php');


echo "<script>if (confirm('In this section,the system helps you  make a correction on a student\'s previous fee entry')) {
    window.location='http://www.zebaki.co.ke/Waondo/pages/correctWrongFee.php';
} else {
    window.location='http://www.zebaki.co.ke/Waondo/pages/displayFee.php';
}</script>";



?>