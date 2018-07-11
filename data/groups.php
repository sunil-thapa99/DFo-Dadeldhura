<?php
class Groups
{
	function save($id, $name, $nameen, $urlname, $type, $parentId, $linkType, $shortcontents, $shortcontentsen, $contents, $contentsen, $weight, $pageTitle, $pageKeyword, $featured, $display)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		//$namenp = cleanQuery($namenp);
		$nameen = cleanQuery($nameen);
		$urlname = cleanQuery($urlname);
		$type = cleanQuery($type);
		$parentId = cleanQuery($parentId);
		$linkType = cleanQuery($linkType);
		$shortcontents = cleanQuery($shortcontents);
		$contents = cleanQuery($contents);
		$shortcontentsen = cleanQuery($shortcontentsen);
		$contentsen = cleanQuery($contentsen);
		$weight = cleanQuery($weight);
		$pageTitle = cleanQuery($pageTitle);
		$pageKeyword = cleanQuery($pageKeyword);
		$featured = cleanQuery($featured);
		$display = cleanQuery($display);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							nameen = '$nameen',
							urlname = '$urlname',
							parentId='$parentId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							shortcontentsen = '$shortcontentsen',
							contentsen = '$contentsen',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							featured = '$featured',
							display = '$display'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							nameen = '$nameen',
							urlname = '$urlname',
							type='$type',
							parentId='$parentId',
							linkType = '$linkType',
							shortcontents = '$shortcontents',
							contents = '$contents',
							shortcontentsen = '$shortcontentsen',
							contentsen = '$contentsen',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							featured = '$featured',
							display = '$display',
							onDate = NOW()";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
		
	function saveListSub($id, $name, $urlname, $parentId, $shortcontents, $contents, $featured, $weight, $pageTitle, $pageKeyword)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		$parentId = cleanQuery($parentId);
		$shortcontents = cleanQuery($shortcontents);
		$contents = cleanQuery($contents);
		$featured = cleanQuery($featured);
		$weight = cleanQuery($weight);
		$pageTitle = cleanQuery($pageTitle);
		$pageKeyword = cleanQuery($pageKeyword);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							featured = '$featured',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							linkType = 'ListSub',
							shortcontents = '$shortcontents',
							contents = '$contents',
							featured = '$featured',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							onDate = NOW()";

		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	
	function saveGallerySub($id, $parentId, $shortcontents)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$parentId = cleanQuery($parentId);
		$shortcontents = cleanQuery($shortcontents);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							shortcontents = '$shortcontents'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							parentId='$parentId',
							linkType = 'GallerySub',
							shortcontents = '$shortcontents',
							onDate = NOW()";

		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function saveVideoSub($id, $parentId, $contents)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$parentId = cleanQuery($parentId);
		$contents = cleanQuery($contents);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							contents = '$contents'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							parentId='$parentId',
							linkType = 'VideoSub',
							contents = '$contents',
							onDate = NOW()";

		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function getByLinkType($linkType)
	{
		global $conn;
		$linkType = cleanQuery($linkType);
		$sql = "SElECT * FROM groups WHERE `linkType` = '$linkType' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;	
	
	}
	
	function saveBlock($id, $name, $urlname, $weight, $pageTitle, $pageKeyword)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		$weight = cleanQuery($weight);
		$pageTitle = cleanQuery($pageTitle);
		$pageKeyword = cleanQuery($pageKeyword);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							linkType = 'Block',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							onDate = NOW()";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	
	
	
	
	function saveDestination($id, $name, $urlname, $block, $shortcontents, $contents, $weight, $pageTitle, $pageKeyword)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		
		$block = cleanQuery($block);
		$shortcontents = cleanQuery($shortcontents);
		$contents = cleanQuery($contents);
		
		$weight = cleanQuery($weight);
		$pageTitle = cleanQuery($pageTitle);
		$pageKeyword = cleanQuery($pageKeyword);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							block = '$block',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							linkType = 'Destination',
							block = '$block',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							onDate = NOW()";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	
	
	
	function saveActivity($id, $name, $urlname, $block, $shortcontents, $contents, $weight, $featured, $pageTitle, $pageKeyword)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		
		$block = cleanQuery($block);
		$shortcontents = cleanQuery($shortcontents);
		$contents = cleanQuery($contents);
		
		$weight = cleanQuery($weight);
		$featured = cleanQuery($featured);
		$pageTitle = cleanQuery($pageTitle);
		$pageKeyword = cleanQuery($pageKeyword);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							block = '$block',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							featured = '$featured',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							linkType = 'Activity',
							block = '$block',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							featured = '$featured',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							onDate = NOW()";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	
	
	function saveRegion($id, $name, $urlname, $block, $shortcontents, $contents, $weight, $pageTitle, $pageKeyword)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		
		$block = cleanQuery($block);
		$shortcontents = cleanQuery($shortcontents);
		$contents = cleanQuery($contents);
		
		$weight = cleanQuery($weight);
		$pageTitle = cleanQuery($pageTitle);
		$pageKeyword = cleanQuery($pageKeyword);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							block = '$block',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							linkType = 'Region',
							block = '$block',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							onDate = NOW()";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	
	
	
	
	function saveProduct1($id, $name, $urlname, $parentId, $shortcontents, $contents, $weight, $pageTitle, $pageKeyword, $code, $price, $featured, $sold, $height, $width, $pcolor, $scolor)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		$parentId = cleanQuery($parentId);
		$shortcontents = cleanQuery($shortcontents);
		$contents = cleanQuery($contents);
		$weight = cleanQuery($weight);
		$pageTitle = cleanQuery($pageTitle);
		$pageKeyword = cleanQuery($pageKeyword);
		$code = cleanQuery($code);
		$price = cleanQuery($price);
		$featured = cleanQuery($featured);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							code = '$code',
							price = '$price',
							featured = '$featured',
							sold = '$sold',
							height = '$height',
							width = '$width',
							pcolor = '$pcolor',
							scolor = '$scolor'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							parentId='$parentId',
							linkType = 'Product',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							pageTitle = '$pageTitle',
							pageKeyword = '$pageKeyword',
							code = '$code',
							price = '$price',
							featured = '$featured',
							sold = '$sold',
							height = '$height',
							width = '$width',
							pcolor = '$pcolor',
							scolor = '$scolor'
							onDate = NOW()";
		
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function saveRegionOld($id, $name, $urlname, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		$weight = cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							weight = '$weight'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							linkType = 'PackageRegion',
							weight = '$weight',
							onDate = NOW()";

		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}	
	
	function savePackageType($id, $name, $urlname, $parentId, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		$parentId = cleanQuery($parentId);
		$weight = cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							parentId = '$parentId',
							weight = '$weight'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							linkType = 'PackageType',
							parentId = '$parentId',
							weight = '$weight',
							onDate = NOW()";

		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}	
	
	function saveProduct($id, $title, $urlname, $block, $activity, $code, $price, $shortcontents, $contents, $publish, $featured, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$name = cleanQuery($title);
		$urlname = cleanQuery($urlname);
		$block = cleanQuery($block);
		$activity = cleanQuery($activity);
		$code=cleanQuery($code);
		$price=cleanQuery($price);
		
		$shortcontents=cleanQuery($shortcontents);
		$contents=cleanQuery($contents);
		$publish=cleanQuery($publish);
		$featured=cleanQuery($featured);
		$weight=cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							block = '$block',
							activity = '$activity',
							code='$code',
							price='$price',
							shortcontents = '$shortcontents',
							contents='$contents',
							publish='$publish',
							featured='$featured',
							weight = '$weight'						
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups SET name = '$name',urlname = '$urlname',linkType = 'Product',block = '$block',activity = '$activity',code = '$code',price ='$price',shortcontents = '$shortcontents',contents = '$contents',publish = '$publish',featured = '$featured',weight = '$weight',onDate = NOW()";
		//echo $sql; die();
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function savePackageCMS($id, $packageId, $name, $urlname, $shortcontents, $contents, $weight, $regionId, $categoryId)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$packageId = cleanQuery($packageId);
		$name = cleanQuery($name);
		$urlname = cleanQuery($urlname);
		$contents = cleanQuery($contents);
		$weight = cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE groups
						SET
							name = '$name',
							urlname = '$urlname',
							parentId = '$packageId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							regionId = '$regionId',
							categoryId = '$categoryId'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO groups 
						SET
							name = '$name',
							urlname = '$urlname',
							linkType = 'PackageCMS',
							parentId = '$packageId',
							shortcontents = '$shortcontents',
							contents = '$contents',
							weight = '$weight',
							regionId = '$regionId',
							categoryId = '$categoryId',
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
		
		copy($_FILES['image']['tmp_name'], "../". CMS_GROUPS_DIR . $image);
		
		$sql = "UPDATE groups SET image = '$image' WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	
	function saveMap($id)
	{
		global $conn;
		global $_FILES;
		
		if ($_FILES['map']['size'] <= 0)
			return;
		
		$id = cleanQuery($id);
		$filename = $_FILES['map']['name'];
		
		/*$ext = end(explode(".", $filename));
		$image = $id . "." . $ext;*/
		$map = $filename;
		
		copy($_FILES['map']['tmp_name'], "../". CMS_GROUPS_DIR . $map);
		
		$sql = "UPDATE groups SET map = '$map' WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	
	function saveProductImage($productId)
	{
		global $conn;
		global $_FILES;
		
		if ($_FILES['image']['size'] <= 0)
			return;
		
		$id = cleanQuery($productId);
		$filename = $_FILES['image']['name'];
		
		$ext = end(explode(".", $filename));
		$image = $id . "." . $ext;
		
		copy($_FILES['image']['tmp_name'], "../". CMS_GROUPS_DIR . $image);
		
		$sql = "UPDATE groups SET image = '$image' WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function updateImage($id, $image)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$image = cleanQuery($image);
		
		$sql = "UPDATE groups SET image = '$image' WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function updateUrlName($id)
	{
		global $conn;
		
		$id = cleanQuery($id);
		
		$sql = "UPDATE groups SET urlname = '$id' WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function deleteImage($id)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$result = $this->getById($id);
		$row = $conn->fetchArray($result);
		$image = "../". CMS_GROUPS_DIR . $row['image'];
		
		if (file_exists($image))
			unlink($image);
		
		$sql = "UPDATE groups SET image = '' WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	
	function deleteMap($id)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$result = $this->getById($id);
		$row = $conn->fetchArray($result);
		$map = "../". CMS_GROUPS_DIR . $row['map'];
		
		if (file_exists($map))
			unlink($map);
		
		$sql = "UPDATE groups SET map = '' WHERE id = '$id'";
		$conn->exec($sql);
	}
	

	function getById($id)
	{
		global $conn;

		$id = cleanQuery($id);

		$sql = "SElECT * FROM groups WHERE id = '$id'";
		$result = $conn->exec($sql);
		
		return $result;
	}

	function getByIdResult($id)
	{
		global $conn;

		$id = cleanQuery($id);

		$sql = "SElECT * FROM groups WHERE id = '$id'";
		$result = $conn->fetchArray($conn->exec($sql));
		
		return $result;
	}
	
	function getByActivityName($name)
	{
		global $conn;

		$name = cleanQuery($name);

		$sql = "SElECT * FROM groups WHERE name = '$name' and linkType='Activity'";
		$result = $conn->exec($sql);
		
		return $result;
	}
		
	function getByParentId($parentId)
	{
		global $conn;
		
		$parentId = cleanQuery($parentId);
		
		$sql = "SElECT * FROM groups WHERE parentId = '$parentId' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getByParentIdAndType($id, $type)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$type = cleanQuery($type);
		
		$sql = "SElECT * FROM groups WHERE `type` = '$type' AND parentId = '$id' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getByParentIdAndLinkType($id, $linkType)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$linkType = cleanQuery($linkType);
		
		$sql = "SElECT * FROM groups WHERE linkType = '$linkType' AND parentId = '$id' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	
	function getByBlock($block)
	{
		global $conn;
		
		$block = cleanQuery($block);
		
		$sql = "SElECT * FROM groups WHERE  block = '$block' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getTripByBlockWithLimit($block, $limit)
	{
		global $conn;
		
		$block = cleanQuery($block);
		$limit=cleanQuery($limit);
		$sql = "SElECT * FROM groups WHERE  block = '$block' and publish='Yes' ORDER BY weight limit $limit";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getByLinkTypeAndBlock($linkType, $block)
	{
		global $conn;
		$linkType=cleanQuery($linkType);
		$block = cleanQuery($block);
		
		$sql = "SElECT * FROM groups WHERE linkType='$linkType' and block = '$block' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	
	function getByLinkTypeAndBlockWithLimit($linkType, $block, $limit)
	{
		global $conn;
		$linkType=cleanQuery($linkType);
		$block = cleanQuery($block);
		$limit=cleanQuery($limit);
		
		$sql = "SElECT * FROM groups WHERE linkType='$linkType' and block = '$block' ORDER BY weight limit $limit";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getByActivity($activity)
	{
		global $conn;
		$activity=cleanQuery($activity);
		
		$sql = "SElECT * FROM groups WHERE activity='$activity' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getByActivityWithLimit($activity, $limit)
	{
		global $conn;
		$activity=cleanQuery($activity);
		$limit = cleanQuery($limit);
		
		$sql = "SElECT * FROM groups WHERE activity='$activity' ORDER BY weight limit $limit";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getByLinkTypeAndFeaturedWithLimit($linkType, $featured, $limit)
	{
		global $conn;
		$linkType=cleanQuery($linkType);
		$featured=cleanQuery($featured);
		$limit = cleanQuery($limit);
		
		$sql = "SElECT * FROM groups WHERE linkType='$linkType' and featured='$featured' ORDER BY weight limit $limit";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	
	function getByRegionWithLimit($region, $limit)
	{
		global $conn;
		$linkType=cleanQuery($region);
		$limit = cleanQuery($limit);
		
		$sql = "SElECT * FROM groups WHERE linkType='$region' ORDER BY weight limit $limit";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	
	function delete($id)
	{  
		global $conn;
		
		$id = cleanQuery($id);
		
		$result = $this->getById($id);
		$row = $conn->fetchArray($result);
		
		$file = "../" . CMS_GROUPS_DIR . $row['image'];
		
		if (file_exists($file) && !empty($row['image']))
			unlink($file);
	
		if ($row['linkType'] == "File")
		{
			$file = "../" . CMS_FILES_DIR . $row['contents'];
			
			if (file_exists($file) && !empty($row['contents']))
				unlink($file);
		}
		else if ($row['linkType'] == "List")
		{
			$lResult = $this -> getByParentId($id);
			while ($lRow = $conn->fetchArray($lResult))
				$this->delete($lRow['id']);
		}
		else if ($row['linkType'] == "Gallery")
		{
			$gResult = $this->getByParentId($id);
			while ($gRow = $conn->fetchArray($gResult))
				$this->delete($gRow['id']);
		}
		else if ($row['linkType'] == "Video Gallery")
		{
			$gResult = $this->getByParentId($id);
			while ($gRow = $conn->fetchArray($gResult))
				$this->delete($gRow['id']);
		}
		
		$sql = "DELETE FROM groups WHERE id = '$id'";
		$conn->exec($sql);
	}	
	
	function getByParentIdWithLimit($parentId, $limit)
	{
		global $conn;
		
		
		$sql = "SElECT * FROM groups WHERE parentId = '$parentId' ORDER BY weight, id DESC LIMIT $limit";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
		
	function getByParentIdAndTypeWithLimit($type, $parentId, $limit)
	{
		global $conn;
		$parentId = cleanQuery($parentId);
		
		$sql = "SElECT * FROM groups WHERE parentId = '$parentId' AND `type` = '$type' ORDER BY weight LIMIT $limit";
		$result = $conn->exec($sql);
		
		return $result;
	}	
	
	function getByType($type)
	{
		global $conn;
		
		$sql = "SElECT * FROM groups WHERE type = '$type' ORDER BY weight";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function getNameById($id)
	{
		global $conn;
		
		$sql = "SElECT * FROM groups WHERE id = '$id'";
		$result = $conn->exec($sql);
		$row = $conn->fetchArray($result);
		return $row['name'];
	}

	function comboRecursion($parentId, $selectedId, $times)
	{
		global $conn;	
		
		if (is_numeric($parentId))
			$sql = "SELECT * FROM groups WHERE parentId = '$parentId' ORDER BY weight";
		else
			$sql = "SELECT * FROM groups WHERE parentId = '0' AND type = '$parentId' ORDER BY weight";
			
		$result = $conn->exec($sql);
		
		while ($row = $conn->fetchArray($result))
		{
			$spaces = $this->spaces($times);
			if ($row['linkType'] != "Normal Group")
			{
				echo "<optgroup label='". $row['name'] ."'";
			}
			else
			{
				echo "<option value='".$row['id']."'";
				if ($row['id'] == $selectedId)
					echo " selected ";
			}
			echo ">";
			echo $spaces . $row['name'];
			if ($row['linkType'] != "Normal Group")
				echo "</optgroup>";
			else
				echo "</option>";
			$this->comboRecursion((int) $row['id'], $selectedId, ++$times);
			
			--$times;
		}
	}
	
	function comboRecursionTravel($parentId, $selectedId, $times)
	{
		global $conn;	
		
		if (is_numeric($parentId))
			$sql = "SELECT * FROM groups WHERE parentId = '$parentId' ORDER BY weight";
		else
			$sql = "SELECT * FROM groups WHERE parentId = '0' AND linkType = '$parentId' ORDER BY weight";
	echo $sql;		
		$result = $conn->exec($sql);
		
		while ($row = $conn->fetchArray($result))
		{
			$spaces = $this->spaces($times);
			echo "<option value='".$row['id']."'";
			if ($row['id'] == $selectedId)
				echo " selected ";
			echo ">";
			echo $spaces . $row['name'];
			echo "</option>";
			$this->comboRecursionTravel((int) $row['id'], $selectedId, ++$times);
			
			--$times;
		}
	}

	
	function spaces($times)
	{
		$spaces = "";
		for ($i=0; $i<$times;$i++)
			$spaces .= "--";
			
		return $spaces;
	}
	
	function writeBreadCrumb($id)
	{
		$list = array();
		$this->getBreadCrumb($id, $list);

		if(count($list) > 1)
			echo '<div id="breadcrumb">';
		
		for ($i=count($list)-1; $i>0; $i--)
		{
			echo $list[$i];
			echo "&nbsp;";
			echo "&raquo";
			echo "&nbsp;";
		}
		if(count($list) > 1)
			echo '</div>';
	}
	
	function getBreadCrumb($id, &$list)
	{
		global $conn;
		
		$result = $this->getById($id);
		
		while ($row = $conn->fetchArray($result))
		{
			array_push($list, "<a class='breadcrumb' href='". $row['urlname'] . "'>" . $row['name'] . "</a>");
			
			$this->getBreadCrumb($row['parentId'], $list);
		}
	}
	
	function isDeletable($id)
	{
		global $conn;
	
		$result = $this->getByParentId($id);
		if ($conn->numRows($result) > 0)  //has a child group
			return false;
				
		return true;
	}
	
	function getLastWeight($type, $parentId)
	{
		global $conn;
		
		$sql = "SElECT weight FROM groups WHERE `type` = '$type' AND parentId = '$parentId' ORDER BY weight DESC LIMIT 1";
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
	
	function getSubLastWeight($parentId, $linkType)
	{
		global $conn;
		
		$sql = "SElECT weight FROM groups WHERE parentId = '$parentId' AND linkType = '$linkType' ORDER BY weight DESC LIMIT 1";
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
	
	function getNextResult($id)
	{
		global $conn;
		
		$result = $this->getById($id);
		$row = $conn->fetchArray($result);
		
		$parentId = $row['parentId'];
		
		$sql = "SELECT * FROM groups WHERE  
					parentId = '$parentId' AND id > '$id' LIMIT 1";
		$result = $conn->exec($sql);
		if ($conn->numRows($result) == 0)
		{
			$sql = "SELECT * FROM groups WHERE parentId = '$parentId' LIMIT 1";
			$result = $conn->exec($sql);
			return $result;
		}
		else
		{
		 	return $result;
		}
	}
	
	function getPreviousResult($id)
	{
		global $conn;
		
		$result = $this->getById($id);
		$row = $conn->fetchArray($result);
		
		$parentId = $row['parentId'];
		
		$sql = "SELECT * FROM groups WHERE 
					parentId = '$parentId' AND id < '$id' ORDER BY id DESC LIMIT 1";
		$result = $conn->exec($sql);
		if ($conn->numRows($result) == 0)
		{
			$sql = "SELECT * FROM groups WHERE parentId = '$parentId' ORDER BY id DESC LIMIT 1";
			$result = $conn->exec($sql);
			return $result;
		}
		else
		{
		 	return $result;
		}
	}
	
	function getMainParent($id)
	{
		global $conn;
		global $mainParentId;
		
		$sql = "SElECT id, parentId FROM groups WHERE id = '$id'";
		$result = $conn->exec($sql);
		$row = $conn->fetchArray($result);

		if($row['parentId'] > 0)
			$this -> getMainParent($row['parentId']);
		else
		{
			$mainParentId = $id;
			return;
		}
	}
	
	function getByURLName($urlname)
	{
		global $conn;
		
		$sql = "SElECT * FROM groups WHERE urlname = '$urlname'";
		$result = $conn->exec($sql);
		$numRows = $conn -> numRows($result);
		if($numRows > 0)
		{
			$row = $conn->fetchArray($result);
			return $row;
		}
		return false;
	}
	
	
	
	function getByAlias($alias)
	{
		global $conn;
		
		$sql = "SElECT * FROM groups WHERE urlname = '$alias'";
		$result = $conn->exec($sql);
		return $result;
	}
	
	
	function isUnique($id=0, $urlname)
	{
		global $conn;
		
		$sql = "SELECT COUNT(id) cnt FROM groups WHERE urlname = '$urlname' AND id <> '$id'";

		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		if($row['cnt'] > 0)
		{
			return false;
		}
		return true;
	}
	
	function getPageTitle($id)
	{
		global $conn;
		
		$sql = "SElECT pageTitle FROM groups WHERE id = '". cleanQuery($id) ."'";
		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		return $row['pageTitle'];
	}
	
	function getPageKeyword($id)
	{
		global $conn;
		
		$sql = "SElECT pageKeyword FROM groups WHERE id = '". cleanQuery($id) ."'";
		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		return $row['pageKeyword'];
	}

	
	// for billing system
	function getByIdBills($id)
	{
		global $conn;
		$id = cleanQuery($id);
		$sql = "SElECT * FROM bills WHERE id = '$id'";
		$result = $conn->exec($sql);
		return $result;
	}
		
	function getLastWeightBills()
	{
		global $conn;
		
		$sql = "SElECT weight FROM bills ORDER BY weight DESC LIMIT 1";
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
	
	function saveBills($id, $description, $busn, $spentTitle, $buying, $panNo, $paymentReceiver, $billDate, $amount, $remarks, $publish, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$description = cleanQuery($description);
		$busn = cleanQuery($busn);
		$spentTitle = cleanQuery($spentTitle);
		$buying = cleanQuery($buying);
		$panNo=cleanQuery($panNo);
		$paymentReceiver=cleanQuery($paymentReceiver);	
		$billDate=cleanQuery($billDate);
		$amount=cleanQuery($amount);
		$remarks=cleanQuery($remarks);
		$publish=cleanQuery($publish);
		$weight=cleanQuery($weight);
		
		if($id > 0)
		$sql = "UPDATE bills
						SET
							description = '$description',
							busn = '$busn',
							spentTitle = '$spentTitle',
							buying = '$buying',
							panNo='$panNo',
							paymentReceiver='$paymentReceiver',
							billDate = '$billDate',
							amount='$amount',
							remarks='$remarks',
							publish='$publish',
							weight = '$weight'						
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO bills SET description= '$description',busn = '$busn',spentTitle = '$spentTitle',buying = '$buying',panNo = '$panNo',paymentReceiver = '$paymentReceiver',billDate ='$billDate',amount = '$amount',remarks = '$remarks',publish = '$publish',weight = '$weight',onDate = NOW()";
		//echo $sql; die();
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function getByIdBill($id)
	{
		global $conn;

		$id = cleanQuery($id);

		$sql = "SElECT * FROM bills WHERE id = '$id'";
		$result = $conn->exec($sql);
		
		return $result;
	}
	
	function deleteBill($id)
	{  
		global $conn;
		$id = cleanQuery($id);
		$result = $this->getByIdBill($id);
		$sql = "DELETE FROM bills WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	// procedures for management information system
	
	function saveProgramType($id, $program_name, $publish, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$program_name = cleanQuery($program_name);
		$publish = cleanQuery($publish);
		$weight = cleanQuery($weight);
		if($id > 0)
		$sql = "UPDATE programtype
						SET
							program_name = '$program_name',
							weight = '$weight',
							publish = '$publish'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO programtype SET program_name = '$program_name', publish='$publish', weight='$weight'";
		//echo $sql; die();
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function getProgramLastWeight()
	{
		global $conn;
		$sql = "SElECT weight FROM programtype ORDER BY weight DESC LIMIT 1";
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
	
	function getUserLastWeight()
	{
		global $conn;
		$sql = "SElECT weight FROM usertype ORDER BY weight DESC LIMIT 1";
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
	
	function saveUserType($id, $user_type, $publish, $weight)
	{
		global $conn;
		$id = cleanQuery($id);
		$user_type = cleanQuery($user_type);
		$publish = cleanQuery($publish);
		$weight = cleanQuery($weight);
		if($id > 0)
		$sql = "UPDATE usertype
						SET
							user_type = '$user_type',
							weight = '$weight',
							publish = '$publish'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO usertype SET user_type = '$user_type', publish='$publish', weight='$weight'";
		//echo $sql; die();
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	//for program level
	function saveProgramLevel($id, $program_level, $publish, $weight)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$program_level = cleanQuery($program_level);
		$publish = cleanQuery($publish);
		$weight = cleanQuery($weight);
		if($id > 0)
		$sql = "UPDATE programlevel
						SET
							program_level = '$program_level',
							weight = '$weight',
							publish = '$publish'
						WHERE
							id = '$id'";
		else
		$sql = "INSERT INTO programlevel SET program_level = '$program_level', publish='$publish', weight='$weight'";
		//echo $sql; die();
		$conn->exec($sql);
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function getProgramLevelLastWeight()
	{
		global $conn;
		$sql = "SElECT weight FROM programlevel ORDER BY weight DESC LIMIT 1";
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
