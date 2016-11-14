<!DOCTYPE html>
<html>
    <head>

	<title> form</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="./style.css">
	<script type="text/javascript" src="./script.js"></script>
    </head>
    <body>
	

	

	<form onsubmit="return validation();" method="post" name="myForm" action="process.php">

	    <pre>	<fieldset>

		
		<legend>personal information</legend>
		First Name : <input type="text" name="fname" id="fname" size="30" placeholder="enter firstname"><p id="error_fname" class="alert-default" > </p><br>
		
		Middle Name: <input type="text" name="mname" id="Mname" placeholder="enter middle name" size="30">    <p id="error_mname" class="alert-default" > </p><br>

		Last Name  : <input type="text" name="lname" size="30" id="Lname" placeholder="enter your last name" ><br> <p id="error_lname" class="alert-default" > </p>
		
		Age        : <input type="number" name="age" max="100" size="30" min="0" id="Age" placeholder="age" ><br>      <p id="error_age" class="alert-default" > </p> <br/>
		Gender     : Male  <input type="radio" name="gender" id="Gender" value="male"  />  Female  <input type="radio" name="Gender" id="Gender" value="female" /> <p id="error_gender" class="alert-default" > </p> <br>
		
		Email      : <input type="text" name="email" id="email" placeholder="enter your email id" size="30">     <p id="error_email" class="alert-default" > </p><br>
		Mobile No  : <input type="integer" name="phone" id="mobile" placeholder="enter your mobile no" size="30"> 
		<p id="error_mobile" class="alert-default" > </p><br>
		Address    : <input type="text" name="address" size="30" id="Adress" placeholder="enter your address" size="30"><p id="error_address" class="alert-default" > </p><br>

		<input name="submit" type="submit" value="submit" class="btn btn-default"/>



	    </fieldset>
	    </pre>
	</form> 

    </body>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</html>



