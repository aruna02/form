<?php

include './database.php' ;

if(isset($_GET['id'])) {
        $id=$_GET['id'];
        $sqlquery = "DELETE FROM students WHERE id=".$id;
        mysqli_query($connection,$sqlquery);

        header('Location:./list.php');
}
?>