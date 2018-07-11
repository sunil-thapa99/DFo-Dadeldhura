<style>
	.gall{float:left; margin-bottom:3px;margin-right:0px;line-height:75px;}
	.gall:nth-child(4n+4){ margin-right:0}
</style>

<link rel="stylesheet" href="slimbox/slimbox2.css" type="text/css" media="screen" />
<script type="text/javascript" src="slimbox/slimbox2.js"></script>
<?php include("includes/breadcrumb.php"); ?>
<div id="content" class="cf" style="width:75%">
<?php //include("includes/breadcrumb.php"); ?>
<article class="single-view post-77 page type-page status-publish hentry">
    <header class="entry-header cf"><h2 class="entry-title"><?php echo $pageName; ?></h2></header>
    <div class="entry-byline cf">
    </div>
    <div class="entry-content cf">
		<div  class="cmsGalleryWrapper">
		<div>
			<?php 
			$i = 0;
			$pagename = $pageUrlName."/";
			$sql = "SELECT * FROM groups WHERE parentId = $pageId ORDER BY id DESC";

			$newsql = $sql;

			$limit = PAGING_LIMIT;

			include("includes/pagination.php");
			$return = Pagination($sql, "");


			$arr = explode(" -- ", $return);

			$start = $arr[0];
			$pagelist = $arr[1];
			/*$count = $arr[2];*/

			$newsql .= " LIMIT $start, 15";

			$result = mysql_query($newsql);
			$displayPerRow = 5;
			while ($galleryRow = $conn->fetchArray($result))
			{
			++$i;
			?>
			<div class="gall" style="margin-right: 15px">
				<a rel="lightbox-gallery" href="<?= CMS_GROUPS_DIR . $galleryRow['image'] ?>" title="<?php echo $galleryRow['shortcontents']; ?>">
			    <img src="<?php echo CMS_GROUPS_DIR.$galleryRow['image'];?>" border="0" alt="<?= $galleryRow['shortcontents']; ?>"  title="<?= $galleryRow['shortcontents']; ?>" style="border-color:#333; width:155px; height:110px;" /></a>
			    </div>
			<?php
			}
			?>
		</div>
		<?php
		if($count > $limit)
			echo $pagelist;
		?>
		<div style="clear:both;"></div>
	</div>
</article>
</div>