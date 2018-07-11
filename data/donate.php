<?php
class Donate
{
	function save($name, $address, $phone, $email, $country, $fax, $dtype)
	{
		global $conn;
				
		$sql = "INSERT INTO donate SET name = '$name', address='$address',
				phone='$phone', email = '$email', country='$country', fax = '$fax', dtype = '$dtype',
				onDate = now()";
		
		$conn->exec($sql);
		
		return $conn->insertId();
	}	
	
	function delete($id)
	{  
		global $conn;
		
		$sql = "DELETE FROM donate WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function getAll()
	{
		global $conn;
		
		$sql = "SElECT * FROM donate ORDER BY id DESC";
		$result = $conn->exec($sql);
		
		return $result;
	}

	function getById($id)
	{
		global $conn;
		
		$sql = "SElECT * FROM donate WHERE id = '$id'";
		$result = $conn->exec($sql);
		
		return $result;
	}
}
?>