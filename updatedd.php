<?php 
include 'connectpolice.php';
$id = $_GET['updateid'];
if(isset($_POST['submit']))
{
    $ll_no=$_POST['ll_no'];
    $status=$_POST['status'];
    $dl_no=$_POST['dl_no'];

    $sql="update dl set statuss='$status', dl_no='$dl_no' where ll_no= '$ll_no'";
    
    $result=mysqli_query($con,$sql);
    if($result){
        header('location: adddriver.php');
    }
    else{
        die(mysqli_error($con));
    }
}


?>