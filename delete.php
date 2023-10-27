<?php
include 'connectpolice.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from policeusers where aadhar=$id";
    $result= mysqli_query($con,$sql);
    if($result){
        header('location:addpolice.php');

    }else{
        die(mysqli_error($con));
    }
}
?>