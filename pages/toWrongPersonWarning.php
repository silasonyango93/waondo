<?php
require_once('dbConnect.php');


echo "<script>if (confirm('In this section,the system helps you  delete a wrong fee entry.')) {
    window.location='http://www.zebaki.co.ke/Waondo/pages/correctWrongPerson.php';
} else {
    window.location='http://www.zebaki.co.ke/Waondo/pages/displayFee.php';
}</script>";



?>