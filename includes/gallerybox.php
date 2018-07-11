<div class="photoGallery">
  <!-- title starts -->
  <div class="title">
    Photo <span>Gallery</span>
  </div>
  <!-- title ends -->

  <!-- content starts -->
  <div class="content">
    <?
		$sql = "SELECT * FROM groups WHERE linkType='GallerySub' ORDER BY rand() LIMIT 6";
		$result = $conn->exec($sql);
		while ($row = $conn->fetchArray($result)) {
		?>
    <a href="<?=$row['urlname'];?>"><img src="<?=imager($row['image'], 67, 67, TRUE);?>" alt="<?=$row['shortcontents'];?>" class="imglast" /></a>
    <?
		}
		?>
  </div>
  <!-- content ends -->
  <div class="CB"></div>
</div>