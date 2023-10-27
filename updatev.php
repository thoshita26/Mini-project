<?php 
include 'connectpolice.php';
$id = $_GET['updateid'];
if(isset($_POST['submit']))
{
    $aadhar=$_POST['aadhar'];
    $status=$_POST['status'];
    $permanent=$_POST['permanent'];

    $sql="update vr set statuss='$status', permanent='$permanent' where aadhar= '$aadhar'";
    
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: addvr.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>