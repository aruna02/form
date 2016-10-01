<!DOCTYPE html>
<html>
<head>
	<title>login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <!--  <a href="#" role="button" class="btn btn-info active">Signup</a> -->
</head>
<body>
<div class="container">
<form class="form-horizontal" role="form" action="goto.php" method="post">
<fieldset>
<br>
<div class="container">
	<div class="col-sm-offset-2 col-sm-3">
	<img src="loginpic.png" class="img-circle pull-xs-right" position="right" width="150px" height="150px"></div>
	<br></div><br>
	<div class="form-group">
	<label class="control-label col-sm-2" for="Username">Username:</label>
	  <div class="col-sm-3">
	  <input type="text"  name="Username" class="form-control" placeholder="enter username"> <br>
	</div></div>
	
	<div class="form-group">
	<label class="control-label col-sm-2" for="password">Password</label>
	<div class="col-sm-3">
	<input type="text" class="form-control" name="password" placeholder="enter password"> <br>
	 </div></div>
	 <div class="checkbox"><div class="col-sm-offset-1 col-sm-4">
	 	<label > <input type="checkbox" value="" >Remember me</label></div>
	 </div><br>
	<div class="btn-group btn-group-lg">
	<div class="form-group">
	<div class="col-sm-offset-8 col-sm-10">
	<!-- <button type="button" class="btn btn-info">login</button> -->
	<input type="submit" class="btn btn-info" value="Login">
	</div></div>
<!-- 
	<button type="button" class="btn btn-info btn-lg active" position="right"> signup </button> -->
</div>
</div>
</div></fieldset>
</form>
</div>
</body>
</html>