<h1>Site map</h1>
<br />
<br />

<ul>
<?
$result1 = $groups->getByParentIdAndType(0, "Top Links");
while ($row1 = $conn->fetchArray($result1)) {
?>
	<li><a href="<?=$row1['urlname'];?>"><?=$row1['name'];?></a>
  <?
	$result2 = $groups->getByParentId($row1['id']);
	if ($conn->numRows($result2) > 0)
		echo "<ul>";
	
	while ($row2 = $conn->fetchArray($result2)) {
	?>
  <li><a href="<?=$row2['urlname'];?>"><?=$row2['name'];?></a>
		<?
    $result3 = $groups->getByParentId($row2['id']);
    if ($conn->numRows($result3) > 0)
      echo "<ul>";
    
    while ($row3 = $conn->fetchArray($result3)) {
		?>
    	<li><a href="<?=$row3['urlname'];?>"><?=$row3['name'];?></a></li>
    <?
		}
		if ($conn->numRows($result3) > 0)
      echo "</ul>";
		?>
  </li>
  <?
	}
	
	if ($conn->numRows($result2) > 0)
		echo "</ul>";
	?>
  </li>
<?
}
?>
</ul>
<br>
<br>
<br>
<strong>Packages</strong>
<hr />

<ul>
<?
$result1 = $groups->getByParentIdAndLinkType(0, "PackageRegion");
while ($row1 = $conn->fetchArray($result1)) {
?>
<li><a href="<?=$row1['urlname'];?>"><?=$row1['name'];?></a>
	<ul>
  <?
	$regionId = $row1['id'];
	$sql = "SELECT * FROM groups WHERE regionId='$regionId' AND linkType='Package' ORDER BY categoryId";
	$result2 = $conn->exec($sql);
	while ($row2 = $conn->fetchArray($result2)) {
	?>
  	<li><a href="<?=$row2['urlname'];?>"><?=$row2['name'];?></a></li>
  <?
	}
	?>
  </ul>
</li>
<?
}
?>
</ul>