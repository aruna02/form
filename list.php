  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script><script>
 function on_delete() {

     if(confirm("Do you want do delete this cookie") ==  true){
	 location.href= './delete.php?id=<?php echo $key; ?>';
     }
     else {
	 location.href= './list.php';
     }
 }

</script>




<?php

if(isset($_COOKIE['userinfo']))
   {
       $userINFOs = json_decode($_COOKIE['userinfo'],true);
     #print_r($userINFOs);
       
   }

?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<table class="table table-bordered">
	  
	    <tr class="info">
		<th>S.No</th>
		<th>fname</th>
		<th>Mname</th>
		<th>lname</th>
		<th>age</th>
		<th>Email</th>
		<th>Gender</th>
		<th>Address</th>
		<th>hobby</th>
		<th>About</th>
		<th>Action</th>
	    </tr>
	    <?php
	    $i=1; 
	    if(is_array($userINFOs)){
		foreach($userINFOs as $key=>$info){
	    ?>
		<tr class="success">
		    <td><?php echo $i++?></td>
		    <td><?php echo $info['fname'];?></td>
		    <td><?php echo $info['Mname'];?></td>
		    <td><?php echo $info['lname'];?></td>
		    <td><?php echo $info['Age'];?></td>
		    <td><?php echo $info['email']; ?></td>
		    <td><?php echo $info['Gender'];?></td>
		    <td><?php echo $info['Address']; ?></td>
		    <td><?php echo $info['hobby']; ?></td>
		    <td><?php echo $info['About']; ?></td>
		    <td><a onclick="return on_delete();" href="./delete.php?id=<?php echo $key; ?>">Delete</a>| 
			<a href="./editt.php?id=<?php echo $key; ?>" >Edit</a></td>
		</tr>		
	    <?php	}
	    }
	    ?>
	</table>
   



<div class="btn-group btn-group-lg">
	<div class="form-group">
	<div class="col-sm-offset-1 col-sm-17">
<a href="form.php" type="button" class="btn btn-info">back</a>    

<div class="btn-group btn-group-lg">
	<div class="form-group">
	<div class="col-sm-offset-11 col-sm-17">
<a href="signout.php" type="button" class="btn btn-info">signout</a><br>