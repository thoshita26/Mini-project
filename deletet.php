<?php
include 'connectpolice.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from traffic where aadhar=$id";
    $result= mysqli_query($con,$sql);
    if($result){
        header('location:addtraffic.php');

    }else{
        die(mysqli_error($con));
    }
}
?>