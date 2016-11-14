<?php

include 'database.php';
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id=$_POST['id'];

    $sqlquery = "INSERT INTO students(fname,mname,lname,age,gender,email,phone,address) VALUES ('$fname','$mname','$lname',$age,'$gender','$email',$phone,'$address')";

    if (mysqli_query($connection,$sqlquery)) {
	echo "new record created successfully";
    } else {
	echo "error creating record " . mysqli_error();
    }
}

if (isset($_POST['update'])) {
    $id=$_POST['id'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $updatequery = "UPDATE students SET fname='$fname',mname='$mname',lname='$lname',age=$age,gender='$gender',email='$email',phone=$phone,address='$address' WHERE id=".$id;
    mysqli_query($connection,$updatequery);
}

header('Location:./list.php');

?>



