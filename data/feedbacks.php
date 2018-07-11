<?php
class Feedbacks
{
	function save($name, $address, $email, $country, $comment)
	{
		global $conn;
				
		$sql = "INSERT INTO feedbacks SET name = '". cleanQuery($name). "', address='". cleanQuery($address) ."',
				email = '". cleanQuery($email) ."', country='". cleanQuery($country) ."',
				comment = '". cleanQuery($comment) ."', onDate = now()";
		
		$conn->exec($sql);
		
		return $conn->insertId();
	}	
	
	function delete($id)
	{  
		global $conn;
		
		$sql = "DELETE FROM feedbacks WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function getAll()
	{
		global $conn;
		
		$sql = "SElECT * FROM feedbacks ORDER BY id DESC";
		$result = $conn->exec($sql);
		
		return $result;
	}

	function getById($id)
	{
		global $conn;
		
		$sql = "SElECT * FROM feedbacks WHERE id = '$id'";
		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		return $row;
	}
}
?>