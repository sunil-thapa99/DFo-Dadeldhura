<?php
class Enewsletters
{
	function save($firstname, $lastname, $email, $zipCode, $country, $gender, $age, $profession)
	{
		global $conn;
				
		$sql = "INSERT INTO enewsletter SET firstname = '". cleanQuery($firstname) ."',
											lastname = '". cleanQuery($lastname) ."',
											email = '". cleanQuery($email) ."',
											zipCode = '". cleanQuery($zipCode) ."',
											country = '". cleanQuery($country) ."',
											gender = '". cleanQuery($gender) ."',
											age = '". cleanQuery($age) ."',
											profession = '". cleanQuery($profession) ."',
													onDate = now()";
		
		$conn->exec($sql);
		
		return $conn->insertId();
	}	
	
	function delete($id)
	{  
		global $conn;
		
		$sql = "DELETE FROM enewsletter WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function getAll()
	{
		global $conn;
		
		$sql = "SElECT * FROM enewsletter ORDER BY id DESC";
		$result = $conn->exec($sql);
		
		return $result;
	}

	function getById($id)
	{
		global $conn;
		
		$sql = "SElECT * FROM enewsletter WHERE id = '$id'";
		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		return $row;
	}
}
?>