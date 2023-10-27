<?php
include 'connectpolice.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];
    $sql="delete from challan where dl_no='$id'";
    $result= mysqli_query($con,$sql);
    if($result){
        header('location:addchallan.php');

    }else{
        die(mysqli_error($con));
    }
}
?>