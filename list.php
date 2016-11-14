<script>
 function delete_validate() {
     if(confirm("Do you really want to delete this?") == true ) {
	 location.href = './delete.php?id=<?php echo $key; ?>';
	 
     }

     else {
	 location.href = './list.php';
     }
 }
</script>
<?php

include './database.php';

?>

<div class="panel panel-default">
    <h1>User Information</h1>
     <div class="table-responsive">
	<table class="table table-stripped table-hover">
	    <tr>
		<th>S.No</th>
		<th>First Name</th>
		<th>Middle Name</th>
		<th>Last Name</th>
		<th>Gender</th>
		<th>Age</th>
		<th>Email</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Options</th>
	    </tr>
	    <?php
	    $sqlquery = "SELECT * from students";
	    $result = mysqli_query($connection,$sqlquery);
	    $i=1;
	    while($row=mysqli_fetch_row($result))
	    {
		$key=$row[0];
	    ?>

		<tr class="success">
		<td><?php echo $i++;?></td>
		<td><?php echo $row[1]; ?></td>
		<td><?php echo $row[2]; ?></td>
		<td><?php echo $row[3]; ?></td>
		<td><?php echo $row[5]; ?></td>
		<td><?php echo $row[4]; ?></td>
		<td><?php echo $row[6]; ?></td>
		<td><?php echo $row[7]; ?></td>
		<td><?php echo $row[8]; ?></td>

		    <td><a onclick="return delete_validate();" href="./delete.php?id=<?php echo $key; ?>">Delete </a> | 
			<a href="./edit.php?id=<?php echo $key; ?>" >Edit </a></td>
		</tr>		
	    <?php } ?>
	</table>
    </div>
</div>


