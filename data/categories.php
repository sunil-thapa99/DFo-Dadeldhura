<?php
class Categories
{
	function saveOrUpdate($id=0, $parentId, $title)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$parentId = cleanQuery($parentId);
		$title = cleanQuery($title);
		
		if($id > 0)
			$sql = "UPDATE categories SET parentId = '$parentId', title = '$title' WHERE id = '$id'";
		else
			$sql = "INSERT INTO categories SET parentId = '$parentId', title = '$title'";
		
		$conn->exec($sql);
		
		if($id > 0)
			return $conn -> affRows();
		return $conn->insertId();
	}
	
	function delete($id)
	{  
		global $conn;
		
		$id = cleanQuery($id);
	
		$sql = "DELETE FROM categories WHERE id = '$id'";
		$conn->exec($sql);
	}
	
	function getAll()
	{
		global $conn;
		
		$sql = "SElECT * FROM categories ORDER BY title ASC";
		$result = $conn->exec($sql);
		
		return $result;
	}

	function getById($id)
	{
		global $conn;
		
		$id = cleanQuery($id);
		
		$sql = "SElECT * FROM categories WHERE id = '$id'";
		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		return $row;
	}
	
	function getParent()
	{
		global $conn;
		
		$sql = "SElECT * FROM categories WHERE parentId = 0";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function getCombo($parentId, $selected, $times)
	{
		global $conn;
		global $times;
		
		$sql = "SElECT * FROM categories WHERE parentId = '$parentId'";		
		$result = $conn->exec($sql);
		while($row = $conn -> fetchArray($result))
		{
			$spaces = $this->spaces($times);
			echo '<option value="' . $row['id'] . '"';
			if($selected == $row['id'])
				echo 'selected="selected"';
			if($row['set'] == "yes")
				echo ' disabled="disabled"';
			
			echo '>' .$spaces .  $row['title'] . '</option>';
			
			$this -> getCombo($row['id'], $selected, ++$times);
			
			--$times;			
		}
	}
	
	function getCategories($parentId, $selected, $times)
	{
		global $conn;
		global $times;
		
		$sql = "SElECT * FROM categories WHERE parentId = '$parentId'";		
		$result = $conn->exec($sql);
		while($row = $conn -> fetchArray($result))
		{
			$spaces = $this->spaces($times);
			echo '<option value="' . $row['id'] . '"';
			if($selected == $row['id'])
				echo 'selected="selected"';
			$id = $row['id'];
			$dis=mysql_query("select * from categories where parentId='$id'");
			if(mysql_num_rows($dis)<1){}
			else
			{	
				echo ' disabled="disabled"';
			}
			
			echo '>' .$spaces .  $row['title'] . '</option>';
			
			$this -> getCategories($row['id'], $selected, ++$times);
			
			--$times;			
		}
	}
	
	function getDisabledCombo($parentId, $selected, $times)
	{
		global $conn;
		global $times;
		
		$sql = "SElECT * FROM categories WHERE parentId = '$parentId'";		
		$result = $conn->exec($sql);
		while($row = $conn -> fetchArray($result))
		{
			$spaces = $this->spaces($times);

				echo '<option value="' . $row['id'] . '"';
				if($selected == $row['id'])
					echo ' selected="selected"';
				if($row['set'] == "no")
					echo ' disabled="disabled"';
				echo '>' . $spaces .  $row['title'] . ' (' . $row['type'] . ')</option>';
			$this -> getDisabledCombo($row['id'], $selected, ++$times);
			
			--$times;			
		}
	}
	
	function spaces($times)
	{
		$spaces = "";
		for ($i=0; $i<$times;$i++)
			$spaces .= "-- ";
			
		return $spaces;
	}
	
	function getByParentId($parentId)
	{
		global $conn;
		
		$parentId = cleanQuery($parentId);
		
		$sql = "SElECT * FROM categories WHERE parentId = '$parentId'";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function getListOutput($parentId, $times)
	{
		global $conn;
		global $counter;
				
		$result = $this -> getByParentId($parentId);
		while($row = $conn -> fetchArray($result))
		{
			$padding = 15*$times;
			$editable = $this -> isEditable($row['id']);
			?>
      <tr <?php if($counter%2 != 0) echo 'bgcolor="#F7F7F7"'; else echo 'bgcolor="#FFFFFF"'; ?>>
        <td valign="top">&nbsp;</td>
        <td valign="top" style="padding-left:<?php echo $padding; ?>px"><?php echo ++$counter; ?></td>
        <td valign="top" style="padding-left:<?php echo $padding; ?>px"><?php echo $row['title'] ?></td>
        
        <td valign="top">
        [<a href="krishicategory.php?action=edit&id=<?php echo $row['id']; ?>">Edit</a>]
        <?php if($editable){ ?>       
        [<a href="#" onClick="javascript: if(confirm('This will permanently delete Category details from database. Continue?')){ document.location='krishicategory.php?delete=<?php echo $row['id']; ?>'; }">Delete</a>]
        <?php } ?>
        </td>
      </tr>
			<?php
			$this -> getListOutput($row['id'], ++$times);
			--$times;
		}	
	}
	
	function getTitle($id)
	{
		global $conn;
		
		$id = cleanQuery($id);
		$sql = "SElECT title FROM categories WHERE id = '$id'";
		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		
		return $row['title'];
	}
	
	function isEditable($id)
	{
		global $conn;
		global $questions;
		
		$id = cleanQuery($id);
		
		$sql = "SELECT COUNT(*) cnt FROM categories WHERE parentId = '$id'";
		$result = $conn -> exec($sql);
		$row = $conn -> fetchArray($result);
		if($row['cnt'] > 0)
			return false;
		else
		{
			//return true;
			$sql = "SELECT COUNT(*) cnt FROM diary WHERE categoryId = '$id'";
			$result = $conn -> exec($sql);
			$row = $conn -> fetchArray($result);
			if($row['cnt'] > 0)
				return false;
			return true;
		}
	}
	
	function getOnlyCategoryByParentId($parentId)
	{
		global $conn;
		
		$parentId = cleanQuery($parentId);
		
		$sql = "SElECT * FROM categories WHERE parentId = '$parentId' AND `set` = 'no'";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function getSet($parentId)
	{
		global $conn;
		
		$parentId = cleanQuery($parentId);
		
		$sql = "SElECT * FROM categories WHERE parentId = '$parentId' AND `set` = 'yes' ORDER BY id DESC";
		$result = $conn->exec($sql);
		return $result;
	}
	
	function getCnt($parentId)
	{
		global $conn;
		
		$parentId = cleanQuery($parentId);
		
		$sql = "SElECT COUNT(*) cnt FROM categories WHERE parentId = '$parentId' AND `set` = 'no'";
		$result = $conn->exec($sql);
		$row = $conn -> fetchArray($result);
		return $row['cnt'];
	}
	
	function writeBreadCrumb($id)
	{
		$list = array();
		$this->getBreadCrumb($id, $list);

		for ($i=count($list)-1; $i>=0; $i--)
		{
			echo $list[$i];
			echo "&nbsp;";
			echo "&raquo";
			echo "&nbsp;";
		}
	}
	
	function getBreadCrumb($id, &$list)
	{
		global $conn;
		
		
		$row = $this->getById($id);		
		
		if($row)
		{				
			array_push($list, $row['title']);
			$this->getBreadCrumb($row['parentId'], $list);
		}
	}
	
	function getNameById($id)
	{
		global $conn;
		
		$sql = "SElECT title FROM categories WHERE id = '$id'";
		$result = $conn->exec($sql);
		$row = $conn->fetchArray($result);
		return $row['title'];
	}
}
?>
