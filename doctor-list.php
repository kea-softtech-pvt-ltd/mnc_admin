<?php
// include header
include_once('header.php');

// get all doctor data'
$query = "select * from ".Doc." where isDeleted='0' order by doc_id DESC";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

// include tpl
include('template/doctor-list.tpl.php');
?> 