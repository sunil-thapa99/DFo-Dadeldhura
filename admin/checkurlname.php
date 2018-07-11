<?php
require_once("../data/conn.php");
require_once("../data/groups.php");

$conn 					= new Dbconn();		
$groups					= new Groups();

$id = $_GET['id'];
$urlname = $_GET['value'];

if($groups -> isUnique($id, $urlname))
	echo "<span style='color:#0000FF'>Alias Name available</span>";
else
	echo "<span style='color:#FF0000'>Alisas Name already exists</a>";
?>