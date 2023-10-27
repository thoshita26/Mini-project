<?php 
include 'connectpolice.php';
$id = $_GET['updateid'];
if(isset($_POST['submit']))
{
    $aadhar=$_POST['aadhar'];
    $password=$_POST['password'];

    $sql="update traffic set password='$password' where aadhar=$aadhar";
    
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: addtraffic.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>