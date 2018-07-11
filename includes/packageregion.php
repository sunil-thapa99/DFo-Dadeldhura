<h1><?=$pageName;?></h1>
<br />
<br />
<?
$sql = "SELECT * FROM groups WHERE linkType='Package' AND regionId='$pageId'";
$result = $conn->exec($sql);
while ($row = $conn->fetchArray($result)) {
?>
<li><a href="<?=$row['urlname'];?>"><?=$row['name'];?></a></li>
<?
}
?>