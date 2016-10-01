<?php session_start() ?>
<?php 
//var_dump($_POST);
//$record=array($_POST);
/*if(isset($_POST))
{*/
$_SESSION['name']=$_POST['Username'];
$_SESSION['password']=$_POST['password'];
print_r($_SESSION);
define(name, aruna);
define(password, aruna);
if($_SESSION['name']==name && $_SESSION['password']==password)
{
	header('location:form.php');
}
else
{	header('location:index.php');
}
/*}
*/

/*if(isset($record))
{
	$record=array();
	$record[name]=$_POST[name];
	$record[password]=$_POST[password];
	print_r($record);
}*/

?>