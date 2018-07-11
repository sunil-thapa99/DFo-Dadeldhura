<?php
$value = $_GET['value'];
$value = str_replace("!", "", $value);
$value = str_replace("@", "", $value);
$value = str_replace("#", "", $value);
$value = str_replace("$", "", $value);
$value = str_replace("%", "", $value);
$value = str_replace("^", "", $value);
$value = str_replace("&", "", $value);
$value = str_replace("*", "", $value);
$value = str_replace("(", "", $value);
$value = str_replace(")", "", $value);
$value = str_replace("_", "", $value);
$value = str_replace("{", "", $value);
$value = str_replace("}", "", $value);
$value = str_replace("[", "", $value);
$value = str_replace("]", "", $value);
$value = str_replace(":", "", $value);
$value = str_replace(";", "", $value);
$value = str_replace("'", "", $value);
$value = str_replace("\"", "", $value);
$value = str_replace("'", "", $value);
$value = str_replace("<", "", $value);
$value = str_replace(",", "", $value);
$value = str_replace(">", "", $value);
$value = str_replace(".", "", $value);
$value = str_replace("?", "", $value);
$value = str_replace("/", "", $value);
$value = str_replace("\\", "", $value);
$value = str_replace("'", "", $value);
$value = str_replace("|", "", $value);
$value = str_replace("  ", " ", $value);

$value = trim($value);
$value = str_replace(" ", "-", $value);
$value = strtolower($value);
echo $value;
?>