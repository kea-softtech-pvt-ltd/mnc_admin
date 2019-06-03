<?php
//include_once('includes/application_top.php');

include_once('includes/MysqliDb.php');

$mysqli = new mysqli ('localhost', 'root', '', 'health');

$db = new MysqliDb ($mysqli);

$data = Array (
               "first_name" => $db->escape("John1"),
               "last_name" => 'Doe1'
);

$id = $db->insert ('admin', $data);
if($id)
    echo 'user was created. Id=' . $id;
die;

$id = '1';
$logins = $db->rawQueryValue('select dept_name from department where dept_id = "'.$db->escape($id).'" limit 10');

foreach ($logins as $dept_name)
    echo $dept_name."<br/>";
	
?>	