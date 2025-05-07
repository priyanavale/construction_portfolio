<?php
print_r($_POST);
include("connection.php");
$status="pending";
$date = date("Y-m-d");
$q="INSERT INTO `contact_information`( `name`, `email`, `state`, `message`, `status`, `cdate`) VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['state']."','".$_POST['message']."','".$status."','".$date."')";
$fire=mysqli_query($conn,$q);

    if($fire){
        echo "<script>alert('Successfuly send your contact Details')</script>";
        echo "<script> window.location.href = 'index.php'   </script>";
    }    
?>