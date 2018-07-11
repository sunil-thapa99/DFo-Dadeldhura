<?php
class Testimonials 
{
	function save($id, $name, $address, $comments, $image)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$address = cleanQuery($address);
		$comments = cleanQuery($comments);
		$image = cleanQuery($image);
		
		if($id > 0)
		$sql="UPDATE testimonials 
					SET
						name = '$name',
						address = '$address',
						comments = '$comments',
						image = '$image
					WHERE
						$id = '$id'";
		else
		$sql="INSERT INTO testimonials 
					SET
						name = '$name',
						address = '$address',
						comments = '$comments',
						image = '$image',
						onDate = NOW()";
		//echo $sql;
		$result = $conn -> exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn ->insertId();
	}
	
	function getAll()		
	{
		global $conn;
		
		$sql = "SELECT * FROM testimonials ORDER BY id DESC, onDate DESC";

		$result = $conn->exec($sql);
		return $result;
	}
	
	function getActive()		
	{
		global $conn;
		
		$sql = "SELECT * FROM testimonials WHERE status=1 ORDER BY id DESC, onDate DESC";

		$result = $conn->exec($sql);
		return $result;
	}
	
	function getActiveWithLimit($howmany)		
	{
		global $conn;
		
		$sql = "SELECT * FROM testimonials WHERE status=1 ORDER BY id DESC, onDate DESC LIMIT 0,$howmany";

		$result = $conn->exec($sql);
		return $result;
	}
	
	function getActiveCount()		
	{
		global $conn;
		
		$sql = "SELECT COUNT(*) cnt FROM testimonials WHERE status=1 ORDER BY onDate DESC";
		
		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		return $row['cnt'];
	}
	
	function updateStatus($id)
	{
		global $conn;
		
		$row = $this -> getById($id);
		if($row['status'] == 1)
			$stat = 0;
		else
			$stat = 1;

		$sql="UPDATE testimonials SET `status` = '$stat' WHERE id = '$id'";

		$result = $conn->exec($sql);
		return $conn -> affRows();
	}
	
	function getById($id)
	{
		global $conn;
		
		$sql = "SELECT * FROM testimonials WHERE id = '$id'";

		$result = $conn->exec($sql);
		return $conn -> fetchArray($result);
	}
		
	function delete($id)
	{
		global $conn;
		
		$sql = "DELETE FROM testimonials WHERE id = '$id'";
		
		$result = $conn -> exec($sql);
		return $conn -> affRows();
	}	
}
?>