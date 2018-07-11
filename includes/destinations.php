<h1>Destinations</h1>
<br />
<br />

<ul>
<?
$sql1 = "SELECT * FROM groups WHERE linkType='PackageRegion'";
$result1 = $conn->exec($sql1);
while ($row1 = $conn->fetchArray($result1)) {
$regionId = $row1['id'];
?>
	<li><a href="<?=$row1['urlname'];?>"><?=$row1['name'];?></a>
  <?
	$sql2 = "SELECT * FROM groups WHERE linkType='Package' AND regionId='$regionId' ORDER BY categoryId, weight";
	$result2 = $conn->exec($sql2);
	if ($conn->numRows($result2) > 0)
		echo "<ul>";
	while ($row2 = $conn->fetchArray($result2)) {
	?>
  <li><a href="<?=$row2['urlname'];?>"><?=$row2['name'];?></a></li>
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