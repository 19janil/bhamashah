<?php
require('db_config.php');

    $uid = $_POST['bham_id'];
    $district = $_POST['district'];
    $name = $_POST['name'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $bank = $_POST['bank'];
    $aadhar = $_POST['aadhar'];
    $dob = $_POST['dob'];


    $update = "UPDATE `user` SET `district` = '$district', `uname` = '$name', `contact` = '$contact', `gender` = '$gender', `dob` = '$dob', `bank` = '$bank', `aadhar` = '$aadhar', `address` = '$address' WHERE uid='".$uid."'";

    $result1 = mysqli_query($conn,$update);
    if($result1){
      echo "<script type='text/javascript'>alert('Your Question has Successfully Submitted.');</script>";
    }else{
      die(mysqli_error($conn));
      }
header('Refresh: 1; URL=index.php');
?>