<?php
include 'connectpolice.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from ll where aadhar=$id";
    $result= mysqli_query($con,$sql);
    if($result){
        header('location:addlearner.php');

    }else{
        die(mysqli_error($con));
    }
}
?>