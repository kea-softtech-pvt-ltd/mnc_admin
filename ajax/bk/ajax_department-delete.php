<?php
include_once('../includes/application_top.php');


$id = $_POST['id'];

$query = "UPDATE ".Dept." SET isDeleted='1' WHERE dept_id='".$id."'";

if(mysqli_query($conn, $query))
{
	echo "success";
}
else
{
	echo "error";
}


?>