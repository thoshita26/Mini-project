<?php 
include 'connectpolice.php';
$id = $_GET['updateid'];
if(isset($_POST['submit']))
{
    $dl_no=$_POST['dl_no'];
    $status=$_POST['status'];
   

    $sql="update challan set pay='$status' where dl_no='$dl_no'";
    
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: addchallan.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>