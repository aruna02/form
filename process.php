<!DOCTYPE html>
<html>

<body>
    <body>
	<?php 
      $input_records = array($_POST);

if (isset($input_records)){
    $record = array();
    $record['fname'] = $_POST['fName'];
     $record['Mname'] = $_POST['Mname'];
     $record['lname'] = $_POST['lname'];
     $record['Age'] = $_POST['Age'];
    $record['email'] = $_POST['email'];
    $record['mobile'] = $_POST['mobile'];
    $record['Gender'] = $_POST['Gender'];
    $record['Address'] = $_POST['Address'];
    $record['hobby'] = $_POST['hobby'];
    $record['About'] = $_POST['About'];
    
    #$records = array();
    # $records = $record;
    
}

// checking if previous cookie is enabled or nota

 if(isset($_COOKIE['userinfo'])) {

     $records = json_decode($_COOKIE['userinfo'],true);
     $records[] = $record;
 }
 else {
     $records[] = $record;
 }


     setcookie('userinfo',json_encode($records), time() + 86400*10 );
     header('Location:list.php');


	
?>

    </body>
</html>

