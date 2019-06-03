<?php
// include header
include_once('includes/application_top.php');
include_once('header.php');

$query = "SELECT * FROM ".Dept." where isDeleted='0' order by dept_id DESC";
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);

// include tpl
include('template/department-list.tpl.php');
?> 