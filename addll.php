<?php 
include 'connectpolice.php';
if(isset($_POST['Submit']))
{
        $name =  $_REQUEST['name'];
		$guardian= $_REQUEST['guardian'];
		$guardian_phone_no= $_REQUEST['guardian_phone_no'];
		$aadhar= $_REQUEST['aadhar'];
		$phone_no=$_REQUEST['phone_no'];
		$gender=  $_REQUEST['gender'];
		$door_no=  $_REQUEST['door_no'];
		$city= $_REQUEST['city'];
		$district=  $_REQUEST['district'];
		$pincode=  $_REQUEST['pincode'];
		$dob=  $_REQUEST['dob'];
		$type= $_REQUEST['type'];
		$passw=  $_REQUEST['password'];
		//$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        $statuss="Not Allocated";
		$ll_no="-";
		$sql = "INSERT INTO ll (name,guardian,guardian_phone_no,aadhar,phone_no, gender,door_no,city,district,pincode,dob,type,statuss,ll_no,password1)
        values('$name','$guardian','$guardian_phone_no','$aadhar','$phone_no','$gender','$door_no','$city','$district','$pincode','$dob','$type','$statuss','$ll_no','$passw')";
	    $result=mysqli_query($con,$sql);
         if($result){
             header('location: addlearner.php');
         }
         else{
             die(mysqli_error($con));
         }
    
}
