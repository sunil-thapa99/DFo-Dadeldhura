<?php include("includes/breadcrumb.php"); ?>

<div id="content" class="cf" style="width:75%">
<?php //include("includes/breadcrumb.php"); ?>
<article class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf"><h2 class="entry-title"><?php if($lan!='en') echo $pageName; else echo $pageNameEn;?></h2></header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf">
	<?php
	$pagename = "index.php?linkId=". $pageId ."&";
	$sql = "SELECT * FROM groups WHERE parentId = '$pageId' ORDER BY id ASC";
	$newsql = $sql;
	$limit = LISTING_LIMIT;

	//get alias name
	$alias=$groups->getById($pageId);
	$aliasGet=$conn->fetchArray($alias);

	include("includes/pagination.php");
	$return = Pagination($sql, "", $limit, $aliasGet['urlname']);
	$arr = explode(" -- ", $return);
	$start = $arr[0];
	$pagelist = $arr[1];
	$count = $arr[2];
	$newsql .= " LIMIT $start, $limit";
	$result = mysql_query($newsql);
	while ($listRow = $conn->fetchArray($result))
	{?>
		<div class="listRow" style="margin:4px 0px">
  			<? if(file_exists(CMS_GROUPS_DIR . $listRow['image']) && !empty($listRow['image'])){?>
	  			<div style="float: left; width: 110px;"> 
	  				<a href="<?= $listRow['urlname'] ?>">
	  					<img src="<?php echo imager($listRow['image'], 100, 75, "fix"); ?>" alt="<?php echo $listRow['title']; ?>" style="border:0" />
	  				</a>
	  			</div>
  			<? } ?>
  			<div>
    			<div>
      				<div class="newsList">
      					<a href="<?php echo $listRow['urlname']; ?>"><?php echo $listRow['name']; ?></a>
      				</div>
      				<?php echo $listRow['shortcontents']; ?>
      			</div>
  			</div>
		</div>
		<div style="clear:both;"></div>
	<? }
	if($count > $limit)
		echo $pagelist;
	?>
</div>
</article>
</div>