<?php
include_once('includes/application_top.php');
include('header.php');

$query = "select * from ".Pat." where isDeleted='0' order by patient_id DESC";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

include('template/patient-list.tpl.php');
?>

