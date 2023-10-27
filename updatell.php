<?php 
include 'connectpolice.php';
$id = $_GET['updateid'];
if(isset($_POST['submit']))
{
    $aadhar=$_POST['aadhar'];
    $status=$_POST['status'];
    $ll_no=$_POST['ll_no'];

    $sql="update ll set statuss='$status', ll_no='$ll_no' where aadhar=$aadhar";
    
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: addlearner.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>