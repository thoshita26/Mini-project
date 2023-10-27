<?php 
include 'connectpolice.php';
if(isset($_POST['Submit']))
{
        $name =  $_REQUEST['name'];
        $phone_no=$_REQUEST['phone_no'];
		$guardian= $_REQUEST['guardian'];
		$aadhar= $_REQUEST['aadhar'];
        $address= $_REQUEST['address'];
        $dob=  $_REQUEST['dob'];
        $ll_no=$_REQUEST['ll_no'];
        $passw=$_REQUEST['password'];
        $statuss="Not Allocated";
        
		//$check=getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    
		$dl_no="-";
	 $sql = "INSERT INTO dl (name,phone_no,guardian,aadhar,address,dob,ll_no,password3,statuss,dl_no)
        values('$name','$phone_no','$guardian','$aadhar','$address','$dob','$ll_no','$passw','$statuss','$dl_no')";
	    $result=mysqli_query($con,$sql);
         if($result){
             header('location: adddriver.php');
         }
         else{
             die(mysqli_error($con));
         }
    
}
