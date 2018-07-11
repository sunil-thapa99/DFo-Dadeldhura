<div class="FL">
<div class="package-expd-block FL"><!-- expedition block starts -->
  <div class="expd-blockHdr"><!-- expedition block header starts --> 
    <?=$pageName;?> </div>
  <!-- expedition block header ends -->
  <div class="expd-blockContent"><!-- expedition block content starts -->
    <div class="expd-blockContent-left FL"><!-- expedition block content left starts --> 
      <img src="<?=imager($pageRow['image'], 250, 250, TRUE);?>" title="<?=$pageName;?>" alt="<?=$pageName;?>" /></a> </div>
    <!-- expedition block content left ends -->
    <div class="packageContent FR"><!-- expedition block content right starts -->
      <div>Time :<span><?=$pageRow['duration']; ?></span></div>
      <div>Grade :<span>
        <?
				for($i=0; $i<$pageRow['grade']; $i++)
					echo '<img src="images/singlestar.png" />';
				?>
        </span></div>
      <div>Altitude :<span><?=$pageRow['altitude']; ?></span></div>
      <div>Group Size :<span><?=$pageRow['groupSize']; ?></span></div>
      <div style="text-align:justify;">Details :<span><?= $pageShortContents; ?></span></div>
    </div>
    <!-- expedition block content right ends --> 
  </div>
  <!-- expedition block content ends --> 
</div>

<br clear="all">
<?
	function createTabs($packageId)
		{
			global $conn;
			global $groups;
			
			
			$result = $groups->getByParentIdAndLinkType($packageId, "PackageCMS");
			$numRows = $conn->numRows($result);
			if($numRows > 0)
				{
					if($parentId > 0)
						echo "<ul style='margin-top:10px;'>";
					else
						echo "<ul>";	
					while($row = $conn->fetchArray($result))
						{
							$counter++;
							echo '<li><a href="#tabs-'.$row['id'].'">'.$row['name'].'</a></li>';
						}
					echo "</ul>";
					$conn->resetFetchCounter($result);
					while($row = $conn->fetchArray($result))
						{
							$counter++;
							echo '<div id="tabs-'.$row['id'].'">';
							if($row['shortcontents'] == 'Content')
								echo '<div class="abc" style="text-align:justify;">'.$row['contents'].'</div>';
							else if($row['shortcontents'] == 'Gallery')
								{
									$galleryResult = $packagegalleries->getByCmsId($row['id']);
									while($galleryRow = $conn->fetchArray($galleryResult))
										{
											echo '<a rel="lightbox-gallery" title="'.$galleryRow['caption'].'" href="'.CMS_PACKAGE_IMAGES_DIR.$galleryRow['id'].".".$galleryRow['ext'].'">';
												echo '<img src="data/imager.php?file=../'.CMS_PACKAGE_IMAGES_DIR.$galleryRow['id'].'.'.$galleryRow['ext'].'&mh=75&mw=100&fix" style="float:left; border:2px #fff solid; margin:0 10px 10px 0;" />';
											echo '</a>';
										}
									echo '<br clear="all" />';
									
								}
							//createTabs($packageId, $row['id']);
							echo '</div>';
						}
				}
		}
?>
<style>
.abc .ui-widget-header { border:0px; background:none; color: #928577; font-weight: normal; }
.abc .ui-widget-header a { color: #857759; }

.abc .ui-widget-header ul, .abc .ui-widget-header ol, .abc .ui-tabs-nav{
	margin-left:30px;
}


.abc .ui-widget-header li, .abc .ui-tabs-nav ul li
{
	list-style-type:decimal;
	float:none;
	list-style-position:outside;
	white-space:inherit;
}



</style>
<div style="width:660px;">
<div id="tabs">
<?
	createTabs($pageId);
?>
</div>
</div>
</div>
