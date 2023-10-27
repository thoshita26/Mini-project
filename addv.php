<?php 
include 'connectpolice.php';
if(isset($_POST['submit']))
{
    $temp=$_REQUEST['temporary_number'];
    $name=$_REQUEST['name'];
    $phoneno=$_REQUEST['phoneno'];
    $guardian=$_REQUEST['guardian'];
    $guardianphoneno=$_REQUEST['guardianphoneno'];
    $aadhar=$_REQUEST['aadhar'];
    $chassis=$_REQUEST['chassis_no'];
    $engine=$_REQUEST['engine_no'];
    $vehicle=$_REQUEST['vehicle_class'];
    $color=$_REQUEST['color'];
    $fuel_type=$_REQUEST['fuel_type'];
    $seating=$_REQUEST['seating'];
    $passw=$_REQUEST['password'];
    $statuss="Not Allocated";
    $permanent="-";
    
    $sql = "INSERT INTO vr (temporary_number,name,phoneno,guardian,guardianphoneno,aadhar,chassis_no, engine_no,vehicle_class,color,fuel_type,seating,password2,statuss,permanent)
    values('$temp','$name','$phoneno','$guardian','$guardianphoneno','$aadhar','$chassis','$engine','$vehicle','$color','$fuel_type','$seating','$passw','$statuss','$permanent')";
	 $result=mysqli_query($con,$sql);
         if($result){
             header('location:addvr.php');
         }
         else{
             die(mysqli_error($con));
         }
    
}
