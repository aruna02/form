<!DOCTYPE html>
<html>
    <head>           

	<title> form</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script>

	<link rel="stylesheet" type="text/css" href="./style.css">
	<script type="text/javascript" src="./script.js"></script>
    </head>
    <body><legend>Personal Information
	<form onsubmit="return validation();" method="post" name="myForm" action="process.php"> 
	
	    <pre>	<fieldset>
	    <a href="signout.php" type="button" class="btn btn-info">signout</a><br>
		First Name : <input type="text" name="fName" id="fname" size="30" placeholder="enter firstname"><p id="error_fname" class="alert-default" > </p>
		Middle Name: <input type="text" name="Mname" id="Mname" placeholder="enter middle name" size="30">    <p id="error_mname" class="alert-default" > </p>
		LastName  : <input type="text" name="lname" size="30" id="Lname" placeholder="enter your last name" > <p id="error_lname" class="alert-default" > </p>
		Age        : <input type="number" name="Age" max="100" size="30" min="0" id="Age" placeholder="age" value="age">      <p id="error_age" class="alert-default" > </p> 
		Gender     : Male  <input type="radio" name="Gender"  id="Gender" value="Male" />  Female  <input type="radio" name="Gender" value="Female" /> <p id="error_gender" class="alert-default"  > </p> 
		Email      : <input type="text" name="email" id="email" placeholder="enter your email id" size="30">     <p id="error_email" class="alert-default" > </p>
		Country    : <select name="country" > 
		    <!-- <option value></option> -->
		    <option value="afganistan">afganistan</option>
		    <option value="bhutan">bhutan</option>
		    <option value="china">china</option>
		    <option value="denmark"> denmark</option>
		    <option value="egypt"> egypt</option>
		    <option value="nepal">nepal</option>
		</select> <p id="error_country" class="alert-default" ></p>
		Mobile No  : <input type="integer" name="mobile" id="mobile" placeholder="enter your mobile no" size="30"> 
		<p id="error_mobile" class="alert-default" > </p>
		Address    : <input type="text" name="Address" size="30" id="Adress" placeholder="enter your address" size="30"><p id="error_address" class="alert-default" > </p>
		Hobby	   : Singing <input type="checkbox" name="hobby" id="Singing" value="singing" name="hobby">       Dancing <input type="checkbox" name="hobby" id="hobby" value="dancing">   	Playing <input type="checkbox" value="playing" name="hobby" id="playing" >       None    <input type="checkbox" name="hobby" id="none" value="none">     <p id="error_hobby" class="alert-default" ></p>
		About : <textarea rows="5" cols="40"  maxlength="100" id="About" placeholder="write about you" name="About"></textarea>    <p id="error_about" class="alert-default" ></p>
		<!-- <button type="submit" size="30" value="submit" >submit</button> -->
	<input name="submit" type="submit" value="submit" class="btn btn-default"/>
		</fieldset>
	    </pre>
	</form> </fieldset></body>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</html>



