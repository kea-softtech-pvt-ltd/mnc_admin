<?php
include('header.php');
$query = "select * from ".Sch." where isDeleted='0' order by schedule_id DESC";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

include('template/schedule-list.tpl.php');
?>