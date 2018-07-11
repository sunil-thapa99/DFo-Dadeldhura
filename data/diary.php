<?php
class Diary
{
	function isUnique($id=0, $urlname)
	{
		global $conn;
		
		$sql = "SELECT COUNT(id) cnt FROM diary WHERE urlname = '$urlname' AND id <> '$id'";

		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		if($row['cnt'] > 0)
		{
			return false;
		}
		return true;
	}
	
	function saveFFEW($id, $name, $urlname, $categoryId, $phone, $fax, $email, $website, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		$categoryId = cleanQuery($categoryId);
		$phone = cleanQuery($phone);
		$fax = cleanQuery($fax);
		$email = cleanQuery($email);
		$website = cleanQuery($website);
		$weight = cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE diary
						SET
							name = '$name',
							urlname = '$urlname',
							categoryId='$categoryId',
							phone = '$phone',
							fax = '$fax',
							email = '$email',
							website = '$website',
							weight = '$weight'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO diary 
						SET
							name = '$name',
							urlname = '$urlname',
							categoryId='$categoryId',
							phone = '$phone',
							fax = '$fax',
							email = '$email',
							website = '$website',
							weight = '$weight',
							onDate = NOW()";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function saveContent($id, $name, $urlname, $categoryId, $shortcontents, $contents, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		$categoryId = cleanQuery($categoryId);
		$shortcontents = cleanQuery($shortcontents);
		$contents = cleanQuery($contents);
		$weight = cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE diary
						SET
							name = '$name',
							urlname = '$urlname',
							categoryId='$categoryId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO diary 
						SET
							name = '$name',
							urlname = '$urlname',
							categoryId='$categoryId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							onDate = NOW()";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function saveImage($id)
	{
		global $conn;
		global $_FILES;
		
		if ($_FILES['image']['size'] <= 0)
			return;
		
		$id = cleanQuery($id);
		$filename = $_FILES['image']['name'];
		
		/*$ext = end(explode(".", $filename));
		$image = $id . "." . $ext;*/
		$image = $filename;
		
		copy($_FILES['image']['tmp_name'], "../". CMS_DIARY_DIR . $image);
		
		$sql = "UPDATE diary SET image = '$image' WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function getById($id)
	{
		global $conn;

		$id = cleanQuery($id);

		$sql = "SElECT * FROM diary WHERE id = '$id'";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getByParentIdAndType($id, $categoryId)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$categoryId = cleanQuery($categoryId);
		
		$sql = "SElECT * FROM diary WHERE `categoryId` = '$categoryId' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getByCategoryId($CategoryId)
	{
		global $conn;
		
		$parentId = cleanQuery($parentId);
		
		$sql = "SElECT * FROM diary WHERE categoryId = '$CategoryId' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function updateImage($id, $image)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$image = cleanQuery($image);
		
		$sql = "UPDATE diary SET image = '$image' WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function delete($id)
	{  
		global $conn;
		
		$id = cleanQuery($id);
		
		$result = $this->getById($id);
		$row = $conn->fetchArray($result);
		
		$file = "../" . CMS_DIARY_DIR . $row['image'];
		
		if (file_exists($file) && !empty($row['image']))
			unlink($file);
			
		$sql = "DELETE FROM diary WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function getLastWeight($categoryId)
	{
		global $conn;
		$categoryId = cleanQuery($categoryId);
		
		$sql = "SElECT weight FROM diary WHERE categoryId='$categoryId' ORDER BY weight DESC LIMIT 1";
		$result = $conn->exec($sql);
		$numRows = $conn -> numRows($result);
		if($numRows > 0)
		{
			$row = $conn->fetchArray($result);
			return $row['weight'] + 10;
		}
		else
			return 10;
	}
	
}
?>
