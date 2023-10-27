<?php 
include 'connectpolice.php';
if(isset($_POST['submit']))
{
    $challan_no=$_REQUEST['challan_number'];
    $dl_no=$_REQUEST['dl_no'];
    $vehicle_no=$_REQUEST['vehicle_no'];
    $fee=$_REQUEST['fee'];
    $offenses=$_REQUEST['offenses'];
    $pay=$_REQUEST['pay'];
		$sql = "INSERT INTO challan (challan_number,dl_no,vehicle_no,fee,offenses,pay)
        values('$challan_no','$dl_no','$vehicle_no','$fee','$offenses','$pay')";
	    $result=mysqli_query($con,$sql);
         if($result){
             header('location: addchallan.php');
         }
         else{
             die(mysqli_error($con));
         }
    
}
