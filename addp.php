<?php 
include 'connectpolice.php';
if(isset($_POST['submit']))
{
    $aadhar=$_POST['aadhar'];
    $password=$_POST['password'];

    $sql="insert into policeusers (aadhar,password)
    values('$aadhar','$password')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: addpolice.php');
    }
    else{
        die(mysqli_error($con));
    }
}

