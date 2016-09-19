<?php

if(isset($_COOKIE['userinfo']))
   {
       $userINFOs = json_decode($_COOKIE['userinfo'],true);
     # print_r($userINFOs);
       
   }

?>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<table class="table">
	  
	    <tr>
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
		    <td><a href="./delete.php?id=<?php echo $key; ?>">Delete</a><?php ?> | 
			<a href="./edit.php?id=<?php echo $key; ?>" >Edit</a></td>
		</tr>		
	    <?php	}
	    }
	    ?>
	</table>
   




