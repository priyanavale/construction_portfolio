<?php
print_r($_POST);
include("connection.php");
$date = date("Y-m-d");
$q="INSERT INTO `employees`( `fullname`, `email`, `phone`, `job_role`, `salary`, `resume`, `created_at`) VALUES ('".$_POST['fullname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['job_role']."','".$_POST['salary']."','".$_FILES['resume']."','".$date."')";


$fire=mysqli_query($conn,$q);

    if($fire){
        echo "<script>alert('Successfuly send your Personal Details')</script>";
        echo "<script> window.location.href = 'Career.php'   </script>";
    }    







?>