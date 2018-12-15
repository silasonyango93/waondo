<?php
 require_once('dbConnect.php');
 
/*
 
 $sql = "select * from fee";
 
 $res = mysqli_query($con,$sql);
 
 if($res)
 {
	 while($idd=mysqli_fetch_assoc($res)){
		 
		 $TermBalance=$idd['TermBalance'];
		 $AdmissionNumber=$idd['AdmissionNo'];
		 
		 
		 $query="UPDATE `fee` SET `AnnualBalance` = '$TermBalance' WHERE `AdmissionNo`='$AdmissionNumber';"; 
 
 mysqli_query($con,$query) or die(mysqli_error($con));
		 
		
	 }
	
 }
 */
 
 mysqli_close($con);
 
 
 
 
 
 
 ?>
 
