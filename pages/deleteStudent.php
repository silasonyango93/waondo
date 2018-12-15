<?php
 require_once('dbConnect.php');
 
 




 
 $AdmissionNo=$_GET['AdmissionNo'];
 
 
 
 

 
 
 
 $query="DELETE FROM `students` WHERE `students`.`AdmissionNo`=$AdmissionNo;"; 
 // $response["success"] = TRUE
// echo json_encode($response);
 mysqli_query($con,$query) or die(mysqli_error($con));
 
 echo "<script>
 alert('The student has been successfully deleted from the system.');
 
 window.location='http://www.zebaki.co.ke/Waondo/pages/displayFee.php';
</script>";
 mysqli_close($con);
 ?>
 
 