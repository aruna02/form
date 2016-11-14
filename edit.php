<?php

include './database.php';
if(isset($_GET['id'])) {
    $id=$_GET['id'];
    $sqlquery = "SELECT * FROM students WHERE id=".$id;
    $result = mysqli_query($connection,$sqlquery);
    $row = mysqli_fetch_array($result);
    $fname=$row[1];
    $mname=$row[2];
    $lname=$row[3];
    $age=$row[4];
    $gender=$row[5];
    $email=$row[6];
    $phone=$row[7];
    $address=$row[8];

}

?>



<!DOCTYPE html>
<html>
    <head>

	<title> form</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="./style.css">
	<script type="text/javascript" src="./script.js"></script>
    </head>
    <body>
	

	

	<form onsubmit="return validation();" method="post" action="process.php">

	    <pre>	<fieldset>

		
		<legend>personal information</legend>
    First Name : <input type="text" name="fname" id="fname" size="30" value="<?php echo $fname;   ?>"><p id="error_fname" class="alert-default" > </p><br>
		
    Middle Name: <input type="text" name="mname" id="Mname" value="<?php echo $mname;?>" size="30">    <p id="error_mname" class="alert-default" > </p><br>

		Last Name  : <input type="text" name="lname" size="30" id="Lname" value="<?php echo $lname ;?>" ><br> <p id="error_lname" class="alert-default" > </p>
		
		Age        : <input type="number" name="age" max="100" size="30" min="0" id="Age" value="<?php echo $age; ?>" ><br>      <p id="error_age" class="alert-default" > </p> <br/>
		Gender     : Male  <input type="radio" name="gender" id="Gender"  value="male" <?php if($gender=='male'){echo 'checked';} ?> />  Female  <input type="radio" name="gender" id="Gender" value="female" <?php if($gender=='female'){echo 'checked';} ?>/> <p id="error_gender" class="alert-default" > </p> <br>
		
		Email      : <input type="text" name="email" id="email" value="<?php echo $email; ?>" size="30">     <p id="error_email" class="alert-default" > </p><br>
		Mobile No  : <input type="integer" name="phone" id="mobile" value="<?php echo $phone; ?>" size="30"> 
		<p id="error_mobile" class="alert-default" > </p><br>
		Address    : <input type="text" name="address" size="30" id="Adress" value="<?php echo $address; ?>" size="30"><p id="error_address" class="alert-default" > </p><br>
		<input name="id" type="hidden" value="<?php echo $id;?>"/>
		<input name="update" type="submit" value="Update" class="btn btn-default"/>
	    </fieldset>
	    </pre>
	</form> 

    </body>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</html>



