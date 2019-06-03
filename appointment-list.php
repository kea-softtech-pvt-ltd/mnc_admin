<?php
// include header
include_once('header.php');

// get all ".Doc." data
$query = "select ".Doc.".f_name, ".Doc.".l_name, ".Pat.".fname,".Pat.".lname, ".Dept.".dept_name,".App.".app_id ,".App.".app_date, ".App.".problem, ".App.".status from ".Doc." INNER JOIN ".App." on ".Doc.".doc_id=".App.".doc_id INNER JOIN ".Pat." ON ".Pat.".".Pat."_id=".App.".".Pat."_id INNER JOIN ".Dept." on ".Dept.".dept_id=".App.".".Dept."_id where appointment.isDeleted='0' order by app_id DESC";

$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

// include tpl
include('template/appointment-list.tpl.php');
?> 